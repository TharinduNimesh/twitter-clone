# Use the official PHP image as a base image
FROM php:8.3-fpm

# Set working directory
WORKDIR /var/www

# Install system dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    wget \
    git \
    curl \
    libzip-dev \
    libpq-dev \
    libonig-dev \
    nodejs \
    npm \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql mbstring zip exif pcntl

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy the existing application directory contents to the working directory
COPY . /var/www

# Copy the existing application directory permissions to the working directory
COPY --chown=www-data:www-data . /var/www

RUN composer install --prefer-dist --optimize-autoloader --no-interaction

# Install Node.js dependencies
RUN npm install && npm run build

RUN php artisan migrate --force && php artisan optimize:clear && php artisan config:clear && php artisan route:clear && php artisan view:clear && php artisan optimize

# Change current user to www-data
USER www-data

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]