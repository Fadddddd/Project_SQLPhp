<form method="POST" action="index.php?table=project&id=<?= $project->id ?>&op=maj">
    <p>Entrez vos valeurs :</p>

    <label>Name</label> <br />
    <textarea rows="5" cols="20" name="nom">Entrez votre nom</textarea><br />


    <label>Description</label> <br />
    <textarea rows="5" cols="20" name="description">Ajoutez une description</textarea><br />


    <label>client_name</label> <br />
    <textarea rows="5" cols="20" name="client_name">Ajoutez un nom de client</textarea><br />
    <input type="submit" value="Validez les valeurs" /><br>


</form>