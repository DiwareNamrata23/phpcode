<?php

use PHPUnit\Framework\TestCase;

class SongTest extends TestCase
{
    public function testSetTempo()
    {
        $song = new Song();
        $song->setTempo(60);
        $this->assertEquals(60, $song->getTempo());
    }

    public function testSetTempoAcceptsIntegerString()
    {
        $song = new Song();
        $song->setTempo("60");
        $this->assertEquals(60, $song->getTempo());
    }

    public function testSetTempoRejectsAlphabetString()
    {
        $this->expectException(InvalidArgumentException::class);
        
        $song = new Song();
        $song->setTempo("60 BPM");
    }

    public function testSetTempoRejectsFloat()
    {
        $this->expectException(InvalidArgumentException::class);

        $song = new Song();
        $song->setTempo(60.5);
    }
}

class Song
{
    private $tempo;

    public function setTempo($tempo)
    {
        if (!is_int($tempo) && (!is_string($tempo) || !ctype_digit($tempo))) {
            throw new InvalidArgumentException("Tempo must be an integer or an integer string");
        }
        $this->tempo = (int)$tempo;
    }

    public function getTempo()
    {
        return $this->tempo;
    }
}
