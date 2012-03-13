<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class CommandDialsApertureSetting extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'CommandDialsApertureSetting';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Command Dials Aperture Setting';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Sub-command Dial',
        ),
        1 => array(
            'Id' => 32,
            'Label' => 'Aperture Ring',
        ),
        2 => array(
            'Id' => 0,
            'Label' => 'Sub-command Dial',
        ),
        3 => array(
            'Id' => 4,
            'Label' => 'Aperture Ring',
        ),
    );

}
