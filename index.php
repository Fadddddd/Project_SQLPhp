<?php

require_once('vue/head.php');
require_once('modele/connect_bdd.php');
//resetDb();

//echo dirname($_SERVER['PHP_SELF']) . '<br>';
//répertoire ou se trouve le ficher index.php
//echo $_SERVER['REQUEST_URI'] . '<br>';
//route avec le répertoire
/* 
$basedir = dirname($_SERVER['PHP_SELF']);
$uri = $_SERVER['REQUEST_URI'];
$route = str_replace($basedir, '', $uri);

echo $route . '<br>';
 */

$table = ucfirst($_GET['table'] ?? '');
$id = intval($_GET['id'] ?? -1);
$op = $_GET['op'] ?? '';
//op=opération

switch ($table) {
    case 'Tag':
        require('controller/TagController.php');
        break;
    case 'Student':
        require('controller/StudentController.php');
        break;
    case 'Project':
        require('controller/project_controller.php');
        break;
    case 'School_year':
        require('controller/school_year_controller.php');
        break;
    default:
        require('controller/StudentController.php');
        break;
}



/*  $tag->name = 'testInsert';
    $tag->description = 'testInsert';
    $tag->insert();  ces lignes consistent à voir si le test fonctionne*/


require_once('vue/foot.php');
