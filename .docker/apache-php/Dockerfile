FROM php:7.4-apache

COPY vhost.conf /etc/apache2/sites-available/000-default.conf

RUN a2enmod proxy_fcgi ssl rewrite proxy proxy_balancer proxy_http proxy_ajp

RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install pdo pdo_mysql

RUN apt-get update \
&& apt-get install -y libzip-dev libpq-dev libmcrypt-dev git zlib1g zip unzip libmagickwand-dev libonig-dev --no-install-recommends \
&& docker-php-ext-configure zip \
&& docker-php-ext-install zip pdo pdo_mysql mysqli gd mbstring

RUN pecl install mcrypt && docker-php-ext-enable mcrypt

RUN apt-get install -y sloccount

RUN pecl install imagick \
    && docker-php-ext-enable zip \
    && pecl install xdebug-2.9.7 \
    && docker-php-ext-enable imagick \
    && docker-php-ext-enable xdebug

RUN apt-get update -y && apt-get install -y libwebp-dev libjpeg62-turbo-dev libpng-dev libxpm-dev \
    libfreetype6-dev
RUN apt-get update && \
    apt-get install -y \
        zlib1g-dev

RUN docker-php-ext-install mbstring

RUN apt-get install -y libzip-dev
RUN docker-php-ext-install zip


RUN docker-php-ext-configure gd \
    && docker-php-ext-install gd


RUN sed -ri -e 's!;date.timezone =!date.timezone = "Europe/Madrid"!g' /usr/local/etc/php/php.ini-development
RUN sed -ri -e 's!;date.timezone =!date.timezone = "Europe/Madrid"!g' /usr/local/etc/php/php.ini-production

###required for phantomjs
RUN apt-get -y install libfontconfig libfreetype6 libfreetype6-dev libfontconfig1 libfontconfig1-dev


RUN echo 'max_execution_time = 300' >> /usr/local/etc/php/conf.d/docker-php-maxexectime.ini
RUN echo 'memory_limit = -1' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

##############################################################################
# Install support for sendmail. SendMail is used by php native "mail" command
##############################################################################
