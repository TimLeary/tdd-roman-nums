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
            return str_repeat('I', $this->number);
        }
    }