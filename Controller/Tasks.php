<?php
require_once '../model/conexao.php';

class Tasks{
    private $mysqli;

    public function __construct($conexaoBanco) {
        $this->mysqli = $conexaoBanco;
    }

    public function insertTask($task, $file) {
        $sql_tarefa = "INSERT INTO tarefas(descricao, status_tarefa) VALUES (?, ?)";
        $stmt = $this->mysqli->prepare($m);

        $descricao =  $task['tittleTask'];
        $status =  $task['status_tarefa'];
    }
}
?>