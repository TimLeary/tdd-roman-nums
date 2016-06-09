<?php 
    namespace Src;

    class RomanNum {
        protected $number;

        public function __construct($number)
        {
            $this->number = $number;
        }

        public function convert()
        {
            if($this->number == 5)
            {
                return 'V';
            }
            
            return str_repeat('I', $this->number);
        }
    }