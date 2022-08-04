<?php
session_start();
            
            $_SESSION['usuarioEmail'];
  
            $_SESSION['usuarioSenha'];
   

			if(!isset($_SESSION["usuarioEmail"]) ||!isset($_SESSION["usuarioSenha"]) ){
    
		header("Location: login.html");
                
		exit;
		}else{
		
?>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Home</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <style>
      body{
    background: url(img/fundo3.jpg);
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

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
                  <a class="nav-link" href="cadastro.php">Cadastro</a>
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
                    <li><a class="dropdown-item" href="agenda_bruna.html">Bruna</a></li>
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
  


<main>
  <div class="container marketing">





    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img src="img/nutri.jpg"svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></svg>

        <h2>Bruna</h2>
        <p>Biomedica</p>
        <p><a class="btn btn-secondary" href="agenda_bruna.html">Ver Agenda</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="img/vitin.jpg"svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></svg>
       
        <h2>Vitin</h2>
        <p>Massagista</p>
        <p><a class="btn btn-secondary" href="agenda_bruna.html">Ver Agenda</a></p>
        
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="img/eliomar.jpg"svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></svg>

        <h2>Marcos</h2>
        <p>Atendente</p>
        <p><a class="btn btn-secondary" href="agenda_bruna.html">Ver Agenda</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
   


    <!-- START THE FEATURETTES -->

 


  
</main>


    <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
<?php }?>