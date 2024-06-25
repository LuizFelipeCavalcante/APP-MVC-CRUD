<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizando Tarefas</title>
</head>
<body>
    <h1>Atualizando Tarefas</h1>
    <form action="index.php?action=update&id=<?php echo $user['id']; ?>" method="post">
        <label for="tarefa">Tarefa:</label>
        <input type="text" id="tarefa" name="tarefa" value="<?php echo htmlspecialchars($user['tarefa'], ENT_QUOTES, 'UTF-8'); ?>" required>
        <br>
        <label for="email">Prazo:</label>
        <input type="email" id="prazo" name="prazo" value="<?php echo htmlspecialchars($user['prazo'], ENT_QUOTES, 'UTF-8'); ?>" required>
        <br>
        <input type="submit" value="Update">
    </form>
    <a href="index.php">Voltar para lista de tarefas</a>
</body>
</html>
