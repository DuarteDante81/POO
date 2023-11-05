<!DOCTYPE html>
<html>
<head>
    <title>Sequência</title>
</head>
<body>
<h1>Sequência</h1>

<?php
class Sequencia {
    private $inicio;
    private $fim;

    public function setInicio($inicio) {
        $this->inicio = $inicio;
    }

    public function setFim($fim) {
        $this->fim = $fim;
    }

    public function exibirTodosNumeros() {
        for ($i = $this->inicio; $i <= $this->fim; $i++) {
            echo $i . "<br>";
        }
    }

    public function exibirPares() {
        for ($i = $this->inicio; $i <= $this->fim; $i++) {
            if ($i % 2 == 0) {
                echo $i . "<br>";
            }
        }
    }

    public function exibirImpares() {
        for ($i = $this->inicio; $i <= $this->fim; $i++) {
            if ($i % 2 != 0) {
                echo $i . "<br>";
            }
        }
    }
}

if (isset($_POST['mostrar'])) {
    $sequencia = new Sequencia();
    $inicio = intval($_POST['inicio']);
    $fim = intval($_POST['fim']);
    $sequencia->setInicio($inicio);
    $sequencia->setFim($fim);

    echo "<h2>Sequência:</h2>";

    if (isset($_POST['todos'])) {
        $sequencia->exibirTodosNumeros();
    }

    if (isset($_POST['pares'])) {
        $sequencia->exibirPares();
    }

    if (isset($_POST['impares'])) {
        $sequencia->exibirImpares();
    }
} else {
    echo '<form method="post" action="">
            <label for="inicio">Selecione o valor inicial:</label>
            <input type="text" name="inicio" id="inicio" required>
            <br>
            <label for="fim">Selecione o valor final:</label>
            <input type="text" name="fim" id="fim" required>
            <br>
            <input type="submit" name="mostrar" value="Mostrar">
            <br>
            <input type="checkbox" name="todos" value="1" checked> Todos
            <input type="checkbox" name="pares" value="1"> Apenas os pares
      <input type="checkbox" name="impares" value="1"> Apenas os ímpares
          </form>';
}
?>
<br><br>
<a href="../POO/index.html">Voltar</a>
</body>
</html>