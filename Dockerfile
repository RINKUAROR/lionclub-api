FROM php:8.2-apache

# mysqli install karo
RUN docker-php-ext-install mysqli

# Copy local files into container
COPY . /var/www/html/

# Enable Apache rewrite module (optional)
RUN a2enmod rewrite
