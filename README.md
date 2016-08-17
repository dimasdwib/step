# Step
Simple template engine for PHP

##Basic Usage
```php
<?php
require_once '/path/to/step.php';

$template = new step('path/to/template');

echo $template->render('home', [
  'data' => 'Hello World'
]);
```

##Create a master template
master.php
```html
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Hello Wolrd</title>
</head>
<body>

  <?php step::setSection('content'); ?>
  
</body>
</html>
```

##Extend
home.php
```html
<?php step::extend('master.php') ?>

<?php step::section('content') ?>
<div class="content">

  <h1><?=$data?></h1>

</div>
<?php step::endsection() ?>
```

##Include
```html
<?php step::extend('master.php') ?>

<?php step::section('content') ?>
<div class="content">
    
  <?php step::getPart('header.php') ?>
  <h1><?=$data?></h1>
  
</div>
<?php step::endsection() ?>
