# Use the official PHP Apache image
FROM php:7.4-apache

# Install necessary PHP extensions
RUN apt-get update && apt-get install -y mariadb-client \
    && docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy the project files to the Apache root directory
COPY . /var/www/html/

# Expose port 80 for Apache
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]
