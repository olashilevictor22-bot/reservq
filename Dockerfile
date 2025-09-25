# Use the official PHP image with Apache
FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git unzip libpq-dev libzip-dev zip && \
    docker-php-ext-install pdo pdo_mysql

# Enable Apache rewrite module (needed for Laravel routes)
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Set correct permissions for Laravel storage and bootstrap
RUN chown -R www-data:www-data storage bootstrap/cache

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
