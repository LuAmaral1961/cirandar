<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cirandar</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
	  <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Urbanist:wght@300&display=swap');
    </style>

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
    <header>
        <div class="container">
            <a href="?pagina=home"><img src="img/logoCirandar.png" title="logo" alt="logo"></a>
            <div id="menu" style="font-family: Urbanist; font-size: 18px">
                <a href="?pagina=voluntarios">Quero ser voluntário</a>
                <a href="?pagina=entidades">Entidades</a>
                <a href="?pagina=ciranda">Ciranda</a>
                <a href="?pagina=entrar">Entrar</a>
                <?php if(isset($_SESSION['login'])){ ?>
					          <a href="logout.php">
						            <?php echo $_SESSION['usuario']; ?> 
						            (sair)		
					          </a>
				        <?php } ?>
            </div>
        </div>
        
        
    </header>

    <div id="conteudo" class="container" style="font-family: Urbanist;">

    




