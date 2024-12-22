<?php

require_once('../private/initialize.php');

if (is_post_request()) {

  $args = $_POST['user'];
  $user = new User($args);
  $user->user_level = 'm';
  $user->set_hashed_password();
  $result = $user->save();

  if ($result === true) {
    $new_id = $user->id;
    $session->message("You've signed up successfully.");
    $session->login($user);
    redirect_to(url_for('/index.php'));
  } else {
    // Show errors
    var_dump($user);
    var_dump($result);
  }
} else {
  // Display the form
  $user = new User;
}

$page_title = 'Sign Up for Membership';
include(SHARED_PATH . '/public_header.php');

?>

<a class="back-link" href="<?php echo url_for('index.php'); ?>">&laquo; Back to Menu</a>

<h1>Create User</h1>

<?php echo display_errors($user->errors); ?>

<form action="<?php echo url_for('signup.php'); ?>" method="post">
  <?php include('users/form_fields.php'); ?>
  <input type="submit" value="Sign Up">
</form>