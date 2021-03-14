<?php include('header.php'); ?>

<section id="list" class="list">
    <header class="list row list header">
    <h1>Zippy Admin</h1>
    <form action="." method="post" id="list" class="list_header_select">
    <input type="hidden" name="action" value="add_make">
    <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Make</span>
  <input type="text" name="make" class="form-control" aria-label="Make" aria-describedby="inputGroup-sizing-default">
</div>
<p>Note: You must add the new make to html selector to use when adding a new vehicle!</p><br>
<button class="add-button bold">Add Make</button>
    </form>
    </header>
    <table id="maketable">
      <tr>
        <th>Make</th>
      </tr>
  
      <?php foreach ($makes as $m) : ?>
      <tr>
        <td><?php echo $m['Make']; ?></td>
        <td><form action="./index.php" method="post">
        <input type="hidden" name="action"
        value="delete_make">
        <input type="hidden" name="delete_make" value=<?= $m['ID'] ?>>
        <button class="remove-button">Remove</button>
        </form></td>
      </tr>
      <?php endforeach; ?>  
    </table>
    
    <a href="./index.php?action=list_vehicles">Back to Admin Page</a><br>
<?php include('footer.php'); ?>