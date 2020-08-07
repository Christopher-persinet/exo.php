<?php
session_start();
// permet de détruire la session
unset($_SESSION);
session_destroy();

header('location: formulaire.php');
exit();