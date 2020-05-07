<?php
    class vehiculo{
        public  $marca;
        public $color;
        public $placa;
        private $chasis;
        private $motor;
        private $propietario;

        public function __construct($mr, $cl, $cha, $mtr){
            $this->marca = $mr;
            $this->color= $cl;
            $this->chasis= $cha;
            $this->motor= $mtr;
        }

        public function valorVenta($costo, $porcentaje){
            $ganancia = $costo * $porcentaje/100;
            $vta = $costo + $ganancia;
            return $vta;
        }

        public function getMotor(){
            return $this->motor;
        }

        public function getPropietario(){
            return $this->propietario;
        }

        public function setMotor($mtr){
            $this->motor=$mtr;;
        }

        public function setPropietario($pr){
            $this->propietario=$pr;
        }


    }
?>