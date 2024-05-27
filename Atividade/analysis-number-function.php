<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="POST">
        <label for="numero1">Number 1:</label>
        <input type="number" id="numero1" name="numeros[]" required>
            <br>
        <label for="numero2">Number 2:</label>
        <input type="number" id="numero2" name="numeros[]" required>
            <br>
        <label for="numero3">Number 3:</label>
        <input type="number" id="numero3" name="numeros[]" required>
            <br>
        <label for="numero4">Number 4:</label>
        <input type="number" id="numero4" name="numeros[]" required>
            <br>
        <label for="numero5">Number 5:</label>
        <input type="number" id="numero5" name="numeros []" required>
            <br>
        <input type="submit" value="verificar" >
            <br>
            <br>

        <!-- Saída dos resultado das operações -->
        <div id="output">
            <?php

                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numeros'])) {

                    $numeros = $_POST['numeros'];
        
                    echo "Resultados da Verificação" . "<br><br>";
        
                    foreach ($numeros as $numero ) {
                        $parOuImpar = verificarParImparNeutro($numero);
                        $redondo = verificarRedondo($numero);
                        $postivoNegativo = verificarPostivoNegativo($numero);
        
                        if ($numero == 0) {
                            echo "O número zero é $parOuImpar.<br>";
                        } else {
                            echo "O número $numero é $parOuImpar, $postivoNegativo e $redondo.<br>";
                        }
                    }
                }

            ?>
        </div>
    </form>

    <?php
        function verificarParImparNeutro($numero) {
        
            if ($numero === 0) {
                return "Neutro";
            } elseif ($numero % 2 == 0) {
                return "Par";
            } else {
                return "Impar";
            }
        }

        function verificarRedondo($numero) {
            if ($numero % 2 == 0) {
                return "Redondo";
            } else {
                return "Não redondo";
            }
        }

        function verificarPostivoNegativo($numero) {
            if ($numero > 0) {
                return "Positivo";
            } elseif ($numero < 0) {
                return "Negativo";
            } else {
                return "Neutro";
            }
        }
    ?>
    
</body>
</html>