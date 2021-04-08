<?php

namespace kormakov;

class Line
{
    protected $X1;

    public function line($a, $b)
    {
        if ($a == 0) {
            throw new KirillExeption('The equation does not have exist');
        }
        return $this->X1 = [($b * -1) / $a];
    }
}