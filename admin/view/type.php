<?php include('header.php'); ?>

<section id="list" class="list">
    <header class="list row list header">
    <h1>Zippy Admin</h1>
    <form action="." method="post" id="list" class="list_header_select">
    <input type="hidden" name="action" value="add_type">
    <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Type</span>
  <input type="text" name="type" class="form-control" aria-label="Type" aria-describedby="inputGroup-sizing-default">
</div>
<p>Note: You must add the new type to html selector to use when adding a new vehicle!</p><br>
<button class="add-button bold">Add Type</button>
    </form>
    </header>
    <table id="maketable">
      <tr>
        <th>Type</th>
      </tr>
  
      <?php foreach ($types as $t) : ?>
      <tr>
        <td><?php echo $t['Type']; ?></td>
        <td><form action="./index.php" method="post">
        <input type="hidden" name="action"
        value="delete_type">
        <input type="hidden" name="delete_type" value=<?= $t['ID'] ?>>
        <button class="remove-button" id="delete">Remove</button>
        </form></td>
      </tr>
      <?php endforeach; ?>  
    </table>
    <a href="./index.php?action=list_vehicles">Back to Admin Page</a><br>
<?php include('footer.php'); ?>