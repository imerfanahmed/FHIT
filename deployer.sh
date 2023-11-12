#write a deployer script for laravel application to deploy the application on the server wihtout npm

# 1. create a new directory for the project
git clone
# 2. copy the .env.example to .env
cp .env.example .env
# 3. generate the application key
php artisan key:generate
# 4. install the composer dependencies
composer install --no-dev --no-interaction --no-progress --optimize-autoloader
# 5. install the npm dependencies
npm install
# 6. build the production assets
npm run production
# 7. run the database migrations (optional)
php artisan migrate --force
# 8. reload PHP to update opcache

