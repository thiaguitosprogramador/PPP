<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
  <link rel="stylesheet" href="../assets/css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  </head>

  <body>
    <header>
      <div class="container text-center" id="Nombreescuela">
        <div class="row align-items-start">
          <div class="col-sm-12">
           <img src="" alt="">
          </div>
          <div class="col-sm-12">
            <h1>Escuela educacion <br> profesional n61</h1>
          </div>
          <div class="col-sm-12">
            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, numquam nam nulla tempore quia aspernatur dolores aliquid placeat, blanditiis dolorum voluptatum id incidunt, modi in vitae atque! Similique, dolor dolorum.</h4>
          </div>
        </div>
      </div>
    </header>
    <main>
        <div style="color:aliceblue; text-align: center;">
        <div id="container">
         <form action="/index.php" method="post" id="hola">
    <label for="curso">Hola</label><br>
    <input type="text" name="curso" id="curso"><br>
<button type="submit">enviar</button>
   
         </form>
        
         
           
            <?php
  include '../BD/Conexion.php';
  include '../BD/ejercicio.php';

?>
        </div>

        
      </div>
     
    </main>
    <a href="./index.php"><button>wawa</button></a>
    <footer>
  
</div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>