<?php

namespace CodeChallenge\Year2019Day02;

use CodeChallenge\AbstractSolution;
use CodeChallenge\Reader;
use Exception;

class Solution extends AbstractSolution {
    public static function solvePartOne(Reader $reader): float {
        $instructions = $reader->getAsLines(',');

        $length = sizeof($instructions);
        for ($i = 0; $i < $length; $i += 4) {
            $opcode = intval($instructions[$i]);
            if ($opcode === 99) {
                return intval($instructions[0]);
            }

            $a = intval($instructions[$i + 1]);
            $b = intval($instructions[$i + 2]);
            $pos = intval($instructions[$i + 3]);

            if ($opcode === 1) {
                $instructions[$pos] = intval($instructions[$a]) + intval($instructions[$b]);
            } else if ($opcode === 2) {
                $instructions[$pos] = intval($instructions[$a]) * intval($instructions[$b]);
            } else {
                throw new Exception('unknown opcode: ' . $opcode);
            }
        }

        throw new Exception('program did not exist, ran out of instructions');
    }

    public static function solvePartTwo(Reader $reader): int {
        return 0;
    }
}
