FROM php:8.1-fpm-alpine

WORKDIR /var/www/html
COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/
RUN MAKEFLAGS="-j $(nproc)" 
RUN install-php-extensions @composer zip pdo gd pdo_mysql protobuf mbstring exif
CMD ["php-fpm", "-y", "/usr/local/etc/php-fpm.conf", "-R"]