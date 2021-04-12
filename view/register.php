<?php include('view/header.php'); ?>

<section id="list" class="list">
    <header class="list row list header">
    <form action="." method="POST" id="username" class="list_header_select">
    <input type="hidden" name="action" value="register">
    <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Please enter your name!</span>
  <input type="text" name="username" class="form-control" aria-label="username" aria-describedby="inputGroup-sizing-default">
</div><br>
<button class="add-button bold" id="register">Register</button>
    </form>

<?php include('view/footer.php'); ?>
