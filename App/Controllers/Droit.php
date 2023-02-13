<?php

namespace Controllers;

class Droit extends Controller{
	protected $modelName= \Models\Droit::class;
    

public function droit(){
    \Renderer::renderone('user/droit');
}

    public function insert(){
        if(!isset($_SESSION['Profile'])){ 
            \Http::redirect('index.php?controller=droit&task=droit)');
        }

      if(isset($_POST['affecter'])){
         $user=$_POST['user'];
for($i=0;$i<count($_POST['droit']);$i++){
$droit=$_POST['droit'].$i;
echo $droit.'<br>';
$n =$this->model->verifierdroit($user,$droit);
    if($n==0){
    $this->model->insert($user,$droit);  
    }
}
      }  


        
}
} 


?>