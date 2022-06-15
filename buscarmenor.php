<?php

 public function darViajeMenorValor(){
     $empresas= $this->getColeccionEmpresas(); 
     $largoEmpresas= count($empresas);
    
     $esOBJViaje= null; 
     $arrayMenorCosto=[]; 
     for ( $i=0; $i<$largoEmpresas; $i++){
          $empresa= $empresas[$i]; 
          $losViajes=$empresa->getColeccionViajes(); 
          $cuantosViajes= count($losViajes); 
          echo $empresa; 
         
            for ( $i=0; $i<$cuantosViajes ;$i++){
            $esElViaje=$losViajes[$i]; 
            $valor= $esElViaje->calcularImporteViaje();
            $menorCosto=$losViajes[0];
            if ($valor<$menorCosto){
                $esOBJViaje= $esElViaje;
                $menorCosto= $valor;
            }
            
            }
           
            array_push($arrayMenorCosto,$esOBJViaje); //Algo esta mal, pushea sin $i++; 
         }
         
      return $arrayMenorCosto; 
     }