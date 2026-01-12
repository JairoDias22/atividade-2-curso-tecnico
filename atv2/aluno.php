
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desempenho dos funcionarios</title>
</head>
<body>
    <h1>Formulario de desempenho</h1>

    <section>
        <form action="calcula.php" method = "POST">
            <label for="text">Nome:</label>
            <input type="text" name="nome" placeholder="Digite seu nome:"><br>

            <label for="number">Idade:</label>
            <input type="Number" name="idade" placeholder="Qual a sua idade?"><br>

            <label for="Number">Tarefas entregues:</label>
            <input type="Number" name="tarefa" min="0" max="50"><br>

            <label for="Number">Atrasos:</label>
            <input type="Number" name="atraso" min="0" max="50" ><br>

           <div>
              <button type="submit">Enviar</button>
           </div>

        </form>
    </section>

 
    
</body>
</html>