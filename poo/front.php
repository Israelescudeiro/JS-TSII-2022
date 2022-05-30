<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>
    <div>
        <form method="post">
            <label for="n1">Número 1:</label>
            <input type="text" id="n1" name="n1" value="<?php echo $n1; ?>" autocomplete="off">
            <label for="n2">Número 2:</label>
            <input type="text" id="n2" name="n2" value="<?php echo $n2; ?>" autocomplete="off">
            <label for="operacao">Operação</label>
            <select name="operacao" id="operacao">
                <option value="soma">Soma</option>
                <option value="subtracao">Subtração</option>
                <option value="multiplicacao">Multiplicação</option>
                <option value="divisao">Divisão</option>
            </select>
            <input type="submit" value="Calcular">
        </form>
    </div>
    <div>
        Resultado: <?php echo $resultado; ?>
    </div>
</body>
</html>