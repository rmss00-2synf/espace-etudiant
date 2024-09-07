<div class="container">
    <h1 style="font-size: 1.5em;">Changement de mot de passe</h1>
    <form action="actions/mdpchange.php" method="post">
      <div class="form-group">
        <label for="oldPassword" style="font-size: 1em;">Ancien mot de passe</label>
        <input type="password" id="oldPassword" name="oldPassword" required>
      </div>
      <div class="form-group">
        <label for="newPassword" style="font-size: 1em;">Nouveau mot de passe</label>
        <input type="password" id="newPassword" name="newPassword" required>
      </div>
      <input type="submit" value="Changer">
    </form>
  </div>