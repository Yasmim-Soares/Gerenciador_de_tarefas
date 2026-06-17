<?php
class Tarefas{
    private $mysqli;

    public function __construct($conexaoBanco) {
        $this->mysqli = $conexaoBanco;
    }
}
?>