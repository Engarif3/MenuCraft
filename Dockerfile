FROM php:8.2-cli

WORKDIR /var/www/html

# System deps + PostgreSQL extension
RUN apt-get update && apt-get install -y \
    libpq-dev unzip git curl \
    && docker-php-ext-install pdo pdo_pgsql

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy project
COPY . .

# Install PHP deps
RUN composer install --no-dev --optimize-autoloader

# Clear & warmup cache
RUN php bin/console cache:clear --env=prod --no-debug
RUN php bin/console cache:warmup --env=prod

# Expose port for Render
EXPOSE 10000

# Start Symfony
CMD ["php", "-S", "0.0.0.0:10000", "-t", "public"]
