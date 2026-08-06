FROM php:8.3-apache

# --------------------------------------------------
# System dependencies
# --------------------------------------------------
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    curl \
    libpq-dev \
    libicu-dev \
    libzip-dev \
    libonig-dev \
    && rm -rf /var/lib/apt/lists/*

# --------------------------------------------------
# PHP extensions required by CodeIgniter
# --------------------------------------------------
RUN docker-php-ext-install \
    intl \
    mbstring \
    zip \
    pdo \
    pdo_pgsql \
    pgsql

# --------------------------------------------------
# Apache configuration
# --------------------------------------------------
RUN a2enmod rewrite

# Make Apache serve CodeIgniter's public folder
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf \
    /etc/apache2/apache2.conf \
    /etc/apache2/conf-available/*.conf

# --------------------------------------------------
# Application files
# --------------------------------------------------
WORKDIR /var/www/html

COPY . .

# --------------------------------------------------
# Composer
# --------------------------------------------------
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction

# --------------------------------------------------
# Permissions
# --------------------------------------------------
RUN mkdir -p writable/cache \
    writable/logs \
    writable/session \
    writable/uploads

RUN chown -R www-data:www-data writable
RUN chmod -R 775 writable

# --------------------------------------------------
# Port
# --------------------------------------------------
EXPOSE 80

CMD ["apache2-foreground"]
