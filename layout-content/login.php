<form action="./index.php?content=login_script" method="post">
  <div class="form-group">
    <label for="inputEmail">Vul hier uw e-mailadres in:</label>
    <input name="email" type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="name@example.com">
    <small id="emailHelp" class="form-text text-muted">Uw Privacy is gegarandeerd</small>
  </div>
  <div class="form-group">
    <label for="inputPassword">Vul hier uw wachtwoord in:</label>
    <input name="password" type="password" class="form-control" id="inputPassword" aria-describedby="passwordHelp">
    <small id="passwordHelp" class="form-text text-muted">Pas op voor meekijkers tijdens het invoeren</small>
  </div>

  <button type="submit" class="btn btn-info">Log in</button>
</form>