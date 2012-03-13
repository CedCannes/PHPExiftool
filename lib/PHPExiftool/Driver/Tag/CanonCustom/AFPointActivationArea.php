<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class AFPointActivationArea extends \PHPExiftool\Driver\Tag
{

    protected $Id = 17;

    protected $Name = 'AFPointActivationArea';

    protected $FullName = 'mixed';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'AF Point Activation Area';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Single AF point',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Expanded (TTL. of 7 AF points)',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Automatic expanded (max. 13)',
        ),
        3 => array(
            'Id' => 0,
            'Label' => 'Standard',
        ),
        4 => array(
            'Id' => 1,
            'Label' => 'Expanded',
        ),
    );

}
