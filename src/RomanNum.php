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
            if($this->number >= 5)
            {
                $this->romanNumber .= 'V';
                $this->number -= 5;
            }
            
            $this->romanNumber .= str_repeat('I', $this->number);
            
            return $this->romanNumber;
        }
    }