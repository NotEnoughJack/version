FROM php:8.1-apache

# Enable Apache mod_rewrite (optional but useful)
RUN a2enmod rewrite

# Copy app files
COPY . /var/www/html/

# Set permissions for version.json to be writable
RUN chmod 666 /var/www/html/version.json
