<?php
require_once('instagram_basic_display_api.php');
$params = array(
    'get_code'=> isset($_GET['code']) ? $GET['code'] : ''
);
$ig= new instagram_basic_display_api( $params );
?>

<a href="">
    Authorize w/Instagram
</a>