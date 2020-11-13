<head>
<link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/css/cadeedit.css">  
</head>

<nav class="navbar topo" role="navigation">
<a href="<?php echo BASE_URL;?>/home" class="btn btn-outline-light voltar">Voltar</a> 
</nav>
<div class="container ">
<div class="jumbotron mt-3 row">
        <h1 class="display-4">Atualização do Produto</h1>
      
    </div>
    <div class=" p-3 fundof row-md-6 offset">
<form method="POST">
<div class="form-group row-md-6 offset-md-3 m-3">
    
    <label for="nome" class="row" >
    Nome:
    <input type="text" class="form-control form-control-lg bg-form" name= "nome" value="<?php echo $info['nome']; ?>"><br>

    </label>
    </div>

    <div class="form-group row-md-6 offset-md-3 m-3">
        <label for="codigo" class="row">
    Código:
    <input type="text" class="form-control form-control-lg bg-form" name= "codigo" value="<?php echo $info['codigo']; ?>"><br>
    </label>
    </div>
    
    <div class="form-group row-md-6 offset-md-3 m-3">
        <label for="descrica" class="row">
    Descrição
    <input type="text" class="form-control form-control-lg bg-form" name= "descricao" value="<?php echo $info['descricao']; ?>"><br>
    </label>
    </div>

    <div class="form-group row-md-6 offset-md-3 m-3">
        <label for="dia" class="row">
    Data:
    <input type="date" class="form-control form-control-lg bg-form" name= "dia" value="<?php echo $info['dia']; ?>"><br>
    </label>
    </div>
    <div class="form-group row-md-6 offset-md-3 m-3"> 
        <label for="valor" class="row">
    Valor:
    <input type="text" class="form-control form-control-lg bg-form" name= "valor" value="<?php echo $info['valor']; ?>"><br>
    </label>
    </div>
    <div class="form-group row-md-6 offset-md-3 m-3">

<label for="qtd" class="row">
    Quantidade:
    <input type="text" class="form-control form-control-lg bg-form" name= "qtd" value="<?php echo $info['qtd']; ?>"><br>
    </label>
        </div>
    <input type="submit"  class="form-control form-control-lg btn btn-outline-dark" name="enviar" id="">
    <div class="form-group row-md-6 offset-md-3 m-3">
        <label for="enviar" class="row">
    </form>
</div>