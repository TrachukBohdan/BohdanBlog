FROM php:7.2-fpm
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

RUN apt-get update \
    && apt-get install -y zlib1g-dev libfreetype6-dev libjpeg62-turbo-dev libpng-dev zip unzip git \
    && docker-php-ext-install zip \
	&& docker-php-ext-install -j$(nproc) iconv \
	&& docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
	&& docker-php-ext-install -j$(nproc) gd \
	&& docker-php-ext-install mysqli pdo pdo_mysql

# Install Composer.
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && ln -s $(composer config --global home) /root/composer
ENV PATH=$PATH:/root/composer/vendor/bin COMPOSER_ALLOW_SUPERUSER=1
#COPY config/www.conf /usr/local/etc/php-fpm.d/
RUN sed -i -e "s/pm.max_children = 5/pm.max_children = 500/g" /usr/local/etc/php-fpm.d/www.conf
RUN sed -i -e "s/pm.start_servers = 2/pm.start_servers = 10/g" /usr/local/etc/php-fpm.d/www.conf
RUN sed -i -e "s/pm.min_spare_servers = 1/pm.min_spare_servers = 10/g" /usr/local/etc/php-fpm.d/www.conf
RUN sed -i -e "s/pm.max_spare_servers = 3/pm.max_spare_servers = 20/g" /usr/local/etc/php-fpm.d/www.conf

WORKDIR /bohdanblog.loc
EXPOSE 9000