<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\RealPROP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class NumStreams extends AbstractTag
{

    protected $Id = 9;

    protected $Name = 'NumStreams';

    protected $FullName = 'Real::Properties';

    protected $GroupName = 'Real-PROP';

    protected $g0 = 'Real';

    protected $g1 = 'Real-PROP';

    protected $g2 = 'Video';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'Num Streams';
}
