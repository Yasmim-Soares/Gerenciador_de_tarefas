<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <title>Gerenciador de tarefas</title>
</head>
<body>
    <h1>Crie/Gerencie suas tarefas:</h1>
    <form action="cadastrar-tarefa.php" method="POST" enctype="multipart/form-data">
        <div class="container-tarefas">
            <div class="input-adicionar">
                <input type="text" id="nova-tarefa" name="titulo_tarefa" placeholder="Adicionar nova tarefa">
                <input type="file" id="arquivo" name="arquivo">
                <button id="btn-adicionar" type="submit">Adicionar</button>
            </div>
            <ul id="listar">
            </ul>
        </div>
    </form>
</body>
</html>