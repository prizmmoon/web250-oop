<?php require_once('../../private/initialize.php');
$session = new Session;
if ($session->is_logged_in()) { ?>

  <?php

  $users = User::find_all();

  ?>
  <?php $page_title = 'Users'; ?>
  <?php include(SHARED_PATH . '/public_header.php'); ?>

  <div id="content">
    <div class="users listing">
      <h1>Users</h1>

      <div class="actions">
        <a class="action" href="<?php echo url_for('/users/new.php'); ?>">Add User</a>
      </div>

      <table class="list">
        <tr>
          <th>ID</th>
          <th>First name</th>
          <th>Last name</th>
          <th>Email</th>
          <th>Username</th>
          <th>&nbsp;</th>
          <th>&nbsp;</th>
          <th>&nbsp;</th>
        </tr>

        <?php foreach ($users as $user) { ?>
          <tr>
            <td><?php echo h($user->id); ?></td>
            <td><?php echo h($user->first_name); ?></td>
            <td><?php echo h($user->last_name); ?></td>
            <td><?php echo h($user->email); ?></td>
            <td><?php echo h($user->username); ?></td>
            <td><a class="action" href="<?php echo url_for('/users/show.php?id=' . h(u($user->id))); ?>">View</a></td>
            <td><a class="action" href="<?php echo url_for('/users/edit.php?id=' . h(u($user->id))); ?>">Edit</a></td>
            <td><a class="action" href="<?php echo url_for('/users/delete.php?id=' . h(u($user->id))); ?>">Delete</a></td>
          </tr>
        <?php } ?>
      </table>

    </div>

  </div>

<?php include(SHARED_PATH . '/public_footer.php');
} else {
  echo "You must be logged in to view this page.";
}
?>