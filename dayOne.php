<?php

namespace AdventOfCode2021;

class DayOne
{
    /**
     * The measurements array is the provided input:
     * https://adventofcode.com/2021/day/1/input
     *
     * @param array $measurements
     *
     * @return int
     */
    public function partOne(array $measurements) : int
    {
        $measurementCount = 0;

        for ($i = 1; $i < count($measurements); $i++) {
            $previousMeasurement = $i;
            if ($measurements[$i] > $measurements[$previousMeasurement - 1]) {
                $measurementCount += 1;
            }
        }

        return $measurementCount;
    }
}
