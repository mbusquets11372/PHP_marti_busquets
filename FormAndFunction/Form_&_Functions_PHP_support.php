<?php
#----------------------------------DECLARACIONS----------------------------------#
$euros=$pounds=0;
$rate=0.89;

if ($_POST)
      $euros=$_POST['euros'];

if ($_POST)
      $pounds=$_POST['pounds'];

#------------------------------------FUNCTION------------------------------------#
function multiplicacio($euros, $rate)
{
    return ($euros * $rate);
}
?>
<HTML>
<head>
    <meta charset="UTF-8">
    <title>Formulari</title>
    <style>
        form {margin: 5px;}
    </style>
</head>
<body>
  <h1><b>Currency Converter </b></h1>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        <b>EUROS:</b>
        <input type="text" name="euros" value="<?php echo $euros;?>">
        <br>
        <b>EXCHANGE RATE:</b>
        <input type="text" name="rate" value="<?php echo $rate;?>">
        <br>
        <?php
#---FICAM RESULTAT A VARIABLE PER PODER MOSTRAR RESULTAT EN EL VALUE DE POUNDS---#
        if (isset($pounds))
        $pounds=multiplicacio($euros, $rate);
        ?>
        <b>POUNDS:</b>
        <input type="text" name="pounds" value="<?php echo $pounds;?>">
        <br>
        <input type="submit" value="Envia">
        <br>
    </form>
    <hr>
</body>
</HTML>
