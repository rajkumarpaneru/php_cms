<?php require_once('../private/initialize.php'); ?>

<?php

  $preview = false;
  if(isset($_GET['preview'])){
    $preview = $_GET['preview'] == 'true' && is_logged_in() ? true : false;
  }

  $visible = !$preview;
  
  if(isset($_GET['id'])){
    $page_id = $_GET['id'];
    $page = find_page_by_id($page_id, ['visible' => true]);
    if(!$page){
      redirect_to(url_for('/index.php'));
    }
    $subject_id = $page['subject_id'];
    $subject = find_subject_by_id($subject_id, ['visible' => true]);
    if(!$subject){
      redirect_to(url_for('/index.php'));
    }
  } elseif(isset($_GET['subject_id'])) {
    $subject_id = $_GET['subject_id'];
    $subject = find_subject_by_id($subject_id, ['visible' => true]);
    if(!$subject){
      redirect_to(url_for('/index.php'));
    }
    $page_set = find_pages_by_subject_id($subject_id, ['visible' => true]);
    $page = mysqli_fetch_assoc($page_set);
    mysqli_free_result($page_set);
    if(!$page){
      redirect_to(url_for('/index.php'));
    }
    $page_id = $page['id'];
  } else {

  }
?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <?php include(SHARED_PATH. '/public_navigation.php');?>
  
  <div id="page">
    <?php
      if(isset($page)){
        $allowed_tags = '<div><img><h1><h2><p><br><strong><em><ul><li>';
        echo strip_tags($page['content'], $allowed_tags);
      } else {
        include(SHARED_PATH. '/static_homepage.php');
      }
      
    ?>
  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>