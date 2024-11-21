<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Executando PHP e JavaScript</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php
        // Mensagem personalizada definida no PHP
        $mensagem = "Olá! Esta mensagem foi gerada pelo PHP.";
    ?>

    <h1>Bem-vindo ao exemplo de PHP e JavaScript</h1>
    <p>Clique no botão abaixo para executar o JavaScript com dados do PHP:</p>
    <button onclick="mostrarMensagem()">Clique aqui</button>

    <script>
        // Variável JavaScript gerada pelo PHP
        const mensagem = <?php echo json_encode($mensagem); ?>;

        function mostrarMensagem() {
            alert(mensagem);
        }
    </script>
</body>
</html>
