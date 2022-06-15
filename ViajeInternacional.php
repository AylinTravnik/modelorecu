<?php   
class ViajeInternacional extends Viaje {

    private $docAdicional;
    private $impuesto;
   
    
public function __construct($Destino, $HoraPartida, $HoraLlegada, $Numero,$Importe, $Fecha, $cantAsientosTotales, $CantAsientosDisponibles,$EsResponsable, $esAdicional, $esImpuesto)
{
    parent:: __construct($Destino, $HoraPartida, $HoraLlegada, $Numero,$Importe, $Fecha, $cantAsientosTotales, $CantAsientosDisponibles,$EsResponsable );
    $this->docAdicional = $esAdicional;
    $this->impuesto = $esImpuesto;
       
}
public function getImpuesto(){
    return $this->impuesto;
}
public function getDocAdicional(){
    return $this->docAdicional;
}

public function setImpuesto($nuevoImpuesto){
    $this->impuesto = $nuevoImpuesto;
}
public function setDocAdicional($nuevaDocAdicional){
    $this->docAdicional = $nuevaDocAdicional;
}

public function calcularImporteViaje(){
   $importeOriginal= parent:: calcularImporteViaje(); 
   $impuesto= $this->getImpuesto();
   echo $importeOriginal; 
    $importeFinal= $importeOriginal + ($importeOriginal *($impuesto/100));
    return $importeFinal;
}
     






public function __toString()
{
    $cadena= parent::__toString();
    $cadena.= " \n El impuesto Aplicado es de".$this->getImpuesto(). " \n Es necesaria Documentacion Adicional?  ".$this->getDocAdicional(); 
    return $cadena;
}
}