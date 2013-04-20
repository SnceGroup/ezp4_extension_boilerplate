<?php

$Module = array( 'name' => 'Your Module',
                 'variable_params' => true );

$ViewList = array();

$ViewList['view_name'] = array(
    'functions' => array( 'view_name_function' ),
    'script' => 'view_name.php',
    'params' => array( 'id' )
);

$FunctionList = array();
$FunctionList['view_name_function'] = array( );
?>