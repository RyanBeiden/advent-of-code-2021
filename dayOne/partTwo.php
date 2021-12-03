<?php

{
    $measurements = file("input.txt");

    $measurementSumCount = 0;

    for ($i = 1; $i < count($measurements) - 2; $i++) {
        if (((int) $measurements[$i] + (int) $measurements[$i + 1] + (int) $measurements[$i + 2])
            > ((int) $measurements[$i] + (int) $measurements[$i - 1] + (int) $measurements[$i + 1])
        ) {
            $measurementSumCount += 1;
        }
    }

    echo $measurementSumCount;
}