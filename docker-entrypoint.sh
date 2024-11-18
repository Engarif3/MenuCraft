#!/bin/sh
# docker-entrypoint.sh

# Wait for MySQL to be ready (optional but helpful)
echo "Waiting for MySQL to be ready..."
until mysql -h mysql -u root -e "SELECT 1" > /dev/null 2>&1; do
  echo "MySQL is not ready yet, waiting..."
  sleep 3
done

# Check if the database exists, if not, create it
echo "Checking if the database exists..."
if ! mysql -h mysql -u root -e "USE restaurantManagement"; then
  echo "Database does not exist, creating it..."
  mysql -h mysql -u root -e "CREATE DATABASE restaurantManagement"
fi

# Run migrations (this will create the necessary tables)
echo "Running migrations..."
php bin/console doctrine:migrations:migrate --no-interaction

# Clear the Symfony cache
echo "Clearing cache..."
php bin/console cache:clear --env=prod --no-warmup

# Finally, start the Symfony built-in server
echo "Starting Symfony server..."
php -S 0.0.0.0:8000 -t public
