<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa</title>

    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/css/cstyle.css">
</head>
<body>
<div class="container">
<div class=" p-3 row-6">

  <form method = "POST" id="enviar" >
  
  <div class="form-group row row mt-3">
    
    <label for="pesquisa" class="col col-sm-8" >
    
  <input type="text" name = "pesquisa" placeholder="Nome do produto ou código" class="form-control form-control-sm bg-form pesquisa" id="pesquisa"> 
    </label>
  <label for="pesquisar" class=" col col-sm-2" >
  <button id="pesquisar" class = "form-control form-control-sm bg-form pesquisar btn btn-outline-light p-0" value="Pesquisar" name="pesquisar " >Pesquisar</button>
  </label>
  </form>

</div>
 
 
  
  <div class = "row row card  row-md-6 add-produto" id="add-produto">
  <ul class = "list-group list-group-flush"> 
  <li class=" list-group-item align-items-center  list-group-flush col col-md-12 linha"><pre > <strong>Código</strong><strong>nome</strong><strong>valor</strong><strong>Quantidade</strong><strong>Em estoque</strong><strong>Adcionar</strong></pre></li>
  </ul>
<ul class = "list-group list-group-flush lista"> 

</ul>
  </div>



 

  <div class="carrinho row row card  row-md-6 mt-3">

  <ul id="pcarrinho" class ="list-group list-group-flush pcarrinho">
  <li class=" list-group-item align-items-center  list-group-flush col col-md-12 prod-descri"><pre > <strong>Código</strong><strong>nome</strong><strong>valor</strong><strong>Quantidade</strong></pre></li>

  </ul>


  </div>
  <div class=" row row w-30  totalproduto mt-3"><br>
  <b class = "col col ttotal">TOTAL:</b>                   <span class = "col col float-right total"></span>
  </div >

<div class="row row  row-md-6 dbtn">
  <button class="btn btn-outline-primary   mt-2 finalizar" id ="finalizar">Finalizar</button>
  </div>
  <div class="row row row-md-6 mt-2 ddinheiro">
    <form method = "POST">
    <input type="text" name = "dinheiro" id="dinheiro" class="dinheiro"><br>
    <button id= "receber" class="btn btn-outline-primary mt-2 receber">Receber</button>
   
    </form>
  </div>
    <div class=" card mt-2  ctroco">
     <span class = "col col ttroco"> TROCO: </span>    <span class = "troco"> </span> 
    </div>
    </div>
    </div>
    <script type= "text/javascript" src="<?php echo BASE_URL;?>/assets/js/a-caixa.js"></script>

</body>
</html>
