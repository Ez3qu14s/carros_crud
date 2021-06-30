<?php require_once './src/process.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $result = $mysqli -> query("SELECT * FROM motorista") or die($mysqli -> error);

    ?>

    <table border="1">
        <thead>
            <tr>
                <th>Proprietario</th>
                <th>Modelo</th>
                <th>Placa</th>
            </tr>
        </thead>

            <?php while($row = $result -> fetch_assoc()): ?>
            <tr>
                
                <td><?php echo $row['proprietario']; ?></td>
                <td><?php echo $row['marca'].' '.$row['modelo']; ?></td>
                <td><?php echo $row['placa']; ?></td>
                <td>
                    <?php
                        echo "<a href='edit.php?id=".$row['id']."'><button type='button' class='edit'>Editar</button></a>
                        <a href='delete.php?id=".$row['id']."'><button type='button' class='remove'>Excluir</button></a>"
                    ?>
                </td>
                
            </tr>
            <?php endwhile; ?>
    </table>

    <a href="./create.php"><button type="button">Adicionar funcionario</button></a>
    
</body>
</html>