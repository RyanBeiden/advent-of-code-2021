<?php

namespace AdventOfCode2021;

class dayTwo
{
    /**
     * The positions are the provided input:
     * https://adventofcode.com/2021/day/2/input
     *
     * @param array $positions
     *
     * @return int
     */
    public function partOne(array $positions) : int
    {
        $horizontal = 0;
        $depth = 0;

        foreach ($positions as $position) {
            if (str_split($position)[0] == 'f') {
                $horizontal += (int)substr($position, -1);
            } elseif (str_split($position)[0] == 'd') {
                $depth += (int)substr($position, -1);
            } elseif (str_split($position)[0] == 'u') {
                $depth -= (int)substr($position, -1);
            }
        };

        return $horizontal * $depth;
    }
}