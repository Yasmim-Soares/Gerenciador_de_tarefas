<?php

class TarefaModel{
    private $tarefaPk;
    private $descricao;
    private $status_tarefa;

    function getTarefaPk(){
        return $this->tarefaPk;
    }

    function getDescricao(){
        return $this->descricao;
    }

    function getStatusDescricao(){
        return $this->status_tarefa;
    }

    function setDescricao($descricao){
         $this->descricao = $descricao;
    }

    function setStatusTarefa($status_tarefa){
        $this->status_tarefa = $status_tarefa;
    }
}