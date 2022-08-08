<?php
session_start();
            
            $_SESSION['usuarioEmail'];
  
            $_SESSION['usuarioSenha'];
   

			if(!isset($_SESSION["usuarioEmail"]) ||!isset($_SESSION["usuarioSenha"]) ){
    
		header("Location: index.html");
                
		exit;
		}else{
		
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="ocultar.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<head>
<link rel="stylesheet" href="teste.css">
<body>
<form  class="form-horizontal" method="POST" action="Controller/controller_cadastrar_cliente.php">
<div  class="container rounded bg-white mt-5 mb-5">
    <div class="row">
       
        <div class="col-md-5">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Ficha de avaliação</h4>
                </div>
                <div class="row mt-3 ">
                    <div class="col-md-6"><label class="labels">Nome</label><input type="text" class="form-control" placeholder="Nome" value=""></div>
                    <div class="col-md-3"><label class="labels">idade</label><input type="text" class="form-control" placeholder="idade" value=""></div>
                    <div class="col-md-3"><label class="labels">Tipagem Sanguinea</label>  <select id="tipagem_sanguinea" name="tipagem_sanguinea" >
        <option value=""></option>
      <option value="A+">A+</option>
      <option value="A-">A-</option>
      <option value="B+">B+</option>
      <option value="B-">B-</option>
      <option value="B-">B-</option>
      <option value="AB+">AB+</option>
      <option value="AB-">AB-</option>
      <option value="0-">O-</option>
      <option value="O+">0+</option>
    </select></div>
    <div class="col-md-6"><label class="labels">Estado Civil</label>   <select required id="Estado Civil" name="Estado Cittvil" class="form-control">
        <option value=""></option>
      <option value="Solteiro(a)">Solteiro(a)</option>
      <option value="Casado(a)">Casado(a)</option>
      <option value="Divorciado(a)">Divorciado(a)</option>
      <option value="Viuvo(a)">Viuvo(a)</option>
    </select></div>
    <label class=" mt-2 labels" for="radios">Sexo <h11>*</h11></label><br>
 
    <label required="" class=" mt-4 radio-inline" for="radios-0" >
      <input name="sexo" id="sexo" value="feminino" type="radio" >
      Feminino
    </label> 
    <label class="mt-4 radio-inline" for="radios-1">
      <input name="sexo" id="sexo" value="masculino" type="radio" >
      Masculino
  
                      

                  </div>
                 
                <div class="row mt-3 ">
                <div class="col-md-12"><label class="labels">Email</label> <input id="prependedtext" name="email" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" ></div>
                <div class="col-md-12"><label class="labels">Telefone</label>  <input id="prependedtext" name="prependedtext" class="form-control" placeholder="XX XXXXX-XXXX" type="text" maxlength="13"  pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
      OnKeyPress="formatar('## #####-####', this)"></div>
                <div class="col-md-12"><label class="labels">Profissão</label><input id="profissao" name="profissao" type="text" placeholder="Profissão" class="form-control input-md" required=""></div>
                <div class="row-3 d-flex justify-content-between align-items-center mb-3">
                    <div class="col-md-6"><label class="labels">Endereço</label> <input id="rua" name="rua" class="form-control" placeholder="Endereço" required=""  type="text"></div>
                    <div class="col-md-5"><label class="labels">Cep</label><input type="text" class="form-control" placeholder="Cep" value=""></div>
                  </div>
                  <div class="row-3 d-flex justify-content-between align-items-center mb-3">
                    <div class="col-md-6"><label class="labels">bairro</label> <input id="rua" name="estado" class="form-control" placeholder="estado" required=""  type="text"></div>
                  <div class="col-md-5"><label class="labels">Estado</label><input type="text" class="form-control" placeholder="estado" value=""></div>
        </div>
                  <div class="row-3 d-flex justify-content-between align-items-center mb-3">
                    <div class="col-md-6"><label class="labels">Peso</label> <input type="number" class="form-control" placeholder="peso" value=""></div>
                    <div class="col-md-5"><label class="labels">Kg</label><input type="number" class="form-control" placeholder="kg" value=""></div>
                  </div>
                  
    
    <div class=" col-md-2"><label class="labels">Tratamento estético anterior?</label> </div>

  <div class="ml-4 d-flex justify-content-between align-items-center">
  

       
        <label class="my-3 radio-inline" for="radios-0">
      <input type="radio" name="tratamento_anterior" id="tratamento_anterior" value="nao"  >
      Não
    </label> 
    <label class="my-3 radio-inline" for="radios-1">
      <input type="radio" name="tratamento_anterior" id="tratamento_anterior" value="sim"  >
      Sim
    </label>
   
      
     <div id="" class="col-md-10 ml-10"> <input  type="text" class=" form-control" placeholder="qual?" value=""></div>
    
    </div>
    <div class="mt-2 col-md-2"><label class="labels">Uso de Medicamento?</label> </div>

<div class=" ml-4 d-flex justify-content-between align-items-center">


     
      <label class="my-3 radio-inline" for="radios-0">
    <input type="radio" name="uso_medicamento" id="uso_medicamento" value="nao"  >
    Não
  </label> 
  <label class="my-3 radio-inline" for="radios-1">
    <input type="radio" name="uso_medicamento" id="uso_medicamento" value="sim"  >
    Sim
  </label>
 
    
   <div id="" class="col-md-10 ml-10"> <input  type="text" class=" form-control" placeholder="qual?" value=""></div>
  
  </div>
  <div class="mt-2 col-md-2"><label class="labels"> Alergia a algum Medicamento?</label> </div>

<div class=" ml-4 d-flex justify-content-between align-items-center">


     
      <label class="my-3 radio-inline" for="radios-0">
    <input type="radio" name="uso_medicamento" id="uso_medicamento" value="nao"  >
    Não
  </label> 
  <label class="my-3 radio-inline" for="radios-1">
    <input type="radio" name="uso_medicamento" id="uso_medicamento" value="sim"  >
    Sim
  </label>
 
    
   <div id="" class="col-md-10 ml-10"> <input  type="text" class=" form-control" placeholder="qual?" value=""></div>
  
  </div>
                    <div class="mt-4 col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div>
          
            </div>
        </div>
        
        <div class="col-md-4 ">
            <div class="p-3 py-5 ">
           
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div>
        
    </div>
    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
    <br>
</div>

</div>
</div>
<div>
   
        </from>
        
    
</body>
</html>
<?php }?>
