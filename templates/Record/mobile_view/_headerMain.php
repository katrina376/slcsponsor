<div class="ui-btn-left" data-type="horizontal">
  <a href="index.php" data-role="button" data-icon="home" data-iconpos="notext">Home</a>
<?php if (end(explode("/",$_SERVER['PHP_SELF'])) == 'store.php'){ ?>
  <a href="district.php?id=<?= $districtID ?>" data-role="button" data-icon="bullets" data-iconpos="notext">Back to list</a>
<?php } elseif (end(explode("/",$_SERVER['PHP_SELF'])) == 'district.php') { ?>
  <a href="index.php" data-role="button" data-icon="bars" data-iconpos="notext">Back to list</a>
<?php } ?>
</div>
<!--add logo img here-->
<h1><?= $title ?></h1>