<?php
require('./modele/project.php');

$project = new Project();
switch ($op) {
    case 'delete':
        if ($id > 0) {
            $project->delete($id);
            $project = $project->all();
            require_once('./vue/project_supprime.php');
            require_once('./vue/project_liste.php');
            break;
        }
    case 'update':
        if ($id > 0) {
            $project->select($id);
            require_once('./vue/project_update.php');

            break;
        }
    case 'maj':
        $project->select($id);
        $project->name = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $project->description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $project->client_name = filter_input(INPUT_POST, 'client_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        //filter sanitize retire les balises html
        $project->update();
        header('location: index.php');
        //pr que ca delete ou update
        $projects = $project->all();
        require_once('./vue/project_liste.php');
        //lignes "39-40 réaffichent la liste intégrale mise à j
        break;

    case 'insert':
        if (empty($_POST))
            /*        require 'projectInsert.php';
        } else {
            echo 'valider formulaire';
        } */
            $project->name = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $project->description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $project->client_name = filter_input(INPUT_POST, 'client_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $project->start_date = filter_input(INPUT_POST, 'start_date', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $project->checkpoint_date = filter_input(INPUT_POST, 'checkpoint_date', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $project->delivery_date = filter_input(INPUT_POST, 'delivery_date', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $project->insert();
        header('location: index.php');
        $projects = $project->all();
        require_once('./vue/project_liste.php');
        break;

    default:
        $projects = $project->all();
        //var_dump($projects);
        require_once('./vue/project_liste.php');
        break;
}
