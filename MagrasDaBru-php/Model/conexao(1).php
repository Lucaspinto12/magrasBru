<?php

    function conectar(){

    $conn = mysqli_connect('localhost', 'root', '', 'magrabru');
    
	if(!$conn){
            
		return "Conexão não abre !" ;
                
	}else{
            
		return $conn ;
    }
    

    


}
