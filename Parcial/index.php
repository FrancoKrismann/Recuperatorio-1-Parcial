<?php

class Financiera {

}
//identificación, código del electrodoméstico, fecha otorgamiento, monto, cantidad_de_cuotas, taza de interés, la colección de cuotas y
//la referencia a la persona que solicito el préstamo. 
class Prestamo{
    private static $ultimoId = 0;
    private $id;
    public $codigo_electrodomestico;
    public $fecha_otorgamiento;
    public $monto;
    public $cantidad_de_cuotas;
    public $taza_de_interes;
    public $cuotas = [];
    public $persona;
    
    //monto, cantidad de cuotas, taza de interés y la referencia a la persona que solicito el préstamo. 
    public function __construct($monto, $cantidad_de_cuotas, $taza_de_interes, $persona){
            self::$ultimoId ++;
            $this -> id = self::$ultimoId;
            $this -> monto = $monto;
            $this -> cantidad_de_cuotas = $cantidad_de_cuotas;
            $this -> taza_de_interes = $taza_de_interes;
            $this -> persona = $persona;
    }

    private function calcularInteresPrestamo($numCuota) {
        
        if($numCuota < 1 || $numCuota > $this->cantidad_de_cuotas){
            return 0;
        }

        $valorCuota = $this->monto / $this->cantidad_de_cuotas;

        $saldoDeudor = $this->monto - ($valorCuota * ($numCuota - 1));
    
        $interes = $saldoDeudor * ($this->taza_de_interes / 100);
    
        return round($interes, 2); 
    }

    function otorgarPrestamo() {
        
    }

}
//número ,monto_cuota , monto_interes y cancelada (atributo que va a contener un valor true, si la cuota esta paga y false en caso contrario
class Cuota {
    public $numero;
    public $monto_cuota;
    public $monto_interes;
    public $cancelada;

    public function __construct($numero,$monto_cuota,$monto_interes,$cancelada = false){
        $this-> numero = $numero;
        $this-> monto_cuota = $monto_cuota;
        $this-> monto_interes = $monto_interes;
        $this-> cancelada = $cancelada;
    }

    function darMontoFinalCuota () {
        return $this-> monto_cuota + $this-> monto_interes;
    }
}

//nombre, apellido, dni, dirección, mail, teléfono y importe neto recibido en haberes
class Cliente {
    public $nombre;
    public $apellido;
    public $dni;
    public $direccion;
    public $mail;
    public $telefono;
    public $importeNetoRecibido;

    public function __construct($nombre,$apellido,$dni,$direccion,$mail,$telefono,$importeNetoRecibido){
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> dni = $dni;
        $this -> direccion = $direccion;
        $this -> mail = $mail;
        $this -> telefono = $telefono;
        $this -> importeNetoRecibido = $importeNetoRecibido;
    }

    //Metodos de Gets y Sets de cada atributo
    //Metodos de nombre
    function getNombre (){
        return $this -> nombre;
    }
    function setNombre($nombre){
        $this -> nombre = $nombre;
    }
    //Metodos de apellido
    function getApellido (){
        return $this -> apellido;
    }
    function setApellido($apellido){
        $this -> apellido = $apellido;
    }
    //Metodos de Dni
    function getDni (){
        return $this -> dni;
    }
    function setDni($dni){
        $this -> dni = $dni;
    }
    //metodos de Direccion
    function getDireccion (){
        return $this -> direccion;
    }
    function setDireccion($direccion){
        $this -> direccion = $direccion;
    }
    //Metodos de Mail
    function getMail (){
        return $this -> mail;
    }
    function setMail($mail){
        $this -> mail = $mail;
    }
    //Metodos de Telefono
    function getTelefono (){
        return $this -> telefono;
    }
    function setTelefono($telefono){
        $this -> telefono = $telefono;
    }
    //Metodos de importeNetoRecibido
    function getNeto (){
        return $this -> importeNetoRecibido;
    }
    function setNeto($netoRecibido){
        $this -> importeNetoRecibido = $netoRecibido;
    }

    

}
