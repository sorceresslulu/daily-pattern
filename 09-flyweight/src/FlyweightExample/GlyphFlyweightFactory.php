<?php
namespace FlyweightExample;

class GlyphFlyweightFactory
{
    /**
     * @var Glyph[]
     */
    private $glyphPool = array();

    public function getGlyph($code) {
        if(!(array_key_exists($code, $this->glyphPool))) {
            $this->glyphPool[$code] = new Glyph($code);
        }

        return $this->glyphPool[$code];
    }

    public function report() {
        foreach($this->glyphPool as $glyph) {
            \Util::println($glyph->toString(), 1);
        }

        \Util::println('---');
    }
}