<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Real;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class Text extends AbstractTag
{

    protected $Id = 'txt';

    protected $Name = 'Text';

    protected $FullName = 'Real::Metafile';

    protected $GroupName = 'Real';

    protected $g0 = 'Real';

    protected $g1 = 'Real';

    protected $g2 = 'Video';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Text';
}
