<?php {
public function __toString(){
    $arrayEmpresas= $this->getColeccionEmpresas(); 
    $datosEmpresas="";
    foreach($arrayEmpresas as $objEmpresa){
        $datosEmpresas= $datosEmpresas . "\n" . $objEmpresa;
    }
    $cadena= "Denominación terminal: " . $this->getDenominacion(). " ubicada en " . $this->getDireccion() . "\n" .
    "****************************************** \n" .
    "Datos de las empresas \n" . $datosEmpresas . "\n" .
    "****************************************** \n";
    return $cadena;
}
}