#FOR LINUX/AMD64
#FROM chialab/php:7.4-apache

#FOR ARM64
FROM arm64v8/php:7.4-apache

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libzip-dev \
        zip \
        libpq-dev \
        libcurl4-openssl-dev \
        libxml2-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install -j$(nproc) zip \
    && docker-php-ext-install -j$(nproc) mysqli \
    && docker-php-ext-install -j$(nproc) pdo \
    && docker-php-ext-install -j$(nproc) curl \
    && docker-php-ext-install -j$(nproc) sockets \
    && docker-php-ext-install -j$(nproc) pdo_mysql \
    && docker-php-ext-install -j$(nproc) exif \
    && docker-php-ext-install -j$(nproc) soap \
    && docker-php-ext-enable pdo_mysql \
    && docker-php-ext-enable mysqli

ENV APACHE_DOCUMENT_ROOT=/var/www/html
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

RUN echo 'max_execution_time=240' >> /usr/local/etc/php/conf.d/php.ini \
 && echo 'memory_limit=1G' >> /usr/local/etc/php/conf.d/php.ini \
 && echo 'upload_max_filesize=20M' >> /usr/local/etc/php/conf.d/php.ini \
 && echo 'post_max_size=21M' >> /usr/local/etc/php/conf.d/php.ini

#FOR ARM64
RUN a2enmod rewrite
RUN service apache2 restart

COPY ./ /var/www/html/

WORKDIR /var/www/html

#FOR LINUX/AMD64
#RUN composer install

#FOR ARM64
#RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN chmod -R 777 /var/www/html/design
RUN chmod -R 777 /var/www/html/images
#RUN chmod -R 777 /var/www/html/install
RUN chmod -R 777 /var/www/html/var
RUN chmod -R 666 /var/www/html/config.local.php
