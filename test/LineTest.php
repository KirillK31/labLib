<?php

use PHPUnit\Framework\TestCase;
use kormakov\Line;
use kormakov\KirillExeption;

class LineTest extends TestCase {
    public function testLine() {
        $result = new Line();

        //  6x+3=0
        $this->assertEquals(
            [-0.5],
            $result->line(6,3)
        );


        //3x-2=0
        $this->assertEquals(
            [0.66666666666667],
            $result->line(3,-2)
        );

        //a == 0
        $this->expectException(KirillExeption::class);
        $result->line(0,1);

    }
}