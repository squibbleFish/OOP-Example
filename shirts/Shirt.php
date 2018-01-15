<?php
namespace Shirt;

/**
 * Class Shirt
 * @package Shirt
 */
Class Shirt {

    /**
     * @var string Style
     */
    protected $style;

    /**
     * @var string Size
     */
    protected $size;

    /**
     * @var string Color
     */
    protected $color;

    /**
     * @var array Available Sizes
     * @todo: This may normally be an object in a database
     */
    static protected $all_sizes = [
        'S',
        'M',
        'L',
        'XL',
        'XXL'
    ];

    /**
     * @var array Available Colors
     * @todo: This may normally be something found in our database
     */
    static protected $all_colors = [
        'cornflower blue',
        'monolith black',
        'royal tenenbaums pink',
        'snowy hedge maze white',
    ];

    /**
     * Shirt constructor.
     * @todo This isn't really needed in this simple example, but could be used for future iterations
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
}
