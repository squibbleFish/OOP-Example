<?php
namespace Shirt;

/**
 * Class Shirt
 * @package Shirt
 */
Class Shirt {

    /**
     * @var
     */
    protected $style;

    /**
     * @var
     */
    protected $size;

    /**
     * @var
     */
    protected $color;

    static protected $all_sizes = [
        'S',
        'M',
        'L',
        'XL',
        'XXL'
    ];

    static protected $all_colors = [
        'cornflower blue',
        'monolith black',
        'royal tenenbaums pink',
        'snowy hedge maze white',
    ];

    /**
     * Shirt constructor.
     * @todo This isnt really needed in this simple example, but could be used for future iterations
     */
    public function __construct() {}

    /**
     * Set the style of our shirt
     * @param string $style
     */
    public function set_style( string $style ) : void {
        $this->style = $style;
    }

    /**
     * Set the color
     * @param $color
     * @return mixed
     */
    public function set_color($color) {
        if ( !in_array( $color, self::$all_colors ) ) {
            throw new \Exception('color not available');
        }
        $this->color = $color;
    }

    /**
     * Set our size
     * @param $size
     * @return mixed
     */
    public function set_size($size) {
        if ( !in_array( $size, self::$all_sizes ) ) {
            throw new \Exception('bad size');
        }
        $this->size = $size;
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
