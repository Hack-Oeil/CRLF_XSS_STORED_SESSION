FROM php:8.1

# Install required dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html

COPY www/ .

RUN apt-get update && apt-get install -y cron
COPY admin-crontab /etc/cron.d/admin-crontab
RUN chmod 0644 /etc/cron.d/admin-crontab && crontab /etc/cron.d/admin-crontab

RUN composer install
