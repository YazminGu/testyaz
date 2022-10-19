<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
echo "<h1 style='color:violet;'> Tuve un Glow Up</h1>";
print("<h3>Bienvenidos a PHP</h3>");
$nombre = 'Nils Kuesel';
$carrera = 'Programacion';
$grupo = '5PV'
  ?>
<ul>
    <li><?= $nombre; ?></li>
    <li><?php echo $carrera; ?></li>
    <li><?= $grupo; ?></li>
    </ul>
    <select name="" id="">
    <option value=""><?=$nombre;?></option>
    <option value=""><?=$carrera;?></option>
    <option value=""><?=$grupo;?></option>
</select>
<input type="text" name="" id="" value="<?=$nombre;?>">
<input type="text" name="" id="" value="<?=$carrera;?>">
<input type="text" name="" id="" value="<?=$grupo;?>">
</body>
</html>