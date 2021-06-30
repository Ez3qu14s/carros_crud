
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
<form action="./src/process.php" method="post">
        <div>Informações do proprietario</div>
        <section>
            <div class="input-group">
                <input
                    type="text"
                    name="proprietario"
                    placeholder="Nome do Proprietario"
                    value="<?php echo $data['proprietario']?>"
                />
            </div>
            <div class="input-group">
                <input
                    type="text"
                    name="cpf"
                    placeholder="CPF"
                    value="<?php echo $data['cpf']?>"
                />
            </div>
            <div class="input-group">
                <input
                    type="text"
                    name="rg"
                    placeholder="RG"
                    value="<?php echo $data['rg']?>"
                />
            </div>
        </section>
        <div>Informações do Carro</div>
        <section>
            <div class="input-group">
                <input
                    type="text"
                    name="marca"
                    value="<?php echo $data['marca']?>"
                    placeholder="marca"
                />
            </div>
            <div class="input-group">
                <input
                    type="text"
                    name="modelo"
                    placeholder="modelo"
                    value="<?php echo $data['modelo']?>"
                />
            </div>
            <div class="input-group">
                <input
                    type="text"
                    name="placa"
                    placeholder="placa"
                    value="<?php echo $data['placa']?>"
                />
            </div>
        </section>
        
        <input type="hidden" name="id" value="<?php echo $data['id'] ?>"/>

        <div class="input-group">
            <a href="./index.php">
                <button
                type="submit"
                name="salvarAlteracoes">
                    Salvar    
                </button>
            </a>
            <a href="./index.php">
                <button
                type="submit"
                >
                    Voltar    
                </button>
            </a>
        </div>
</body>
</html>

<?php }?>