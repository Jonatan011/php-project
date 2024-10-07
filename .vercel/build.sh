#!/bin/bash

# Instalar las dependencias de Composer
composer install --optimize-autoloader --no-dev

# Ejecutar las migraciones de la base de datos (opcional)
php artisan migrate --force
