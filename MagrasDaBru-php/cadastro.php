<?php
session_start();
            
            $_SESSION['usuarioEmail'];
  
            $_SESSION['usuarioSenha'];
   

			if(!isset($_SESSION["usuarioEmail"]) ||!isset($_SESSION["usuarioSenha"]) ){
    
		header("Location: index.html");
                
		exit;
		}else{
		
?>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cadastro</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-light fixed-top" style="background-color: #BA55D3;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Magras da Bru</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" style="background-color: white;" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Magras da Bru</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <hr>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="cadastro.html">Cadastro</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Agenda
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                    <li><a class="dropdown-item" href="#">Solange</a></li>
            
                    <li><a class="dropdown-item" href="#">Mari</a></li>
                    <li>
                
                    </li>
                    <li><a class="dropdown-item" href="#">Bruna</a></li>
                  </ul>
                </li>
                
        <form action="login.html">
<input type="submit" value="Voltar"><br>
</form>
              
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <br> <br> <br>
      <form class="row g-3">
        <div class="col-md-4">
          <label for="inputEmail4" class="form-label">Nome</label>
          <input type="text" class="form-control" id="inputNome" name="name" placeholder="Maria Eduarda ">
        </div>
        <div class="col-md-4">
            <label for="inputEmail4" class="form-label">Idade</label>
            <input type="number" class="form-control" id="inputIdade" name="idade" placeholder="30">
          </div>
        <div class="col-4">
          <label for="inputAddress" class="form-label">Tipagem Sanguínea</label>
          <input type="text" class="form-control" id="inputTipagem" name="tipagem" placeholder="A">
        </div>
        <div class="col-4">
            <label for="inputAddress" class="form-label">Profissão</label>
            <input type="text" class="form-control" id="inputProfissao" name="profissao" placeholder="Arquiteto">
          </div>
        <div class="col-4">
          <label for="inputAddress2" class="form-label">Endereço</label>
          <input type="text" class="form-control" id="inputEndereco" name="endereco" placeholder="Rua da Amizade">
        </div>   
		<div class="col-4">
          <label for="inputAddress2" class="form-label">CPF</label>
          <input type="text" class="form-control" id="inputCpf" name="cpf" placeholder="47447005860">
        </div>	
		<div class="col-4">
          <label for="inputAddress2" class="form-label">Bairro</label>
          <input type="text" class="form-control" id="inputBairro" name="bairro" placeholder="Terra-Nova">
        </div>
        <div class="col-md-4">
          <label for="inputCity" class="form-label">Cidade</label>
          <input type="text" class="form-control" id="inputCidade" name="cidade" placeholder="Nova Odessa">
        </div>
		  <div class="col-md-4">
          <label for="inputCity" class="form-label">Estado</label>
          <input type="text" class="form-control" id="inputEstado" name="estado" placeholder="Sp">
        </div>	  
		<div class="col-md-4">
          <label for="inputCity" class="form-label">Telefone</label>
          <input type="text" class="form-control" id="inputTel" name="telefone" placeholder="19-98760-3023">
        </div>
		<div class="col-md-4">
          <label for="inputCity" class="form-label">Celular</label>
          <input type="text" class="form-control" id="inputCel" name="celular" placeholder="(19)99129111">
        </div>

        <div class="col-md-4">
          <label for="inputCity" class="form-label">Data de Nasc</label>
          <input type="text" class="form-control" id="inputDate" name="dataNasc" placeholder="DD/MM/AAAA">
        </div>

        
       <div class="col-md-4">
          <label for="inputState" class="form-label">Estado Civil</label>
          <select id="inputEstadoCivil" class="form-select">
          <option selected name="">...</option>
            <option  name="solteiro">Solteiro(a)</option>
            <option name="casado">Casado(a)</option>
            <option name="viuvo">Viuvo(a)</option>
          </select>
        </div>

        <div class="col-md-4">
          <label for="inputState" class="form-label">Sexo</label>
          <select id="inputSexo" class="form-select">
          <option selected name="">...</option>
            <option  name="masculino">Masculino</option>
            <option name="feminino">Feminino</option>
          </select>
        </div>

        <div class="col-md-4">
          <label for="inputCity" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmail" name="email" placeholder="nome@gmail.com">
        </div>

        <div class="col-md-4">
          <label for="inputCity" class="form-label">Emergência</label>
          <input type="text" class="form-control" id="inputEmergencia" name="emergencia" placeholder="(19)99129111">
        </div>

        <div class="col-md-4">
          <label for="inputCity" class="form-label">Queixa</label>
          <input type="text" class="form-control" id="inputQueixa" name="queixa" placeholder="dor">
        </div>

        <div class="col-md-4">
          <label for="inputCity" class="form-label">Duração</label>
          <input type="text" class="form-control" id="inputDuracao" name="duracao" placeholder="2 semanas">
        </div>

        <div class="col-md-4">
          <label for="inputCity" class="form-label">Peso</label>
          <input type="text" class="form-control" id="inputPeso" name="peso" placeholder="75KG">
        </div>

        <div class="col-md-4">
          <label for="inputCity" class="form-label">Altura</label>
          <input type="text" class="form-control" id="inputAltura" name="altura" placeholder="1,80m">
        </div>
        <div class="col-md-4">

        
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
        
      </form>

</body>

</html>
<?php }?>