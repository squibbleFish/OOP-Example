<?php
namespace Shirt;

require_once 'shirts/Shirt.php';
require_once 'shirts/TShirt.php';

use Shirt\TShirt\TShirt;

$tshirt = new TShirt('t-shirt');
$tshirt->set_color('cornflower blue');
$tshirt->set_size('XXL');

var_dump($tshirt->get_shirt());