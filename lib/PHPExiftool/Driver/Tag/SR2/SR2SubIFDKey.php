<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\SR2;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class SR2SubIFDKey extends AbstractTag
{

    protected $Id = 29217;

    protected $Name = 'SR2SubIFDKey';

    protected $FullName = 'Sony::SR2Private';

    protected $GroupName = 'SR2';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'SR2';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'SR2 Sub IFD Key';

    protected $flag_Permanent = true;
}
