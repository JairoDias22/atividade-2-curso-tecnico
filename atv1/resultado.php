<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $nota = $_POST['nota'];


    if($nota >= 7 ){
        $alerta = "Aprovado";
    }
    elseif($nota == 5 || $nota == 6 ){
        $alerta = "Recuperação";
    }
    else{
        $alerta = "Reprovado";
    }
}


?>


<h1>Informações do aluno</h1>

<table border = 1>
    <tr>
        <th>nome</th>
        <th>idade</th>
        <th>nota</th>
        <th>Situação</th>
    </tr>

    <tr>
        <td><?=$nome?></td>
        <td><?=$idade?></td>
        <td><?=$nota?></td>
        <td><?=$alerta?></td>

    </tr>
</table>