<?php 

$pruebas= new DateTime('01-06-2022');
$pruebas2= new DateTime('12-06-2022');

function diasContratoVencido($fechaActual, $fechaVencida){
    //$fecha1= new DateTime($fechaActual);
    //$fecha2= new DateTime($fechaVencida);
    $resultado = $fechaActual->diff($fechaVencida);
    return $resultado;
   }

   public function actualizarEstadoContrato(){
    $vence= $this->getFechaVence();
    //var_dump($vence);
    //$a= new DateTime($vence);
    $hoy= new DateTime('now');
    $diasVencido= $this->diasContratoVencido($hoy, $vence);
    $diasVencido= $diasVencido->format('%a');
    if($diasVencido > 0 && $diasVencido < 10){
        $estado= "MOROSO";
        $this->setEstado($estado);
    }
    elseif($vence>= 10){
        $estado= "SUSPENDIDO";
        $this->setEstado($estado);
    }
    else{
        $estado= "AL DIA";
        $this->setEstado($estado);
    }
}
}