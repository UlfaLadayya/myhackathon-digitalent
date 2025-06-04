# Pakai base image PHP 8.2 dengan FPM
FROM php:8.2-fpm

# Install dependencies sistem dan PHP extensions yang dibutuhkan Laravel
RUN apt-get update && apt-get install -y \
    git unzip curl zip libzip-dev libpng-dev libonig-dev libxml2-dev libcurl4-openssl-dev pkg-config libssl-dev \
    && docker-php-ext-install pdo pdo_mysql zip mbstring exif pcntl bcmath gd curl

# Install Node.js (pakai versi 18.x yang stabil)
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get install -y nodejs

# Install Composer secara global
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory ke /app (ubah kalau root project kamu beda)
WORKDIR /app

# Copy package.json dan package-lock.json dulu (untuk caching npm install)
COPY package*.json ./

# Install dependencies npm
RUN npm install

# Copy semua source code ke container
COPY . .

# Build frontend assets dengan Vite (sesuai di package.json)
RUN npm run build

# Install dependencies PHP tanpa dev untuk production
RUN composer install --optimize-autoloader --no-dev

# Expose port 9000 (default php-fpm)
EXPOSE 9000

# Jalankan php-fpm
CMD ["php-fpm"]