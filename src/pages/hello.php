<?php

$name = $request->query->get('name', 'World');
// $name = isset($_GET['name']) ? $_GET['name'] : 'World';
?>

<h1>Hello <?php htmlspecialchars($name, ENT_QUOTES) ?>
