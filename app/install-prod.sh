#!/bin/bash

# Install PHP dependencies
composer install --optimize-autoloader --no-dev

# Run migrations
#php artisan migrate --force

# Cache PHP static files
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Install node dependencies
npm install

# Build assets
npm run production
