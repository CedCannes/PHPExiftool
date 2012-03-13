<?php

namespace PHPExiftool\Driver\Tag\JVC;

class Quality extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'Quality';

    protected $FullName = 'mixed';

    protected $GroupName = 'JVC';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'JVC';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Quality';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Low',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Normal',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Fine',
        ),
        'FINE' => array(
            'Id' => 'FINE',
            'Label' => 'Fine',
        ),
        'STD' => array(
            'Id' => 'STD',
            'Label' => 'Normal',
        ),
        'STND' => array(
            'Id' => 'STND',
            'Label' => 'Normal',
        ),
    );

}
