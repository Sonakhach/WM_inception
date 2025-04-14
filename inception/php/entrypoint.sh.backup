#!/bin/bash
set -e

# Սպասում ենք MariaDB-ին
echo "waiting MariaDB"
until mysqladmin ping -h"mariadb" --silent; do
    sleep 1
done

cd /var/www/html

# Եթե WordPress դեռ տեղադրված չէ
if [ ! -f wp-config.php ]; then
    echo "loading WordPress"
    wp core download --allow-root

    echo "creates wp-config.php..."
    wp config create --dbname=mydb --dbuser=myuser --dbpass=userpassword123 --dbhost=mariadb --allow-root

    echo "instalation WordPress-ը..."
    wp core install --url=https://localhost:4343 --title="MySite" \
        --admin_user=admin --admin_password=admin123 --admin_email=admin@example.com --allow-root
else
    echo "WordPress- already instaled"
fi

exec "$@"
