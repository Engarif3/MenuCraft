# Use the official PHP image
FROM php:8.2-cli

# Install necessary dependencies
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev git unzip && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo pdo_mysql

# Set the working directory
WORKDIR /var/www/html

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Install Symfony dependencies
COPY . .

# Install Symfony PHP dependencies
RUN composer install --optimize-autoloader

# Expose the port Symfony runs on
EXPOSE 8000

# Start the Symfony built-in server
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
