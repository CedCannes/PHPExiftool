<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class AFStatus15C2 extends AbstractTag
{

    protected $Id = 30;

    protected $Name = 'AFStatus_15_C2';

    protected $FullName = 'Sony::AFStatus79';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'AF Status 15 C2';

    protected $flag_Permanent = true;

    protected $Values = array(
        '-32768' => array(
            'Id' => '-32768',
            'Label' => 'Out of Focus',
        ),
        0 => array(
            'Id' => 0,
            'Label' => 'In Focus',
        ),
    );
}
