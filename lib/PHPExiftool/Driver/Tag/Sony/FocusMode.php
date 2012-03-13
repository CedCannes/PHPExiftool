<?php

namespace PHPExiftool\Driver\Tag\Sony;

class FocusMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'FocusMode';

    protected $FullName = 'mixed';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'Focus Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Manual',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'AF-S',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'AF-C',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'AF-A',
        ),
        4 => array(
            'Id' => 1,
            'Label' => 'AF-S',
        ),
        5 => array(
            'Id' => 2,
            'Label' => 'AF-C',
        ),
        6 => array(
            'Id' => 4,
            'Label' => 'Permanent-AF',
        ),
        7 => array(
            'Id' => 65535,
            'Label' => 'n/a',
        ),
    );

}
