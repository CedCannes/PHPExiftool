<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPPrm;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class RecipeEndingPage extends AbstractTag
{

    protected $Id = 'recipeEndingPage';

    protected $Name = 'RecipeEndingPage';

    protected $FullName = 'XMP::prm';

    protected $GroupName = 'XMP-prm';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-prm';

    protected $g2 = 'Document';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Recipe Ending Page';

    protected $flag_Avoid = true;
}
