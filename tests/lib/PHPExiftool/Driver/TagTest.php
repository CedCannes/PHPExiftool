<?php

namespace PHPExiftool\Driver;

class TagTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Tag
     */
    protected $object;

    public function testConsistency()
    {
        $finder = new \Symfony\Component\Finder\Finder();
        $finder->files()->in(array(__DIR__ . '/../../../../lib/PHPExiftool/Driver/Tag/'));

        $n = 0;
        foreach ($finder as $file)
        {
            $classname = substr(
              str_replace(
                array(realpath(__DIR__ . '/../../../../lib'), '/')
                , array('', '\\')
                , $file->getRealPath()
              ), 0, -4);


            $tag = new $classname;

            /* @var $tag \PHPExiftool\Driver\Tag */

            $this->assertTrue(is_scalar($tag->getDescription()));
            $this->assertTrue(is_scalar($tag->getGroupName()));
            $this->assertTrue(is_scalar($tag->getName()));
            $this->assertTrue(is_scalar($tag->getTagname()));
            $this->assertTrue(is_scalar($tag->getId()));

            if ($tag->getValues() !== null)
                $this->assertTrue(is_array($tag->getValues()));


            if ($tag->isMulti())
                $this->assertTrue($tag->isMulti());
            else
                $this->assertFalse($tag->isMulti());

            if ($tag->isWritable())
                $this->assertTrue($tag->isWritable());
            else
                $this->assertFalse($tag->isWritable(), $tag->getTagname() . " is writable");

            if ($tag->isBinary())
                $this->assertTrue($tag->isBinary());
            else
                $this->assertFalse($tag->isBinary());

            unset($tag);
        }
    }

}
