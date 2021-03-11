<?php
header("Content-type: text/html; charset-utf8");

if (isset($_POST["sacar"])) {
    if (isset($_POST["banco"]) && !empty($_POST["banco"])
        && isset($_POST["agencia"]) && !empty($_POST["agencia"])
        && isset($_POST["conta"]) && !empty($_POST["conta"])
        && isset($_POST["senha"]) && !empty($_POST["senha"])
        && isset($_POST["saque"]) && !empty($_POST["saque"])) {
        $saque = $_POST["saque"];
        $notas_100 = floor($_POST["saque"] / 100);
        $notas_50 = floor(($_POST["saque"] - $notas_100 * 100) / 50);
        $notas_20 = floor((($_POST["saque"] - $notas_100 * 100) - $notas_50 * 50) / 20);
        $notas_10 = floor(((($_POST["saque"] - $notas_100 * 100) - $notas_50 * 50) - $notas_20 * 20) / 10);
        $notas_5 = floor((((($_POST["saque"] - $notas_100 * 100) - $notas_50 * 50) - $notas_20 * 20) - $notas_10 * 10) / 5);
        $notas_2 = floor(((((($_POST["saque"] - $notas_100 * 100) - $notas_50 * 50) - $notas_20 * 20) - $notas_10 * 10) - $notas_5 * 5) / 2);
        $notas_1 = floor((((((($_POST["saque"] - $notas_100 * 100) - $notas_50 * 50) - $notas_20 * 20) - $notas_10 * 10) -$notas_5 * 5) - $notas_2 * 2) / 1);

    }else {
        header("location: index.html");
    }

}else {
    header("location: index.html");
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <meta charset="UTF-8">
    <title>Caixa Eletrônico</title>
</head>

<body>
    <ul><?php echo $saque ?></ul>
    <section id="grid">
        <ul class="nota_100"><img src="img_notas/100reais.jpg" alt="100_reais"></ul>
        <ul class="nota_50"><img src="img_notas/50reais.jpg" alt="50_reais"></ul>
        <ul class="nota_20"><img src="img_notas/20reais.jpg" alt="20_reais"></ul>
        <ul class="nota_10"><img src="img_notas/10reais.jpg" alt="10_reais"></ul>
        <ul class="nota_5"><img src="img_notas/5reais.jpg" alt="5_reais"></ul>
        <ul class="nota_2"><img src="img_notas/2reais.jpg" alt="2_reais"></ul>
        <ul class="nota_1"><img src="img_notas/1real.jpg" alt="1_real"></ul>
        <ul class="qtd_100"><?php echo $notas_100 ?></ul>
        <ul class="qtd_50"><?php echo $notas_50 ?></ul>
        <ul class="qtd_20"><?php echo $notas_20 ?></ul>
        <ul class="qtd_10"><?php echo $notas_10 ?></ul>
        <ul class="qtd_5"><?php echo $notas_5 ?></ul>
        <ul class="qtd_2"><?php echo $notas_2 ?></ul>
        <ul class="qtd_1"><?php echo $notas_1 ?></ul>
    </section>
</body>
</html>