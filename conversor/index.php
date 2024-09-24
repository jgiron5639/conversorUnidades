<?php
include 'selector.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="conversor.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                 <h1>Conversor de Unidades</h1>
            </div>
        <div class="card-body">
   
    <form action="index.php" method="post" class="row g-3">
        <div class="col-md-12">
            <label for="seleccionMagnitud" class="form-label">Seleccione Magnitud:</label>
            <select name="convertir" id="seleccionMagnitud" class="form-select" onchange="this.form.submit()">
            <option value="seleccionar">Seleccione...</option>
            <option value="longitud" <?php if(isset($_POST['convertir']) && $_POST['convertir'] == 'longitud') echo 'selected'; ?>>Longitud</option>
            <option value="masa" <?php if(isset($_POST['convertir']) && $_POST['convertir'] == 'masa') echo 'selected'; ?>>Masa</option>
            <option value="temperatura" <?php if(isset($_POST['convertir']) && $_POST['convertir'] == 'temperatura') echo 'selected'; ?>>Temperatura</option>
            <option value="tiempo" <?php if(isset($_POST['convertir']) && $_POST['convertir'] == 'tiempo') echo 'selected'; ?>>Tiempo</option>
          </select>
        </div>
    
        <div class="col-md-6">
            <label for="selector1" id="selector1" class="form-label">De:</label>
            <select name="selector1" id="selector1" class="form-select">
            <?php echo $select1; ?>
            </select>
        </div>
        <div class="col-md-6">
            <label for="selector2" id="selector2" class="form-label">A:</label>
            <select name="selector2" id="selector2" class="form-select">
            <?php echo $select1; ?>
            </select>
        </div>
        <div class="col-md-12">
            <label for="numero" class="form-label">Cantidad:</label>
            <input type="number" name="numero" id="numero" class="form-control" required>
        </div>
        <div class="col-md-12 text-center">
            <button onclick="this.form.submit()" class="mi-boton">Convertir</button>
        </div>
    </form>
    <div class="resultado">
        <?php echo $resultado; ?>
    </div>
    
</div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>