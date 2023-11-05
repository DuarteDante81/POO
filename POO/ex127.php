<!DOCTYPE html>
<html>
<head>
    <title>Retângulo</title>
</head>
<body>
<h1>Retângulo</h1>

<?php
class Retangulo {
    private $ladoMaior;
    private $ladoMenor;

    public function setLadoMaior($maior) {
        $this->ladoMaior = $maior;
    }

    public function setLadoMenor($menor) {
        $this->ladoMenor = $menor;
    }

    public function calculaArea() {
        return $this->ladoMaior * $this->ladoMenor;
    }
}

if (isset($_POST['calculaArea'])) {
    $retangulo = new Retangulo();
    $largura = floatval($_POST['largura']);
    $altura = floatval($_POST['altura']);
    $retangulo->setLadoMaior($largura);
    $retangulo->setLadoMenor($altura);
    $area = $retangulo->calculaArea();
    echo "<p>A área é: $area</p>";
} else {
    echo '<form method="post" action="">
            <label for="largura">Informe a largura:</label>
            <input type="text" name="largura" id="largura" required>
            <br>
            <label for="altura">Informe a altura:</label>
            <input type="text" name="altura" id="altura" required>
            <br>
            <input type="submit" name="calculaArea" value="Calcula Área">
          </form>';
}
?>
<br><br>
<a href="../POO/index.html">Voltar</a>
</body>
</html>