<form action="index.php?view=view/profile" method="post">
    <label for="login">Login</label>
    <input type="text" id="login" name="login"><br>
    <label for="email">Email</label>
    <input type="email" id="email" name="email"><br>
    <label for="pwd">Mot de passe</label>
    <input type="password" id="pwd" name="pwd"><br>
    <label for="country">Pays</label>
    <select name="country" id="country">
        <option value="">Select...</option>
        <option value="1">Allemagne</option>
        <option value="2">Belgique</option>
        <option value="3">France</option>
    </select><br>
    <input type="submit">
</form>