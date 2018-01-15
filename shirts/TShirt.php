<?php
namespace Shirt\TShirt;

use Shirt\Shirt;

/**
 * Class TShirt
 * @package Shirt\TShirt
 */
class TShirt extends Shirt {

    /**
     * TShirt constructor.
     * @param string $style
     */
    public function __construct( string $style ) {
        $this->set_style( $style );
    }

    /**
     * Get our full shirt options
     * @return array
     */
    public function get_shirt() : array {
        return [
            $this->style,
            $this->size,
            $this->color,
        ];
    }

}