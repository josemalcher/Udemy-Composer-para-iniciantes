<?php

require 'vendor/autoload.php';

$produto = new app\models\Produto;
echo $produto->create();

$search = new asw\services\Search;
echo $search->search();

$registro = new asw\jobs\Register;
echo $registro->registrar();