<?php

namespace CodeChallenge\Year2020Day01;

use CodeChallenge\AbstractSolution;
use CodeChallenge\Reader;
use Exception;

class Solution extends AbstractSolution {
    public static function solvePartOne(Reader $reader): int {
        foreach ($reader->getAsLines() as $line_i) {
            foreach ($reader->getAsLines() as $line_j) {
                if (intval($line_i) + intval($line_j) === 2020) {
                    return intval($line_i) * intval($line_j);
                }
            }
        }

        throw new Exception('somethings wrong');
    }

    public static function solvePartTwo(Reader $reader): int {
        foreach ($reader->getAsLines() as $line_i) {
            foreach ($reader->getAsLines() as $line_j) {
                foreach ($reader->getAsLines() as $line_k) {
                    if (intval($line_i) + intval($line_j) + intval($line_k) === 2020) {
                        return intval($line_i) * intval($line_j) * intval($line_k);
                    }
                }
            }
        }

        throw new Exception('somethings wrong');
    }
}
