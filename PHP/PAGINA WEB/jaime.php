<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="border border-primary">
<h1 class="display-2">Los datos</h1>

<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="desde">Fecha desde</label>
      <input type="date" class="form-control" id="desde" placeholder="Desde...">
    </div>
    <div class="form-group col-md-6">
      <label for="hasta">Fecha hasta</label>
      <input type="date" class="form-control" id="hasta" placeholder="Hasta...">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="tipo">Tipo de Medida</label>
      <input type="text" class="form-control" id="tipo" placeholder="Tipo...">
    </div>
    <div class="form-group col-md-6">
      <label for="valor">Valor Medida</label>
      <input type="text" class="form-control" id="valor" placeholder="Valor...">
    </div>
  </div>
  <button type="submit" class="btn btn-outline-success btn-lg btn-block">Buscar</button>
</form>
<h1 class="display-4">La tabla</h1>
<table class="table table-sm table-dark">
  <thead>
    <tr >
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
  <tr>
  <td class="bg-primary">...</td>
  <td class="bg-success">...</td>
  <td class="bg-warning">...</td>
  <td class="bg-danger">...</td>
  
</tr>
  </tbody>
</table>



<div>
    <!--JavaBooststrap-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>