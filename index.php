<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Idade Humana para Animal</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
 
<body>
    <div class="container mt-5">
        <h1 class="h1">Convertor de idade humana para a idade animal </h1>
 
        <form method="POST" action="">
            <div class="mb-3">
                <label for="animal" class="form-label">Insira a idade do animal:</label>
                <input type="number" step="0" class="form-control" name="idadeanimal" id="idadeanimal" required placeholder="Ex: 8"></input>
            </div>
 
            <button type="submit" class="btn btn-primary">Calcular</button>
 
 
 
        </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
</html>
 
 
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") { /* CONSULTA O SERVIDOR */
    $i_Animal = $_POST['idadeanimal'];
    if($i_Animal > 0){
    $calculo = $i_Animal * 7;
    echo "<i class='bi bi-chat-dots'></i><p>&nbsp;O resultado é: $calculo</p>";
}
}
 
?>
</div>