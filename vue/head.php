<!doctype html>
<html lang="fr">
<title><?= $title ?? 'Student' ?></title>
<link rel="stylesheet" href="vue/css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="icon" href="<?= $favicon ?? 'data:;base64,iVBORw0KGgo=' ?>">
<link rel="stylesheet" href="./css/style.css">

<body>
    <nav>
        <div class="menu">
            <a href="index.php?table=Project">Table Projet</a>
            <a href="index.php?table=School_year">Table School_year</a>
            <a href="index.php?table=Student">Table Student</a>
            <a href="index.php?table=Tag">Table Tag</a>
        </div>
    </nav>
</body>