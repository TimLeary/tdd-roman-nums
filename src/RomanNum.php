<?php 
    namespace Src;

    class RomanNum {
        protected $number;
        protected $romanNumber;

        public function __construct($number)
        {
            $this->number = $number;
        }

        public function convert()
        {
            while ($this->number >= 10)
            {
                $this->romanNumber .= 'X';
                $this->number -= 10;
            }
            
            if($this->number >= 5)
            {
                $this->romanNumber .= 'V';
                $this->number -= 5;
            }
            
            $this->romanNumber .= str_repeat('I', $this->number);
            
            return $this->romanNumber;
        }
    }