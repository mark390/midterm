<?php include('view/header.php'); ?>

<section id="list" class="list">
    <header class="list row list header">
    <h1>Zippy Used Autos</h1>
    <form action="." method="post" id="list" class="list_header_select">
    <input type="hidden" name="action" value="list_vehicles_select">
    <select name="makeid" class="form-select" aria-label="Select Make" required>
    <option selected>View All Makes</option>
    <option value="1">Chevy</option>
    <option value="2">Ford</option>
    <option value="3">Cadillac</option>
    <option value="4">Nissan</option>
    <option value="5">Hyundai</option>
    <option value="6">Dodge</option>
    <option value="7">Infiniti</option>
    <option value="8">Buick</option>
    </select>
    <select name="typeid" class="form-select" aria-label="Select Type" required>
    <option selected>View All Types</option>
    <option value="1">SUV</option>
    <option value="2">Truck</option>
    <option value="3">Sedan</option>
    <option value="4">Coupe</option>
    </select>
    <select name="classid" class="form-select" aria-label="Select Class" required>
    <option selected>View All Class</option>
    <option value="1">Utility</option>
    <option value="2">Economy</option>
    <option value="3">Luxury</option>
    <option value="4">Sports</option>
    </select>
    <label>Sort by</label>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="sorter" value="Year" required>
  <label class="form-check-label" for="flexRadioDisabled">
    Year
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="sorter" value="Price">
    Price
  </label>
</div>
    <button class="add-button bold">Submit</button>
    </form>
    </header>
    <table id="publictable">
      <tr>
        <th>Year</th>
        <th>Make</th>
        <th>Model</th>
        <th>Type</th>
        <th>Class</th>
        <th>Price</th>
      </tr>
  
      <?php foreach ($vehicles as $v) : ?>
      <tr>
        <td><?php echo $v['year']; ?></td>
        <td><?php echo $v['make']; ?></td>
        <td><?php echo $v['model']; ?></td>
        <td><?php echo $v['type']; ?></td>
        <td><?php echo $v['class']; ?></td>
        <td><?php echo $v['price']; ?></td>
      </tr>
      <?php endforeach; ?>  
    </table>
<?php include('view/footer.php'); ?>