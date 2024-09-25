<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Cliente</title>
</head>
<body>
    <form action="/criar_cliente" method="post">
        @csrf
        <label for="nameCli">Nome</label>
        <input type="text" name="nameCli">

        <label for="cpfCli">CPF</label>
        <input type="text" name="cpfCli">

        <label for="emailCli">Email</label>
        <input type="text" name="emailCli">

        <input type="submit" value="Salvar">
    </form>
</body>
</html>