<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class Flash extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'Flash';

    protected $FullName = 'mixed';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Flash';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Did not fire',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Fired',
        ),
        2 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        3 => array(
            'Id' => 1,
            'Label' => 'On',
        ),
    );

}
