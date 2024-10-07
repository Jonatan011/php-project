# Usa una imagen oficial de PHP con Apache
FROM php:8.0-apache

# Instala extensiones de PHP necesarias
RUN docker-php-ext-install pdo pdo_mysql

# Copia los archivos del proyecto
COPY . /var/www/html

# Instala las dependencias de Composer
RUN apt-get update && apt-get install -y zip unzip git
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --optimize-autoloader --no-dev

# Establece permisos
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html/storage

# Configura Apache para apuntar a la carpeta public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Exponer el puerto 80
EXPOSE 80

# Comando para iniciar Apache
CMD ["apache2-foreground"]
