#!/bin/sh

# Copy custom php.ini config
cp "/var/www/html/yapi-sample/docker/php-custom.ini" "$PHP_INI_DIR/conf.d/"

# Install Xdebug and YAML extensions
apt-get update && apt-get install -y libyaml-dev \
&& pecl install xdebug && pecl install yaml \
&& docker-php-ext-enable xdebug yaml

# Install PHP extensions
docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache Rewrite module
a2enmod rewrite

# Run the docker php entrypoint
/usr/local/bin/docker-php-entrypoint apache2-foreground