<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tarefa.css">
    <title>Document</title>
</head>
<body>
    <div id="formulario">
        <div id="title-formulario"> 
            <h1>Calcular média</h1>
        </div>
        <div id="campos">
            <form action="media.php" method="GET">
                <input required="required" type="text" id="campo" name="nome" placeholder="Digite seu nome" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$">
                <input required="required" type="number" id="campo" name="media1" placeholder="Digite a nota" min="0" max="10" step="any">
                <input required="required" type="number" id="campo" name="media2" placeholder="Digite a nota" min="0" max="10" step="any">
                <input required="required" type="number" id="campo" name="media3" placeholder="Digite a nota" min="0" max="10" step="any">
                <input type="submit" id="botao" value="Calcular">
            </form>
        </div>
    </div>
</body>
</html>