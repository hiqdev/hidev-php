The preferred way to install this <?= $config->package->type ?> is through [composer](http://getcomposer.org/download/).

<?php if ($config->package->type === 'project') : ?>
```sh
php composer.phar create-project "<?= $config->package->fullName ?>:*" directory2install
```
<?php else : ?>
Either run

```sh
php composer.phar require "<?= $config->package->fullName ?>"
```

or add

```json
"<?= $config->package->fullName ?>": "*"
```

to the require section of your composer.json.
<?php endif ?>
