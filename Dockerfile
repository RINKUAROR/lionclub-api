# Use official PHP image with Apache
FROM php:8.2-apache

# Copy all project files into Apache root
COPY . /var/www/html/

# Enable Apache mod_rewrite (if needed)
RUN a2enmod rewrite
