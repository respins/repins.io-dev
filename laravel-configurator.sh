#!/bin/bash

#Config - set these to your own desired value
#Should be moved to seperated .env imo
APP_NAME="Respins.io"
APP_URL="https://80-respinning-respinning-li5ezuu3sea.ws-eu51.gitpod.io"

#Start of script
CYAN='\033[0;36m'
LIGHT_CYAN='\033[1;36m'
WHITE='\033[1;37m'
NC='\033[0m'

echo
echo -e "${LIGHT_CYAN}Respins.io Configurator"
echo -e "${WHITE}Ensure that the .env file is writable."
echo
echo -e "${LIGHT_CYAN}Most variables will apply only the first time you run this script. You can run truncate script if you wish to start afresh."
echo -e "${NC}You can always change values manually in .env & docker-compose.yml within respins-laravel folder."
echo
echo -e "${WHITE}> Starting in 5 seconds.."

sleep 5

#Change app specifics
echo -e "${LIGHT_CYAN}Attempt to change app specifics.."
echo -e "${NC}> Changing APP_NAME from Laravel to $APP_NAME"
sed -i "s|APP_NAME=Laravel|APP_NAME=$APP_NAME|g" respins-laravel/.env
echo -e "${NC}> Changing APP_URL from Laravel to $APP_NAME"
sed -i "s|APP_URL=http://respins-laravel.test|APP_URL=$APP_URL|g" respins-laravel/.env
echo
echo -e "${NC}If APP_NAME is changed please execute:"
echo -e "${NC}cd respins-laravel && ./vendor/bin/sail artisan key:generate"
echo

#Change the default drivers in .env
echo
echo -e "${LIGHT_CYAN}Config the default drivers.."
echo -e "${NC}> Changing BROADCAST_DRIVER from log to redis"
sed -i "s|BROADCAST_DRIVER=log|BROADCAST_DRIVER=redis|g" respins-laravel/.env
echo -e "${NC}> Changing CACHE_DRIVER from file system to redis"
sed -i "s|CACHE_DRIVER=file|DB_PASSWORD=redis|g" respins-laravel/.env
echo -e "${NC}> Changing QUEUE_CONNECTION from sync system to redis"
sed -i "s|QUEUE_CONNECTION=sync|QUEUE_CONNECTION=redis|g" respins-laravel/.env
echo -e "${NC}> Changing SESSION_DRIVER from file system to redis"
sed -i "s|SESSION_DRIVER=file|SESSION_DRIVER=redis|g" respins-laravel/.env
echo -e "${NC}> Changing SESSION_LIFETIME from 120 to 30"
sed -i "s|SESSION_LIFETIME=120|SESSION_LIFETIME=30|g" respins-laravel/.env
echo -e "${NC}> Changing LOG_CHANNEL from stack to daily"
sed -i "s|LOG_CHANNEL=stack|LOG_CHANNEL=daily|g" respins-laravel/.env

#Randomized string generation
#Should only be run once, as will not apply the runs afterwards to protect
echo -e "${WHITE}"
read -p "Do you want to change default passwords for your drivers? <y/N> " prompt
if [[ $prompt =~ [yY](es)* ]]; then
echo
echo -e "${LIGHT_CYAN}Generating database password.."
sleep 4
RANDOMIZED_PASSWORD_DATABASE=$(date +%s | sha256sum | base64 | head -c 48 ; echo)
sed -i "s|DB_PASSWORD=password|DB_PASSWORD=$RANDOMIZED_PASSWORD_DATABASE|g" respins-laravel/.env
echo -e "${WHITE}> DB_PASSWORD set to $RANDOMIZED_PASSWORD_DATABASE"
echo
echo -e "${LIGHT_CYAN}Generating minio root password.."
sleep 3
RANDOMIZED_PASSWORD_MINIO=$(date +%s | sha256sum | base64 | head -c 32 ; echo)
sed -i "s|MINIO_ROOT_PASSWORD: 'password'|MINIO_ROOT_PASSWORD: '$RANDOMIZED_PASSWORD_MINIO'|g" respins-laravel/docker-compose.yml
sed -i "s|MINIO_ROOT_USER: 'sail'|MINIO_ROOT_USER: 'respins'|g" respins-laravel/docker-compose.yml
echo -e "${WHITE}> MINIO_ROOT_USER set to respins"
echo -e "${WHITE}> MINIO_ROOT_PASSWORD set to $RANDOMIZED_PASSWORD_MINIO"
fi

echo

#Randomized ports for minio, database, redis
#Should only be run once as it appends the ports to .env file
read -p "Do you wish to append randomized ports for your services to .env? <y/N> " prompt
if [[ $prompt =~ [yY](es)* ]]; then
APP_PORT="80"
RANDOM_DB_PORT=$(( $RANDOM % 35000 + 15000 ))
FORWARD_MINIO_PORT=$(( $RANDOM % 35000 + 15000 ))
FORWARD_MINIO_CONSOLEPORT=$(( $FORWARD_MINIO_PORT - 100 ))
RANDOM_REDIS_PORT=$(( $RANDOM % 14000 + 10000 ))
cat << EOF >> respins-laravel/.env
APP_PORT=$APP_PORT
FORWARD_DB_PORT=$RANDOM_DB_PORT
FORWARD_MINIO_PORT=$FORWARD_MINIO_PORT
FORWARD_MINIO_CONSOLE_PORT=$FORWARD_MINIO_CONSOLEPORT
FORWARD_REDIS_PORT=$RANDOM_REDIS_PORT
EOF
echo -e "${LIGHT_CYAN}Appended configuration to .env:${NC} 
APP_PORT=$APP_PORT 
FORWARD_DB_PORT=$RANDOM_DB_PORT 
FORWARD_MINIO_PORT=$FORWARD_MINIO_PORT 
FORWARD_MINIO_CONSOLE_PORT=$FORWARD_MINIO_CONSOLEPORT 
FORWARD_REDIS_PORT=$RANDOM_REDIS_PORT"
fi

echo

#Completed configurator script
echo -e "${LIGHT_CYAN}Configuration completed! Make sure to restart your containers:"
echo -e "${WHITE}cd respins-laravel && ./vendor/bin/sail restart"
echo
