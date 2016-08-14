<?php

include 'src/step.php';

$template = new step('template');

echo $template->render('welcome',[
    'welcome'  => 'Hello...',
    'tag' => 'Welcome to <b>Step</b>, simple template engine for PHP'
]);
