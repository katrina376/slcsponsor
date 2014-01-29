<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
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