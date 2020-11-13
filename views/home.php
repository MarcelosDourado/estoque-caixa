<?php 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/css/home.css">   
</head>
<body>
<div class="container">
<div class="row row align-items-center">
<div class="jumbotron col-lg-12 mt-3">
    <h1 class="display-4 col text-center">Estoque</h1>
    <p class="lead col text-center">sistema de Estoque com fluxo de Caixa</p>
    <hr class="my-4 col text-center">
</div>
</div>


<div class="row row align-items-center mb-2">
 
        
   
<div class="btn-group col " role="group" aria-label="Button group">
 <a class="btn-primary btn-lg btn btn-outline-dark col text-centertext-center" role="button"  href="<?php echo BASE_URL; ?>/cadastrar"> Cadastrar</a>
 
 <a class="btn-primary btn-lg btn btn-outline-primary col text-center" role="button" href="<?php echo BASE_URL; ?>/caixa">Caixa</a><br>
 <a class="btn-secondary  btn-lg btn col text-center" role="button" href="<?php echo BASE_URL; ?>/histórico">Histórico</a><br>

</div>
</div>

<div class="row row align-items-center">
    <div class="col-12 col-12">
<table class="table table-striped table-bordered table-hover" border="1">
<thead class="thead-dark">
<tr>

<th scope="col">id</th>
<th scope="col">Código</th>
<th scope="col">Nome</th>
<th scope="col">Descrição</th>
<th scope="col">data de entrada</th>
<th scope="col">Valor</th>
<th scope="col">Quantidade</th>
<th scope="col" colspan="2" >OPÇÕES</th>
</tr>
</thead>
<tbody>
<?php foreach($lista as $item): ?>

<tr>
    
			<td><?php echo $item['id']; ?></td>
			<td><?php echo $item['codigo']; ?></td>
            <td><?php echo $item['nome']; ?></td>
            <td><?php echo $item['descricao']; ?></td>
            <td><?php echo $item['dia']; ?></td>
            <td><?php echo $item['valor']; ?></td>
            <td><?php echo $item['qtd']; ?></td>
            <td><a class="btn btn-info" href="<?php echo BASE_URL;?>/cadastrar/editar/<?php echo $item['id']; ?>">Editar</a></td>
            <td><a class="btn btn-danger" href="<?php echo BASE_URL;?>/cadastrar/delete/<?php echo $item['id']; ?>">Apagar</a></td>
<?php endforeach; ?>
</tr>
</tbody>
</table>
</div>
</div>

</div>

</body>
</html>