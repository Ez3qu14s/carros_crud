<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once './src/process.php';
        if($_GET['id']){
            $id = $_GET['id'];
        
            $result = $mysqli -> query("SELECT * FROM motorista WHERE id = $id") or die($mysqli -> error);
            $data = $result -> fetch_assoc();
    ?>
    <div class="form">
    <div class="title">
        <h3>Você realmente deseja excluir este produto: <?php echo $data['proprietario']; ?>?</h3>
    </div>
    
        <form action="./src/process.php" method="post">
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
            <button type="submit" name="delete">Confirmar</button>
            <a href="index.php"><button type="button">Voltar</button></a>
        </form>
    </div>
</body>
</html>

<?php }?>