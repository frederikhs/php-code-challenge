<?php

use CodeChallenge\Reader;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Reader::class)]
final class ReaderStringTest extends TestCase {
    public function testReadString(): void {
        $input = "this,is,a,test";
        $output = (new Reader())->readString($input)->getAsString();

        $this->assertIsString($output);
        $this->assertEquals($input, $output);
    }
}
