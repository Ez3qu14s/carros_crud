<?php require_once './src/process.php'; ?>

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
        $result = $mysqli -> query("SELECT * from proprietario");
    ?>

    <form action="./src/process.php" method="post">
        <div>Informações do proprietario</div>
        <section>
            <div class="input-group">
                <input
                    type="text"
                    name="proprietario"
                    placeholder="Nome do Proprietario"
                />
            </div>
            <div class="input-group">
                <input
                    type="text"
                    name="cpf"
                    placeholder="CPF"
                />
            </div>
            <div class="input-group">
                <input
                    type="text"
                    name="rg"
                    placeholder="RG"
                />
            </div>
        </section>
        <div>Informações do Carro</div>
        <section>
            <div class="input-group">
                <input
                    type="text"
                    name="marca"
                    placeholder="marca"
                />
            </div>
            <div class="input-group">
                <input
                    type="text"
                    name="modelo"
                    placeholder="modelo"
                />
            </div>
            <div class="input-group">
                <input
                    type="text"
                    name="placa"
                    placeholder="placa"
                />
            </div>
        </section>
        
        <div class="input-group">
            <a href="./index.php">
                <button
                type="submit"
                name="salvar">
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
    </form>
    
</body>
</html>