<!DOCTYPE html>
<html>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Category</th>
    </tr>
  </thead>
<?php
    foreach($array as $key => $value){ ?>
       <tbody>
    <tr>
      <th scope="row"><?= $value['name'] ?></th>
      <td><?= $value['price'] ?></td>
      <td><?= $value['quantity'] ?></td>
      <td><?= $value['category'] ?></td>
    </tr>
  </tbody>
<?php } ?>
</table>
</html>