<?php   
class ViajeNacional extends Viaje {

    private $descuento;
   
    
public function __construct($Destino, $HoraPartida, $HoraLlegada, $Numero,$Importe, $Fecha, $cantAsientosTotales, $CantAsientosDisponibles,$EsResponsable, $esDescuento)
{
    parent:: __construct($Destino, $HoraPartida, $HoraLlegada, $Numero,$Importe, $Fecha, $cantAsientosTotales, $CantAsientosDisponibles,$EsResponsable );
    $this->descuento = $esDescuento;

}
public function getDescuento(){
    return $this->descuento;
}

public function setDescuento($nuevoDescuento){
    $this->descuento = $nuevoDescuento;
}

public function calcularImporteViaje(){
    
    $importeOriginal= parent:: calcularImporteViaje(); 
    $descuento= $this->getDescuento();
     $importeFinal= $importeOriginal - ($descuento/100); 
     return $importeFinal;
 }


public function __toString()
{
    $cadena= parent::__toString();
    $cadena.= " \n El descuento Aplicado es de".$this->getDescuento(); 
    return $cadena;
}
}