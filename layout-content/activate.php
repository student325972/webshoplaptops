<body>
    <div class="container" id="box"><font color="#FFFFFF">

<?php 
    if (!(isset($_GET["content"]) &&isset($_GET["id"]) && isset($_GET["pwh"]))){
        header("Location: ./index.php?content=message&alert=hacker-alert");
    }
?>

<div class="container-fluid">
    <p><h1>Registreer uw account</h1></p>

<form action="./index.php?content=activate_script" method="post">
  <div class="form-group">
    <label for="inputPassword">Kies een nieuwe wachtwoord:</label>
    <input name="password" type="password" class="form-control" id="inputpassword" aria-describedby="passwordHelp">
    <small id="passwordHelp" class="form-text text-muted">Deel nooit uw wachtwoord</small>
  </div>
  <div class="form-group">
    <label for="inputPassword">Herhaal het wachtwoord:</label>
    <input name="passwordCheck" type="password" class="form-control" id="inputpasswordCheck" aria-describedby="passwordHelpCheck">
    <small id="passwordHelpCheck" class="form-text text-muted">Ter controle voert u nogmaals uw wachtwoord in</small>
  </div>
  <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
  <input type="hidden" name="pwh" value="<?php echo $_GET["pwh"] ?>">

  <button type="submit" class="btn btn-info">Activeer</button>
</form>

<p></div></p>
</font></div>
