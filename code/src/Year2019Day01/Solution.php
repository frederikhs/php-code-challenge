<?php

namespace CodeChallenge\Year2019Day01;

use CodeChallenge\AbstractSolution;
use CodeChallenge\Reader;

class Solution extends AbstractSolution {
    public static function solvePartOne(Reader $reader): float {
        $sum = 0;

        foreach ($reader->getAsLines() as $line) {
            $sum += (floor(intval($line) / 3) - 2);
        }

        return $sum;
    }

    public static function calculateFuel(float $sum, float $fuel): float {
        $next_mass = (floor($fuel / 3) - 2);
        if ($next_mass < 0) {
            return $sum;
        }

        $sum += $next_mass;

        return self::calculateFuel($sum, $next_mass);
    }

    public static function solvePartTwo(Reader $reader): float {
        $sum = 0;

        foreach ($reader->getAsLines() as $line) {
            $val = intval($line);
            $sum += self::calculateFuel(0, $val);
        }

        return $sum;
    }
}
