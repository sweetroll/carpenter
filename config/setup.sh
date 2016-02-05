#!/bin/sh
composer install
vendor/bin/craft install # (agree to license)
cp config/db.php craft/config/db.php
(eval `cat .env`; export DB_HOST; export DB_NAME; export DB_USER; export DB_PASSWORD; export CRAFT_USERNAME; export CRAFT_EMAIL; export CRAFT_PASSWORD; export CRAFT_SITENAME; export CRAFT_SITEURL; export CRAFT_LOCALE; php -d variables_order=EGPCS ./vendor/bin/schematic import index --file=config/schema.yml --force)
