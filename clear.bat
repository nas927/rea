#!/bin/bash

# Nettoyer les caches de Laravel
php artisan view:clear
php artisan config:clear
php artisan route:clear
php artisan event:clear
php artisan cache:clear

echo "Tous les caches de Laravel ont été nettoyés."
