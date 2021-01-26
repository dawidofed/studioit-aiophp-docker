FROM php:7.4-fpm

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod uga+x /usr/local/bin/install-php-extensions \
    && sync \
    && install-php-extensions amqp apcu bcmath exif gd grpc imap intl ldap mcrypt opcache pgsql pdo_mysql redis sockets uuid xdebug yaml zip

