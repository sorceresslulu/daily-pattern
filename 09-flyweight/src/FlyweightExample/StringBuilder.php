<?php
namespace FlyweightExample;

class StringBuilder
{
    /**
     * @var GlyphFlyweightFactory
     */
    private $glyphFlyweightFactory;

    public function __construct(GlyphFlyweightFactory $glyphFlyweightFactory) {
        $this->glyphFlyweightFactory = $glyphFlyweightFactory;
    }

    public function buildString($string) {
        $result = [];

        for($i = 0; $i < strlen($string); $i++) {
            $result[] = $this->glyphFlyweightFactory->getGlyph($string[$i]);
        }

        return $result;
    }
}