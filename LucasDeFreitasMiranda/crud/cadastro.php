<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="create.php" method="POST" >
        <label>Nome:</label>
        <input style="border-radius: 5px;" type="text" name="nome" placeholder="" required="">
        <label>Data Nascimento:</label>
        <input style="border-radius: 5px;" type="date" name="dataNascimento" placeholder="" required="">
        <label>Sexo:</label>
        <select style="border-radius: 5px;" name="sexo">
            <option value="">Selecione...</option>
            <option value="Feminino">Feminino</option>
            <option value="Masculino">Masculino</option>
        </select>
        <button type="submit" name="acao">Salvar</button>
    </form>
</body>
</html>