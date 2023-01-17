<?php

class ForEac
{
    public function forEach(): void
    {
        $array = [];
        for ($i=0; $i <= 100000; $i++) {
            $array[$i] = $i;
        };
        echo "$array[0]";
    }
}