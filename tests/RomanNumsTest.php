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
        
        /**
        * @test
        */
        public function eleven()
        {
            $romanNum = new RomanNum(11);
            $this->assertEquals('XI', $romanNum->convert());
        }
                
        /**
        * @test
        */
        public function twenty()
        {
            $romanNum = new RomanNum(20);
            $this->assertEquals('XX', $romanNum->convert());
        }
        
        /**
        * @test
        */
        public function fifty()
        {
            $romanNum = new RomanNum(50);
            $this->assertEquals('L', $romanNum->convert());
        }
        
        /**
        * @test
        */
        public function four()
        {
            $romanNum = new RomanNum(4);
            $this->assertEquals('IV', $romanNum->convert());
        }
        
        /**
        * @test
        */
        public function nine()
        {
            $romanNum = new RomanNum(9);
            $this->assertEquals('IX', $romanNum->convert());
        }
        
        /**
        * @test
        */
        public function hundred()
        {
            $romanNum = new RomanNum(100);
            $this->assertEquals('C', $romanNum->convert());
        }
        
        /**
        * @test
        */
        public function five_hundred()
        {
            $romanNum = new RomanNum(500);
            $this->assertEquals('D', $romanNum->convert());
        }
        
        /**
        * @test
        */
        public function thousand()
        {
            $romanNum = new RomanNum(1000);
            $this->assertEquals('M', $romanNum->convert());
        }
        
        /**
        * @test
        */
        public function thousand_nine_hundred_and_ninety_nine()
        {
            $romanNum = new RomanNum(1999);
            $this->assertEquals('MCMXCIX', $romanNum->convert());
        }
        
        /**
        * @test
        */
        public function four_hundred_and_fourty_four()
        {
            $romanNum = new RomanNum(1999);
            $this->assertEquals('MCMXCIX', $romanNum->convert());
        }
    }