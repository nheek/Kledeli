FROM php:8.1.31-apache
WORKDIR /var/www/html
COPY . .
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    && rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-install mysqli
RUN a2enmod rewrite
CMD ["apache2-foreground"]