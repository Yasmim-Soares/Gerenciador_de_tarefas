<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <title>Task Manager</title>
</head>
<body>
    <h1>Create/Manage your tasks:</h1>
    <form action="manageTasks.php" method="POST" enctype="multipart/form-data">
        <div class="containerTasks">
            <div class="inputAdd">
                <input type="text" id="newTasks" name="titleTask" placeholder="Add task">
                <input type="file" id="archive" name="archive">
                <label nome="status">Status</label>
                <select name="status_tarefa" id="status_tarefa">
                    <option value="AIniciar">A iniciar</option>
                    <option value="EmAndamento">Em andamento</option>
                    <option value="Finalizado">Finalizado</option>
                </select>
                <button id="btn-add" type="submit">Add</button>
            </div>
            <ul id="list">
            </ul>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('form').on('submit', function(e){
                e.preventDefault();

                var formData = new FormData(this);

                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(resposta) {
                        alert("Tarefa adicionada!");
                    },
                    error: function(){
                        alert("Ocorreu um erro ao enviar os dados.");
                    }
                });
            });
        });
    </script>
</body>
</html>
