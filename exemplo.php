<?php

require __DIR__.'/vendor/autoload.php';

use Waed\DigitalCep\Search;

$busca = new Search;
$resultado = $busca->getAddressFromZipcode('01001000');
print_r($resultado);