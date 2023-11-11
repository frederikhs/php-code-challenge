<?php

use CodeChallenge\Reader;
use CodeChallenge\Tests\SolutionHelper;
use CodeChallenge\Year2019Day02\Solution;

final class Year2019Day02SolutionPartOneTest extends SolutionHelper {
    public function testPartOneExample(): void {
        $tests = [
            ['1,0,0,0,99', 2],
            ['2,3,0,3,99', 2],
            ['2,4,4,5,99,0', 2],
            ['1,1,1,4,99,5,6,0,99', 30],
        ];

        foreach ($tests as $test) {
            $reader = (new Reader())->readString($test[0]);
            $result = Solution::solvePartOne($reader);
            $this->assertEquals($test[1], $result);
        }
    }

    public function testPartOne(): void {
        $reader = $this->givenReaderForFile('Year2019Day02', self::INPUT_FILENAME);
        $s = $reader->getAsLines(',');
        $s[1] = '12';
        $s[2] = '2';
        $reader = (new Reader())->readString(implode(',', $s));

        $result = Solution::solvePartOne($reader);
        $this->assertEquals(4945026, $result);
    }
}
