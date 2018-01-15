<?php
namespace Shirt;

require_once 'shirts/Shirt.php';
require_once 'shirts/TShirt.php';

use Shirt\TShirt\TShirt;

/**
 * Create a t-shirt.
 *
 * @todo: This could also be an array of values passed into create the shirt attributes.
 * @todo: I am just using this as an example of what inheritance may look like for a simple use case.
 */
$tshirt = new TShirt('t-shirt');
$tshirt->set_color('cornflower blue');
$tshirt->set_size('XXL');

var_dump($tshirt->get_shirt());