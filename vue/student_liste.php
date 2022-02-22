<table>

    <tr>
        <th>Id</th>
        <th>Id_school_year</th>
        <th>Projet_Id</th>
        <th>firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>created_at</th>
        <th>updated_at</th>

    </tr>

    <?php //liste des tags avec des boucles for each
    foreach ($students as $student) { ?>
        <tr>
            <td><?= $student['id'] ?></td>
            <td><?= $student['school_year_id'] ?></td>
            <td><?= $student['project_id'] ?></td>
            <td><?= $student['firstname'] ?></td>
            <td><?= $student['lastname'] ?></td>
            <td><?= $student['email'] ?></td>
            <td><?= $student['created_at'] ?></td>
            <td><?= $student['updated_at'] ?></td>
            <td><a href="index.php?table=student&id=<?= $student['id'] ?>&op=update">🖊️</a> </td>
            <td><a href="index.php?table=student&id=<?= $student['id'] ?>&op=delete">❌</a> </td>

        </tr>
    <?php } ?>
</table>