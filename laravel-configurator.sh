#!/bin/bash


#Config - set these to your own desired value
APP_NAME="Respins.io"
APP_URL="https://80-respins-devrepository-al12nbv4ix0.ws-eu51.gitpod.io"

#Start of script
CYAN='\033[0;36m'
LIGHT_CYAN='\033[1;36m'
WHITE='\033[1;37m'
NC='\033[0m'

echo
echo -e "${LIGHT_CYAN}Respins configuration"
echo -e "${WHITE}Ensure that the .env file is writable. Only default values are changed, so you can re-run this config if you have customized any settings"

#Change app specifics
echo -e "${LIGHT_CYAN}Attempt to change app specifics.."
echo -e "${NC}> Changing APP_NAME from Laravel to $APP_NAME"
sed -i "s|APP_NAME=Laravel|APP_NAME=$APP_NAME|g" example-app/.env
echo -e "${NC}> Changing APP_URL from Laravel to $APP_NAME"
sed -i "s|APP_URL=http://example-app.test|APP_URL=$APP_URL|g" example-app/.env
echo
echo -e "${NC}If APP_NAME is changed please execute:"
echo -e "${NC}cd example-app && ./vendor/bin/sail artisan key:generate"
echo

#Change drivers in .env
echo
echo -e "${LIGHT_CYAN}Config the default drivers.."
echo -e "${NC}> Changing BROADCAST_DRIVER from log to redis"
sed -i "s|BROADCAST_DRIVER=log|BROADCAST_DRIVER=redis|g" example-app/.env
echo -e "${NC}> Changing CACHE_DRIVER from file system to redis"
sed -i "s|CACHE_DRIVER=file|DB_PASSWORD=redis|g" example-app/.env
echo -e "${NC}> Changing QUEUE_CONNECTION from sync system to redis"
sed -i "s|QUEUE_CONNECTION=sync|QUEUE_CONNECTION=redis|g" example-app/.env
echo -e "${NC}> Changing SESSION_DRIVER from file system to redis"
sed -i "s|SESSION_DRIVER=file|SESSION_DRIVER=redis|g" example-app/.env
echo -e "${NC}> Changing SESSION_LIFETIME from 120 to 30"
sed -i "s|SESSION_LIFETIME=120|SESSION_LIFETIME=30|g" example-app/.env
echo -e "${NC}> Changing LOG_CHANNEL from stack to daily"
sed -i "s|LOG_CHANNEL=stack|LOG_CHANNEL=daily|g" example-app/.env

#Randomized string generation
echo
echo -e "${LIGHT_CYAN}Generating database password.."
sleep 4
RANDOMIZED_PASSWORD_DATABASE=$(date +%s | sha256sum | base64 | head -c 48 ; echo)
sed -i "s|DB_PASSWORD=password|DB_PASSWORD=$RANDOMIZED_PASSWORD_DATABASE|g" example-app/.env

echo -e "${WHITE}> DB_PASSWORD set to $RANDOMIZED_PASSWORD_DATABASE"

echo -e "${LIGHT_CYAN}Generating redis password.."
sleep 3
RANDOMIZED_PASSWORD_REDIS=$(date +%s | sha256sum | base64 | head -c 32 ; echo)
sed -i "s|REDIS_PASSWORD=null|REDIS_PASSWORD=$RANDOMIZED_PASSWORD_REDIS|g" example-app/.env
echo -e "${WHITE}> REDIS_PASSWORD set to $RANDOMIZED_PASSWORD_REDIS"

echo -e "${LIGHT_CYAN}Configuration completed! Make sure to restart your containers:"
echo -e "${WHITE}cd example-app && ./vendor/bin/sail restart"
echo
