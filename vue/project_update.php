<form method="POST" action="index.php?table=tag&id=<?= $tag->id ?>&op=maj">
    <p>Entrez vos valeurs</p>

    <label>Name</label> <br />
    <textarea rows="5" cols="20" name="nom">Entrez votre nom</textarea><br />


    <label>Description</label> <br />
    <textarea rows="5" cols="20" name="description">Ajoutez une description</textarea><br />
    <input type="submit" value="Validez les valeurs" />

    <label>client_name</label> <br />
    <textarea rows="5" cols="20" name="client_name">Ajoutez un nom au client</textarea><br />
    <input type="submit" value="Validez les valeurs" />

    <label>start_date</label> <br />
    <textarea rows="5" cols="20" name="description">Ajoutez une date de début</textarea><br />
    <input type="submit" value="Validez les valeurs" />

    <label>checkpoint_date</label> <br />
    <textarea rows="5" cols="20" name="description">Ajoutez une checkpoint_date</textarea><br />
    <input type="submit" value="Validez les valeurs" />

    <label>delivery_date</label> <br />
    <textarea rows="5" cols="20" name="description">Ajoutez une delivery_date</textarea><br />
    <input type="submit" value="Validez les valeurs" />


</form>