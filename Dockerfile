FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    poppler-utils \
    msmtp \
    msmtp-mta \
    && docker-php-ext-install zip

RUN a2enmod rewrite

# PHP sendmail_path -> msmtp
RUN echo "sendmail_path = /usr/bin/msmtp -t -i" > /usr/local/etc/php/conf.d/mail.ini

COPY docker-entrypoint-msmtp.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint-msmtp.sh

ENTRYPOINT ["docker-entrypoint-msmtp.sh"]
CMD ["apache2-foreground"]