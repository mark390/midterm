<?php include('header.php'); ?>
<form action="../index.php" method="POST">
<input type="hidden" name="action" value="register">
<section id="list" class="list">
    <header class="list row list header">
    <h1>Zippy Admin</h1>
    <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Username (Min 4 characters)</span>
  <input type="text" name="username" class="form-control" aria-label="Model" aria-describedby="inputGroup-sizing-default">
</div><br>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
  <input type="text" name="password" class="form-control" aria-label="Year" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Confirm Password</span>
  <input type="text" name="confirm_password" class="form-control" aria-label="Price" aria-describedby="inputGroup-sizing-default">
</div>
<button class="add-button bold" id="register">Register</button>
    </form>

<?php include('footer.php'); ?>