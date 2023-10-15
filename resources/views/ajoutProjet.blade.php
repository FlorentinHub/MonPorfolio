<div>
<form action="/projet" method="POST">
    @csrf
    <label for="nom_projet">Nom du Projet:</label>
    <input type="text" id="nom_projet" name="nom_projet" required><br>

    <label for="type_projet">Type de Projet:</label>
    <select id="type_projet" name="type_projet" required>
        <option value="Personnel">Personnel</option>
        <option value="Scolaire">Scolaire</option>
    </select><br>

    <label for="complexite">Niveau de Complexité:</label>
    <input type="number" id="complexite" name="complexite" required><br>

    <label for="pourcentage_complet">Pourcentage Complet:</label>
    <input type="number" id="pourcentage_complet" name="pourcentage_complet" required><br>

    <label for="lien_github">Lien GitHub:</label>
    <input type="url" id="lien_github" name="lien_github"><br>

    <label for="description">Description:</label>
    <textarea id="description" name="description"></textarea><br>

    <input type="submit" value="Ajouter Projet">
</form>
</div>