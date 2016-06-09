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

        /**
        * @test
        */
        public function two()
        {
            $romanNum = new RomanNum(2);
            $this->assertEquals('II', $romanNum->convert());
        }

        /**
        * @test
        */
        public function three()
        {
            $romanNum = new RomanNum(3);
            $this->assertEquals('III', $romanNum->convert());
        }

        /**
        * @test
        */
        public function five()
        {
            $romanNum = new RomanNum(5);
            $this->assertEquals('V', $romanNum->convert());
        }
        
        /**
        * @test
        */
        public function six()
        {
            $romanNum = new RomanNum(6);
            $this->assertEquals('VI', $romanNum->convert());
        }
        
        /**
        * @test
        */
        public function ten()
        {
            $romanNum = new RomanNum(10);
            $this->assertEquals('X', $romanNum->convert());
        }
    }