
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario</h1>

    <section>
        <form action="resultado.php" method = "POST">
            <label for="text">Nome:</label>
            <input type="text" name="nome" placeholder="Digite seu nome:"><br>

            <label for="number">Idade:</label>
            <input type="Number" name="idade" placeholder="Qual a sua idade?"><br>

            <label for="Number">Nota:</label>
            <input type="Number" name="nota" min="0" max="10" placeholder="Nota"><br>

           <div>
              <button type="submit">Enviar</button>
           </div>

        </form>
    </section>

 
    
</body>
</html>