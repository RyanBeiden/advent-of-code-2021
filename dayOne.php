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
            $measurementIndex = $i;
            if ($measurements[$i] > $measurements[$measurementIndex - 1]) {
                $measurementCount += 1;
            }
        }

        return $measurementCount;
    }

    /**
     * The measurements array is the provided input:
     * https://adventofcode.com/2021/day/1/input
     *
     * @param array $measurements
     *
     * @return int
     */
    public function partTwo(array $measurements) : int
    {
        $measurementSumCount = 0;

        for ($i = 1; $i < count($measurements) - 2; $i++) {
            if (($measurements[$i] + $measurements[$i + 1] + $measurements[$i + 2])
                > ($measurements[$i] + $measurements[$i - 1] + $measurements[$i + 1])
            ) {
                $measurementSumCount += 1;
            }
        }

        return $measurementSumCount;
    }
}
