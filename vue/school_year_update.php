<form method="POST" action="index.php?table=tag&id=<?= $tag->id ?>&op=maj">
    <p>Entrez vos valeurs</p>

    <label>Name</label> <br />
    <textarea rows="5" cols="20" name="nom">Entrez le nom</textarea><br />


    <label>Description</label> <br />
    <textarea rows="5" cols="20" name="description">Ajoutez une description</textarea><br />
    <input type="submit" value="Validez les valeurs" />

    <label>start_date</label> <br />
    <textarea rows="5" cols="20" name="description">Ajoutez une date de début</textarea><br />
    <input type="submit" value="Validez les valeurs" />

    <label>end_date</label> <br />
    <textarea rows="5" cols="20" name="description">Ajoutez une end_date</textarea><br />
    <input type="submit" value="Validez les valeurs" />

</form>