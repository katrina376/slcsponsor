<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8" />
<?php  include('_outer.php') ?>
</head>

<body>

<?php include('_header.php') ?>

<div data-role="controlgroup">
<?php foreach ($districts as $no => $district) { ?>
  <a class="ui-btn ui-icon-carat-r ui-btn-icon-right" href="district.php?id=<?= $no + 1 ?>"><?= $district ?></a>
<? } ?>
</div>

<?php include('_footer.php') ?>
 
</body>
</html>