<?php

require_once('../../private/initialize.php');

$session = new Session;
if ($session->is_logged_in()) {

  if (!isset($_GET['id'])) {
    redirect_to(url_for('/users/index.php'));
  }
  $id = $_GET['id'];
  $user = User::find_by_id($id);
  if ($user == false) {
    redirect_to(url_for('/users/index.php'));
  }

  if (is_post_request()) {

    // Delete admin
    $result = $user->delete();
    $session->message('The user was deleted successfully.');
    redirect_to(url_for('/users/index.php'));
  } else {
    // Display form
  }

?>

  <?php $page_title = 'Delete User'; ?>
  <?php include(SHARED_PATH . '/public_header.php'); ?>

  <div id="content">

    <a class="back-link" href="<?php echo url_for('/users/index.php'); ?>">&laquo; Back to List</a>

    <div class="user delete">
      <h1>Delete User</h1>
      <p>Are you sure you want to delete this user?</p>
      <p class="item"><?php echo h($user->full_name()); ?></p>

      <form action="<?php echo url_for('/users/delete.php?id=' . h(u($id))); ?>" method="post">
        <div id="operations">
          <input type="submit" name="commit" value="Delete User" />
        </div>
      </form>
    </div>

  </div>

<?php include(SHARED_PATH . '/public_footer.php');
} else {
  echo "You must be logged in to view this page.";
}
?>