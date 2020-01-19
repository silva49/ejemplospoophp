<?php 

class Secuencia {

 private $valorSecuencia;

    public function __construct() {
       $this->valorsecuencia =0;}

       public function getValorsecuencia()
       {
          return $this->valorsecuencia;
       
       }
         public function setValorsecuencia($valor){
             $this->valorsecuencia = $valor;
       } 
 
    
       public function ListarNumeros(){
          for($i=1;$i<=$this->getValorsecuencia() ; $i++){
             echo $i . " ";
          }
      }
      
       public function HacerSecuencia(){
        $suma=0;   
        for ($i=1; $i<=$this->getValorsecuencia(); $i++) {
            $suma = $suma + 1;
        }  
       return $suma;
       echo $suma;
    }
}
?>