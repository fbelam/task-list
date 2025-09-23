<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Criar nova tarefa</h1>

    <form method="POST" action="/tasks">
        @csrf

        <label for="description">Descrição da tarefa: </label><br>
        <input type="text" id="description" name="description" required><br><br>

        <button type="submit">Salvar tarefa</button>
    </form>
</body>
</html>