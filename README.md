# Carpenter
Craft stack.

```bash
composer install
vendor/bin/craft install # (agree to license)
cp config/db.php craft/config/db.php
(
    eval `cat .env`;
    export DB_HOST;
    export DB_NAME;
    export DB_USER;
    export DB_PASSWORD;
    export CRAFT_USERNAME;
    export CRAFT_EMAIL;
    export CRAFT_PASSWORD;
    export CRAFT_SITENAME;
    export CRAFT_SITEURL;
    export CRAFT_LOCALE;
    php -d variables_order=EGPCS ./vendor/bin/schematic import
)
```
Append `--file=config/schema.yml` --force for custom schema

## TODO
- Should craftPath be set with the .env value as well? At the moment it is hardcoded.
