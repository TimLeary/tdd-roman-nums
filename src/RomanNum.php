<?php 
    namespace Src;

    class RomanNum {
        protected $number;
        protected $romanNumber;
        
        public static $formats = [
            1000    => 'M',
            900     => 'CM',
            500     => 'D',
            400     => 'CD',
            100     => 'C',
            90      => 'XC',
            50      => 'L',
            40      => 'XL',
            10      => 'X',
            9       => 'IX',
            5       => 'V',
            4       => 'IV',
            1       => 'I'
        ];

        public function __construct($number)
        {
            $this->number = $number;
        }

        public function convert()
        {
            foreach (static::$formats as $limit => $format) {
                while($this->number >= $limit) {
                    $this->romanNumber .= $format;
                    $this->number -= $limit;
                }
            }
                         
            return $this->romanNumber;
        }
    }