
<?php


require_once '../controller/controllerCalculadora.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Calcuadora</title>
</head>
<body>
    



<form action="../controller/controllerCalculadora.php" method="POST">

<h1>Calculadora </h1>

<p>La simpleza y maravilla de las operacion Básicas</p>


<div class="inputs-calc">
<div class="input-group">
  <input type="text" id="num1" name="num1"  class="input" required="" autocomplete="off">
  <label class="user-label">Valor 1</label>
  </div>

   <div class="input-group">
  <input type="text" id="num2" name="num2" class="input" required="" autocomplete="off">
  <label class="user-label">Valor 2</label>

  </div>
  </div>

  <div class="buttons-calc">
  <button type="submit" name="operacion" value="suma" class="buton boton-elegante">+</button>
  <button type="submit" name="operacion" value="resta" class="buton boton-elegante">-</button>
  <button type="submit" name="operacion" value="multiplicar" class="buton boton-elegante">*</button>
  <button type="submit" name="operacion" value="dividir" class="buton boton-elegante">/</button>

  </div>

  <div id="toggleButton" class="button">⬇</div>
    <div id="toggleDiv" class="hidden">
    <div class="buttons-calc">
<!-- 
    <div class="tooltip-container">
  <button type="submit" name="operacion" value="exponenciacion" class="buton sum" >a²</button>
   <div class="tooltip-text">Exponenciación <br> 1) Base <br>2) Exponente</div>
    </div>
  <button type="submit" name="operacion" value="porcentaje" class="buton rest">%</button>
  <button type="submit" name="operacion" value="raiz" class="buton mul">√a</button>
  <button type="submit" name="operacion" value="logaritmacion" class="buton div">log</button> -->

  <p>Proximamente ...</p>

  </div>
    </div>

    
  <!-- <div class="resultado">

<div class="resultado-suma">

  </div> -->

</div>

<div class="card">
<p class="time-text"><span><?php 

if(!isset($resultado)){
        $resultado = 0;
      } 
      else{
        
         echo  htmlspecialchars($resultado['separadorNumero']). "<br>"; 
        //  echo $conversion;
      
      }?></span><span class="time-sub-text"></span></p>
<p class="day-text"><?php if(!isset($conversion)){
        $conversion = 0;
      } 
      else{
        
     
         echo $conversion;
      
      } ?> </p>
<!-- <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" stroke-width="0" fill="currentColor" stroke="currentColor" class="moon"><path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"></path><path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"></path></svg> -->
</div>
    </form>



<script src="../assets/app.js"></script>
</body>
</html>