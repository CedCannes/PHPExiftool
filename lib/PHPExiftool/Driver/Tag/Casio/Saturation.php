<?php

namespace PHPExiftool\Driver\Tag\Casio;

class Saturation extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'Saturation';

    protected $FullName = 'mixed';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'Saturation';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Normal',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Low',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'High',
        ),
        3 => array(
            'Id' => 16,
            'Label' => 'Normal',
        ),
        4 => array(
            'Id' => 17,
            'Label' => '+1',
        ),
        5 => array(
            'Id' => 18,
            'Label' => '-1',
        ),
        6 => array(
            'Id' => 0,
            'Label' => 'Low',
        ),
        7 => array(
            'Id' => 1,
            'Label' => 'Normal',
        ),
        8 => array(
            'Id' => 2,
            'Label' => 'High',
        ),
    );

}
