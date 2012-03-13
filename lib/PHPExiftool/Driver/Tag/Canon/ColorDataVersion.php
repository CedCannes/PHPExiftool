<?php

namespace PHPExiftool\Driver\Tag\Canon;

class ColorDataVersion extends \PHPExiftool\Driver\Tag
{

    protected $Id = 0;

    protected $Name = 'ColorDataVersion';

    protected $FullName = 'mixed';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Color Data Version';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 1,
            'Label' => '1 (1DmkIIN/5D/30D/400D)',
        ),
        1 => array(
            'Id' => 2,
            'Label' => '2 (1DmkIII)',
        ),
        2 => array(
            'Id' => 3,
            'Label' => '3 (40D)',
        ),
        3 => array(
            'Id' => 4,
            'Label' => '4 (1DSmkIII)',
        ),
        4 => array(
            'Id' => 5,
            'Label' => '5 (450D/1000D)',
        ),
        5 => array(
            'Id' => 6,
            'Label' => '6 (50D/5DmkII)',
        ),
        6 => array(
            'Id' => 7,
            'Label' => '7 (500D/550D/7D/1DmkIV)',
        ),
        7 => array(
            'Id' => 9,
            'Label' => '9 (1100D)',
        ),
        8 => array(
            'Id' => 10,
            'Label' => '10 (600D)',
        ),
    );

}
