<?php if (isset($data['users'])) {?>
  <table class="table">
    <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Name Count</th>
    </tr>
    </thead>
    <tbody>
  <?php foreach ($data['users'] as $user) {?>
    <tr>
      <td><?= $user['first_name']?></td>
      <td><?= $user['count']?></td>
    </tr>
  <?php } ?>
    </tbody>
  </table>
<?php } ?>