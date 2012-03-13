<?php

namespace PHPExiftool\Driver\Tag\Casio;

class ISO extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'ISO';

    protected $FullName = 'mixed';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'ISO';

    protected $flag_Permanent = true;

    protected $Values = array(
        3 => array(
            'Id' => 3,
            'Label' => 50,
        ),
        4 => array(
            'Id' => 4,
            'Label' => 64,
        ),
        6 => array(
            'Id' => 6,
            'Label' => 100,
        ),
        9 => array(
            'Id' => 9,
            'Label' => 200,
        ),
    );

}
