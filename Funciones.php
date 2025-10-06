<?php
    class Funciones {

        public float $number1;
        public float $number2;

        public function sumar(): float{
            return $this->number1+$this->number2;
        }

        public function restar(): float{
            $this->mayor();
            return $this->number1-$this->number2;
        }

        public function multiplicar(): float{
            return $this->number1*$this->number2;
        }

        public function dividir(): float{
            $this->mayor();
            return $this->number1/$this->number2;
        }
        private function mayor(){
            if($this->number2>$this->number1){
                $aux=$this->number1;
                $this->number1=$this->number2;
                $this->number2=$aux;
            }
        }
    }
?>