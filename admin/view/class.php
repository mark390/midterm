<?php include('header.php'); ?>

<section id="list" class="list">
    <header class="list row list header">
    <h1>Zippy Admin</h1>
    <form action="." method="post" id="list" class="list_header_select">
    <input type="hidden" name="action" value="add_class">
    <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Type</span>
  <input type="text" name="class" class="form-control" aria-label="Class" aria-describedby="inputGroup-sizing-default">
</div>
<p>Note: You must add the new class to html selector to use when adding a new vehicle!</p><br>
<button class="add-button bold">Add Class</button>
    </form>
    </header>
    <table id="maketable">
      <tr>
        <th>Class</th>
      </tr>
  
      <?php foreach ($classes as $c) : ?>
      <tr>
        <td><?php echo $c['Class']; ?></td>
        <td><form action="./index.php" method="post">
        <input type="hidden" name="action"
        value="delete_class">
        <input type="hidden" name="delete_class" value=<?= $c['ID'] ?>>
        <button class="remove-button">Remove</button>
        </form></td>
      </tr>
      <?php endforeach; ?>  
    </table>
    <a href="./index.php?action=list_vehicles">Back to Admin Page</a><br>
<?php include('footer.php'); ?>