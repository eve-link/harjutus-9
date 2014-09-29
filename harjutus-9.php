<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Harjutus-9</title>

<style type="text/css">
.container {
      max-width: 200px;
  margin: 0 auto;
  padding: 10px;
  border: 1px solid red;
  text-align: center;
}
.container p {
    color: red;
    font-size: 18px;
}
</style>
</head>
<body>

<h2>Funktsiooni defineerimine</h2>
<h3>Argumendita funktsioon</h3>
<?php 
  function say_hello() {
      echo 'Minu esimene funktsioon!<br>';
  }
  say_hello();
 ?>

<h3>Argumendiga funktsioon</h3>

<?php 
    $person = "Eve";
    function say_hello_to($person) {
        echo "<div class='container'>" . "<p>Tere, {$person}!</p><br>" . "</div>";
    }
    say_hello_to($person);
?>
<?php 
    say_hello();
    say_hello_to($person = Ingrid);
?>


</body>
</html>