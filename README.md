# Carpenter
Craft stack.

```bash
composer install
vendor/bin/craft install # (agree to license)
cp config/db.php craft/config/db.php
(eval `cat .env`; export CRAFT_BASE_PATH; php -d variables_order=EGPCS ./vendor/bin/schematic import index --file=config/schema.yml --override_file=config/override.yml)

```

(eval `cat .env`; php -d variables_order=EGPCS ./vendor/bin/schematic import index --file=config/schema.yml --override_file=config/override.yml)

## TODO
- Should craftPath be set with the .env value as well? At the moment it is hardcoded.
