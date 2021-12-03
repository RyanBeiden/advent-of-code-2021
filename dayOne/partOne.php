<?php

{
    $measurements = file("input.txt");

    $measurementCount = 1;
    $counter = 1;

    while ($counter < count($measurements)) {
        if ($measurements[$counter] > $measurements[$counter - 1]) {
            $measurementCount += 1;
        }

        $counter++;
    }

    echo $measurementCount;
}
