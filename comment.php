<?php
$name = filter_input(INPUT_POST, 'name');
$mail = filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL);
$comment = filter_input(INPUT_POST, 'comment');
if ($name == null || $mail == null || $mail == false || $comment == null) { 
  $error = "Invalid comment.  Check all fields and try again.";
  include('error.php');
} else {
  require_once('database.php');
  $query = 'INSERT INTO comments(name, mail, user_comment) VALUES(:name, :mail, :user_comment)';
  $statement = $db->prepare($query);
  $statement->bindValue(':name', $name);
  $statement->bindValue(':mail', $mail);
  $statement->bindValue(':user_comment', $comment);
  $statement->execute();
  $statement->closeCursor();
  /* Since we don't output any text, we can simply redirect back
  to the About page without any problems. */
  header('Location: about.php');
}
?>
