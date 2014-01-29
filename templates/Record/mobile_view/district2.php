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
 

<!-- PROBLEM: How do I get data from the database? -->
<body>
 
<?php include('_header.php') ?>

<ul data-role="listview"><!--print store, img, store id, and address-->
  <li>
    <a href="store.php?id=1">
      <!--img-->
      <h3>store1</h3>
      <p>description</p>
    </a>
  </li>
  <li>
    <a href="store.php?id=2">
      <!--img-->
      <h3>store2</h3>
      <p>description</p>
    </a>
  </li>
</ul>

<?php include('_footer.php') ?>
 
</body>
</html>