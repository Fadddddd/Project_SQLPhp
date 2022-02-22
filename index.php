<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../vue/css/style.css" />
    <title>Ma BDD</title>
</head>

<body>
    <div id="global">
        <header>
            <a href="index.php">
                <h1 id="titreBlog">Ma BDD</h1>
            </a>
            <p>Welcome here!</p>
        </header>
        <div id="contenu">
            <?php
            $bdd = new PDO(
                'mysql:host=localhost;dbname=daishiexo;charset=utf8',
                'daishiexo',
                'zPXZzvu1VjmOf9.g'
            );
            $billets = $bdd->query('select BIL_ID as id, BIL_DATE as date,'
                . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
                . ' order by BIL_ID desc');
            /*  foreach ($billets as $billet) :
            ?>
                <article>
                    <header>
                        <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
                        <time><?= $billet['date'] ?></time>
                    </header>
                    <p><?= $billet['contenu'] ?></p>
                </article>
                <hr />
            <?php endforeach; ?>
 */

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
