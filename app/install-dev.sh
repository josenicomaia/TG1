#!/bin/bash

# Update project
git pull

# Install PHP dependencies
composer install

# Run migrations
php artisan migrate --force

# Clear cache PHP static files
php artisan optimize:clear

# Install node dependencies
npm install

# Build assets
npm run dev
