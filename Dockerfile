# Use PHP official image
FROM php:8.2-cli

# Set working directory
WORKDIR /app

# Install system dependencies
RUN apt-get update && apt-get install -y \
    unzip \
    zip \
    git \
    curl \
    libzip-dev

# Install PHP extensions needed by Laravel
RUN docker-php-ext-install pdo pdo_mysql zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy project files
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Set permissions (important for Laravel)
RUN chmod -R 775 storage bootstrap/cache

# Expose Render port
EXPOSE 10000

# Start Laravel
CMD php artisan serve --host=0.0.0.0 --port=10000
