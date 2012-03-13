<?php

namespace PHPExiftool\Driver\Tag\Olympus;

class NoiseReduction extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'NoiseReduction';

    protected $FullName = 'mixed';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Noise Reduction';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 1,
            'Label' => 'Noise Reduction',
        ),
        1 => array(
            'Id' => 2,
            'Label' => 'Noise Filter',
        ),
        2 => array(
            'Id' => 4,
            'Label' => 'Noise Filter (ISO Boost)',
        ),
        3 => array(
            'Id' => 8,
            'Label' => 'Auto',
        ),
        4 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        5 => array(
            'Id' => 1,
            'Label' => 'On',
        ),
    );

}
