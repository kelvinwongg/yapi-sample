#!/bin/zsh

# Use this docker command to start development server
# docker run \
# 	-d \
# 	-p 80:80 \
# 	--name yapi \
# 	--network macbook \
# 	-v "$PWD":/var/www/html \
# php:7.4.25-apache

# Use this docker command to start development server with XDebug enabled
docker run \
	-d \
	-p 80:80 \
	--name yapi \
	--network macbook \
	-v "$PWD":/var/www/html \
	--entrypoint="/var/www/html/yapi-sample/docker/entrypoint.sh" \
php:8.1-apache