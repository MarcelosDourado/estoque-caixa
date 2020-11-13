
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/css/cadeedit.css">  
</head>
<body>
<nav class="navbar topo" role="navigation">
<a href="<?php echo BASE_URL;?>/home" class="btn btn-outline-light voltar">Voltar</a> 
</nav>
    <div class="container ">
    <div class="jumbotron mt-3 row">
        <h1 class="display-4">Cadastro de Livros</h1>
      
    </div>
    <div class=" p-3 fundof row-md-6 offset">
    <form method="POST" action="<?php echo BASE_URL; ?>/cadastrar/add_save">
    <div class="form-group row-md-6 offset-md-3 m-3">
    
        <label for="nome" class="row" >
            Nome:
            <input type="text" class="form-control form-control-lg bg-form" id="nome" name= "nome"><br>
        </label>
    </div>

    <div class="form-group row-md-6 offset-md-3 m-3">
        <label for="codigo" class="row">
            Código:
            <input type="text" class="form-control form-control-lg bg-form"  id="codigo" name= "codigo"><br>
        </label>
    </div>

    <div class="form-group row-md-6 offset-md-3 m-3">
        <label for="descrica" class="row">
            Descrição
            <input type="text" class="form-control form-control-lg bg-form" id="descricao" name= "descricao"><br>
        </label>
    </div>

    <div class="form-group row-md-6 offset-md-3 m-3">
        <label for="dia" class="row">
            Data:
            <input type="date" class="form-control form-control-lg bg-form" id="dia" name= "dia"><br>
        </label>
    </div>

        <div class="form-group row-md-6 offset-md-3 m-3"> 
        <label for="valor" class="row">
            Valor:
            <input type="text" class="form-control form-control-lg bg-form" id="valor" name= "valor"><br>
        </label>
        </div>

        <div class="form-group row-md-6 offset-md-3 m-3">

        <label for="qtd" class="row">
        Quantidade:
            <input type="text" class="form-control form-control-lg bg-form" id="qtd" name="qtd"><br>
        </label>
        </div>

        <div class="form-group row-md-6 offset-md-3 m-3">
        <label for="enviar" class="row">
            <input type="submit" class="form-control form-control-lg btn btn-outline-dark" id="enviar" name="enviar" id="">
        </label>
        </div>

    </form>
    </div>
    </div>
    </div>
</body>
</html>