<?php

    class SortEngine {
        const PARAMETER_NAME = 'array';
        const DELIMITER = ',';
        private array $arr = [];
    
        public function __construct(string $array_string) {
            $tok = strtok($array_string, self::DELIMITER);
            while ($tok !== false) {
                $this->arr[] = $tok;
                $tok = strtok(self::DELIMITER);
            }
    
            $this->arr = $this->shellSort($this->arr);
    
            foreach ($this->arr as &$value) {
                echo $value, ', ';
            }
    
            unset($value);
        }

        function shellSort($list) {
            $length = count($list);
            $d = (int) ($length / 2);
            while ($d > 0) {
                for ($i = 0; $i < $length - $d; $i++) {
                    $j = $i;
                    while (($j >= 0) && ($list[$j] > $list[$j + $d])) {
                        $t = $list[$j];
                        $list[$j] = $list[$j + $d];
                        $list[$j + $d] = $t;
                        $j -= $d;
                    }
                }
                $d = (int) ($d / 2);
            }
            return $list;
        }


    }
?>