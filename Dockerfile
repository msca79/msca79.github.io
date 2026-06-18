FROM php:8.2-apache

# Szükséges rendszercsomagok telepítése a zip kiterjesztéshez és PDF olvasáshoz
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    poppler-utils \
    && docker-php-ext-install zip

# Apache rewrite modul engedélyezése (opcionális, de ajánlott)
RUN a2enmod rewrite
