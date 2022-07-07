#!/bin/bash
docker info > /dev/null 2>&1

# Ensure that Docker is running...
if [ $? -ne 0 ]; then
    echo "Docker is not running."
    exit 1
fi

read -p "Are you sure you want to truncate respins-laravel files, docker images & docker containers? <y/N> " prompt
if [[ $prompt =~ [yY](es)* ]]; then
    echo "Stopping sail containers.."
    cd "respins-laravel"
    bash -c "${PWD}/vendor/bin/sail down"
    sleep 5
    echo "Pruning docker containers & images.."
    bash -c "docker system prune"
    sleep 5
    echo "Removing files.."
    sleep 5
    cd ../
    bash -c "rm -r respins-laravel"
    exit 1
fi
