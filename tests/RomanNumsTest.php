<?php 
    namespace SrcTest;
    use Src\RomanNum;

    class RomanNumsTest extends \PHPUnit_Framework_TestCase
    {
        /**
        * @test
        */
        public function one()
        {
            $romanNum = new RomanNum(1);
            $this->assertEquals('I', $romanNum->convert());
        }
    }