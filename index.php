<?php

require "vendor/autoload.php";

//require "functions/helpers.php";

$registro = new asw\jobs\Register;

ddp($registro->registrar());