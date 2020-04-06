<?php
if (!isset($id)) {
	$id = null;
	$author = null;
	$title = null;
	$message = null;
	$btnName = "Create";
	$page_title = "Add new post";
}
else {
	$btnName = "Update";
	$page_title = "Edit post";
}

?>


<h3><?php echo $page_title?></h3>
<form action="<?php echo URL::site("Posts/Register")?>" method="POST">
  <input type="hidden" name="id" value="<?php echo $id?>">
  <div class="form-group">
    <label for="author">Author</label>
    <input type="text" class="form-control" id="author" name="author" placeholder="Enter your name" value="<?php echo $author?>">
  </div>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Enter the title" value="<?php echo $title?>">
  </div>
  <div class="form-group">
    <label for="message">Message</label>
    <textarea rows="" cols="" name="message" id="message"><?php echo $message?></textarea>
  </div>
  <button type="submit" class="btn btn-primary"><?php echo $btnName?></button>
</form>