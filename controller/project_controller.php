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
        $project->name = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
        //filter sanitize retire les balises html
        $project->update();
        header('location: index.php');
        //pr que ca delete ou update
        $projects = $project->all();
        require_once('./vue/project_liste.php');
        //lignes "39-40 réaffichent la liste intégrale mise à j
        break;


    default:
        $projects = $project->all();
        //var_dump($projects);
        require_once('./vue/project_liste.php');
        break;
}
