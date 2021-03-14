<?php include('header.php'); ?>

<section id="list" class="list">
    <header class="list row list header">
    <h1>Zippy Admin</h1>
    <form action="../index.php" method="post" id="list" class="list_header_select">
    <input type="hidden" name="action" value="add_vehicle">
    <select name="makeid" class="form-select" aria-label="Select Make" required>
    <option selected>Select Make</option>
    <option value="1">Chevy</option>
    <option value="2">Ford</option>
    <option value="3">Cadillac</option>
    <option value="4">Nissan</option>
    <option value="5">Hyundai</option>
    <option value="6">Dodge</option>
    <option value="7">Infiniti</option>
    <option value="8">Buick</option>
    </select><br>
    <select name="typeid" class="form-select" aria-label="Select Type" required>
    <option selected>Select Type</option>
    <option value="1">SUV</option>
    <option value="2">Truck</option>
    <option value="3">Sedan</option>
    <option value="4">Coupe</option>
    </select><br>
    <select name="classid" class="form-select" aria-label="Select Class" required>
    <option selected>Select Class</option>
    <option value="1">Utility</option>
    <option value="2">Economy</option>
    <option value="3">Luxury</option>
    <option value="4">Sports</option>
    </select><br>
    <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Model</span>
  <input type="text" name="model" class="form-control" aria-label="Model" aria-describedby="inputGroup-sizing-default">
</div><br>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Year</span>
  <input type="text" name="year" class="form-control" aria-label="Year" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Price</span>
  <input type="text" name="price" class="form-control" aria-label="Price" aria-describedby="inputGroup-sizing-default">
</div>
<button class="add-button bold">Add Vehicle</button>
    </form>
<?php include('footer.php'); ?>