<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['username']) && isset($_POST['password']) && $_POST['username'] === 'qwerty' && $_POST['password'] === 'qwerty') {
  $_SESSION['username'] = $_POST['username']; 
} else {
  die("Väärä käyttäjätunnus/salasana. <a href='index.html'>Palaa kirjautumissivulle</a>");
}
}

if (!isset($_SESSION['username'])) {
  die("Sinulla ei ole oikeuksia! <a href='index.html'>Kirjaudu sisään</a>");
}


?>

<html> 

<head>
<title>Ajanvarauskalenteri</title>
</head>

<body> 

<h1> Ajanvarauskalenteri </h1>

</body>

</html>