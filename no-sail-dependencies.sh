#!/bin/bash

sudo apt update
sudo apt upgrade
sudo apt install ca-certificates apt-transport-https software-properties-common --no-install-recommends -y
sudo add-apt-repository ppa:ondrej/php -y
sudo apt-get install php php-common php-redis --no-install-recommends -y