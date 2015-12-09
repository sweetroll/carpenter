# Carpenter
Craft stack.

```bash
composer install
vendor/bin/craft install craft (agree to license)
cp config/schema.yml craft/craft/config/schema.yml
./vendor/bin/schematic import index --file=config/schema.yml --override_file=config/override.yml
```

## TODO
- Can craft-cli populate DB credentials from .env?
- Have schematic read CRAFT_BASE_PATH from .craft.cli.yml
- How can schematic use .env in general?
