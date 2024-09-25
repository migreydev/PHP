<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
        <h2 class="text-center">Datos del Formulario</h2>
        <form action="./card.php" method="POST" class="mt-4">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Indica tu nombre" required>
            </div>
            <div class="form-group">
                <label for="lastName">Apellidos</label>
                <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Indica tu apellido" required>
            </div>
            <div class="form-group">
                <label for="age">Edad</label>
                <input type="number" id="age" name="age" class="form-control" placeholder="Indica tu edad" required>
            </div>
            <div class="form-group">
                <label for="weight">Peso</label>
                <input type="number" id="weight" name="weight" class="form-control" placeholder="Indica tu peso" required>
            </div>
            <div class="form-group">
                <label for="height">Altura</label>
                <input type="number" id="height" name="height" class="form-control" placeholder="Indica tu altura" required>
            </div>
            <div class="form-group">
                <label for="asignature">Asignaturas</label>
                <input type="text" id="asignature" name="asignature" class="form-control" placeholder="Indica tus asignaturas" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
        </form>
    </div>
</body>
</html>