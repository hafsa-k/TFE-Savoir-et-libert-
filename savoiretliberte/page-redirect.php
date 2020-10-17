<?php
$current_user = wp_get_current_user();
//print_r($current_user);

echo  $current_user->user_login;

header("location: https://hafsa.techniques-graphiques.be/savoir-et-liberte/members/".$current_user->user_login);

?>

