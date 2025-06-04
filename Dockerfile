FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    git unzip curl zip libzip-dev libpng-dev libonig-dev libxml2-dev libcurl4-openssl-dev pkg-config libssl-dev \
    && docker-php-ext-install pdo pdo_mysql zip mbstring exif pcntl bcmath gd curl

RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && apt-get install -y nodejs

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /app

COPY package*.json ./

RUN npm install

COPY . .

RUN npm run build

# Composer install dengan memory_limit unlimited dan menampilkan output error lengkap
RUN php -d memory_limit=-1 /usr/local/bin/composer install --optimize-autoloader --no-dev --no-interaction --verbose

EXPOSE 9000

CMD ["php-fpm"]