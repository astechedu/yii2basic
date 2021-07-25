
    <table class="table table-solid">
      <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Email</th>
      </tr>
      <?php foreach($users as $user) { ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['email'] ?></td>                          
        <tr>
      <?php } ?>
    </table>