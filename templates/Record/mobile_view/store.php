<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
<script src="https://jquery-ui-map.googlecode.com/svn-history/r306/trunk/ui/min/jquery.ui.map.full.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
  var address = $('#address').text();
  geocoder = new google.maps.Geocoder();
  geocoder.geocode({'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      var location = new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng());
      $('#map_canvas').gmap({
        'center': location,
        'zoom': 16,
        'disableDefaultUI': true,
        'callback': function() {
          var self = this;
          self.addMarker({'position': this.get('map').getCenter() });
        }
      });
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
});
</script>
</head>
 

<!-- PROBLEM: How do I get data from the database? -->
<?php
  $pages = array('info', 'record', 'comment');
  $storeID = $_GET['id'];
  // get from database
  $title = 國立臺灣大學;
  $address = 台北市大安區羅斯福路四段一號;
  $phone = '3366-3366';
  $districtID = 1;
  $records = array('102-1' => '100')
?>
<body onload="initialize()">
 
<?php
    $count = 0;
    include('_headerStore.php');
?><!--info-->
<h3><?= $title ?></h3>
<div id="map_canvas" style="height:250px"></div>
<p>地址：<span id="address"><?= $address ?></span></p>
<p>電話：<?= $phone ?></p>
<?php include('_footer.php') ?>

<?php
    $count = 1;
    include('_headerStore.php');
?><!--record-->
<h3><?= $title ?></h3>
<h4>歷年贊助記錄</h4>
<ul data-role="listview">
<?php foreach($records as $year => $record) { ?>
  <li><?= $year.'：'.$record.'元' ?></li>
<?php } ?>
</ul>
<?php include('_footer.php') ?>

<?php
    $count = 2;
    include('_headerStore.php');
?><!--comment-->

<h3><?= $title ?></h3>
<h4>留言與評論</h4>
<div data-role="collapsible" data-expanded-icon="comment" data-collapsed-icon="comment" data-iconpos="right">
  <h4>我要留言</h4>
  <form>
    <label for="search">Name</label>
    <input name="name" id="name" value="" type="text">
    <label for="search">Comment</label>
    <textarea name="comment" id="comment" rows="3"></textarea>
    <center><button type="submit" id="submit" class="ui-btn ui-corner-all ui-btn-inline">留言</button></center>
  </form>
</div>
<ul data-role="listview" data-inset="true" data-divider-theme="a">
    <li data-role="list-divider">katrina376, 2014-01-29</li>
    <li>台大的環境鬱鬱蔥蔥台大的氣象勃勃蓬蓬</li>
</ul>
<ul data-role="listview" data-inset="true" data-divider-theme="a">
    <li data-role="list-divider">katrina376, 2014-01-29</li>
    <li>台大的環境鬱鬱蔥蔥台大的氣象勃勃蓬蓬</li>
</ul>
<ul data-role="listview" data-inset="true" data-divider-theme="a">
    <li data-role="list-divider">katrina376, 2014-01-29</li>
    <li>台大的環境鬱鬱蔥蔥台大的氣象勃勃蓬蓬</li>
</ul>
<?php include('_footer.php') ?>

 
</body>
</html>