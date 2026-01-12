<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $tarefa = $_POST['tarefa'];
    $atraso = $_POST['atraso'];

 
    if($tarefa >= 10 && $tarefa <= 19 && $atraso >=2 || $atraso == 3 ){
        $desempenho = "Desempenho Regular";
    }
    elseif($tarefa >= 20 && $atraso <= 1){
        $desempenho = "Desempenho excelente";
    }
   
    else{
        $desempenho = "Desempenho insatisfatorio";
    }
}


?>


<h1>Informações do Funcionario</h1>

<table border = 1>
    <tr>
        <th>Nome</th>
        <th>Idade</th>
        <th>Quantidade tarefas</th>
        <th>Atrasos</th>
        <th>Situação</th>
    </tr>

    <tr>
        <td><?=$nome?></td>
        <td><?=$idade?></td>
        <td><?=$tarefa?></td>
        <td><?=$atraso?></td>
        <td><?=$desempenho?></td>

    </tr>
</table>