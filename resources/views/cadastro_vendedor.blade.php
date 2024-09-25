<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Vendedor</title>
</head>
<body>
    <form action="/criar_vendedor" method="post">
        @csrf
        <label for="nomeVen">Nome</label>
        <input type="text" name="nomeVen">

        <label for="matriculaVen">Matricula</label>
        <input type="text" name="matriculaVen">

        <label for="comissaoVen">Comissao</label>
        <input type="text" name="comissaoVen">

        <input type="submit" value="Salvar">
    </form>
</body>
</html>
