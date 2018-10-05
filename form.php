<form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Jméno:</label>
    <input type="email" name="firstName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Heslo</label>
    <input type="password" name="secret" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" name="OptIn" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Souhlasím</label>
  </div>
  <button type="submit" class="btn btn-primary">Odeslat</button>
</form>

<?php
echo 'GET: ';
var_dump($_GET);
echo '<br>POST: ';
var_dump($_POST);
?>

