#!/bin/bash

echo "Base de datos lista. Ejecutando migraciones..."
php artisan migrate --force --seed
echo "Migraciones ejecutadas."

# Ejecutar el CMD por defecto (php-fpm)
exec "$@"