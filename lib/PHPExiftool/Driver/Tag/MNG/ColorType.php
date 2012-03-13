<?php

namespace PHPExiftool\Driver\Tag\MNG;

class ColorType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'ColorType';

    protected $FullName = 'mixed';

    protected $GroupName = 'MNG';

    protected $g0 = 'MNG';

    protected $g1 = 'MNG';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Color Type';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Grayscale',
        ),
        1 => array(
            'Id' => 2,
            'Label' => 'RGB',
        ),
        2 => array(
            'Id' => 3,
            'Label' => 'Palette',
        ),
        3 => array(
            'Id' => 4,
            'Label' => 'Grayscale with Alpha',
        ),
        4 => array(
            'Id' => 6,
            'Label' => 'RGB with Alpha',
        ),
        5 => array(
            'Id' => 8,
            'Label' => 'Gray',
        ),
        6 => array(
            'Id' => 10,
            'Label' => 'Color',
        ),
        7 => array(
            'Id' => 12,
            'Label' => 'Gray Alpha',
        ),
        8 => array(
            'Id' => 14,
            'Label' => 'Color Alpha',
        ),
    );

}
