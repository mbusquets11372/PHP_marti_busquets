<?php
      if ($_GET)
      {
      $nom="$_GET[nom]";
      $email= "$_GET[email]";
      $gender= "$_GET[gender]";
      $pwd= "$_GET[pwd]";
      $dateOfBirth= "$_GET[dateOfBirth]";
      $comment= "$_GET[comment]";
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
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET">
        <b>Nom:</b>
        <input type="text" name="nom">
        <br>
        <b>Correu electrònic:</b>
        <input type="text" name="email">
        <br>
        <b>Gender</b>
        <br>
          <input type="radio" name="gender" value="Male">
          <label for="male">Male</label><br>
          <input type="radio" name="gender" value="Female">
          <label for="female">Female</label>
        <br>
        <b>Password</b>
          <input type="password" name="pwd">
        <br>
        <b>Any de naixament</b>
        <br>
        <input type="date" name="dateOfBirth">
        <br>
        <b>Comentaris</b>
        <br>
        <textarea name="comment" rows="3" cols="50"></textarea>
        <br>
        <b>CFGS you are studying</b>
        <br>
        <select name="cfgs[]">
            <option value="ASIX">ASIX</option>
            <option value="DAW">DAW</option>
        </select>
        <br>
        <b>Agree terms and conditions</b>
        <br>
        <input type="checkbox" name="terms" value="agreed" required>
        <br>
        <input type="submit" value="Envia">
        <br>
    </form>
    <hr>
</body>
</HTML>
<?php
  if (isset($nom))
      echo "<strong>Nom:</strong> $nom <br>";
  if (isset($email))
      echo "<strong>Correu:</strong> $email <br>";
  if (isset($gender))
      echo "<strong>Genere:</strong> $gender <br>";
  if (isset($pwd))
      echo "<strong>Contrasenya:</strong> $pwd <br>";
  if (isset($dateOfBirth))
      echo "<strong>Any de naixament:</strong> $dateOfBirth <br>";
  if (isset($nom))
      echo "<strong>Comentaris:</strong> $comment <br>";
  if (isset($opcio)){
      echo "<strong>CFGS que estudíes:</strong>";
      foreach ($_GET['cfgs'] as $opcio){
        echo "<br>$opcio";
      }
    }
?>
                                                                                                                                                                                                                                                                      
