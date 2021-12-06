<?php

{
    $positions = file('input.txt');
    $horizontal = 0;
    $aim = 0;
    $depth = 0;

    foreach ($positions as $position) {
        $trimmedPosition = explode(' ', trim($position));

        switch ($trimmedPosition[0]) {
            case 'forward':
                $horizontal += (int)$trimmedPosition[1];
                $depth += (int)$trimmedPosition[1] * $aim;
                break;
            case 'down':
                $aim += (int)$trimmedPosition[1];
                break;
            case 'up':
                $aim -= (int)$trimmedPosition[1];
                break;
        }
    };

    echo $horizontal * $depth;
}