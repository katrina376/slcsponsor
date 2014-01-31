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

<form method="post" action="">
  <label for="search">關鍵字</label>
  <input name="keyword" id="search" value="" placeholder="請輸入關鍵字..." type="search">
  <div class="ui-field-contain">
    <p>搜尋條件</p>
    <select multiple="multiple" data-native-menu="false" name="district" id="district">
      <option value="">地區</option>
<?php foreach ($districts as $no => $district) { ?>
      <option value="<?= $no + 1 ?>"><?= $district ?></option>
<? } ?>
    </select>
    <select multiple="multiple" data-native-menu="false" name="record" id="record">
      <option value="">最新年度拉贊金額</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
  </div>
  <center><button type="submit" id="submit" class="ui-btn ui-corner-all ui-btn-inline">開始搜尋</button></center>
</form>
<?php include('_footer.php') ?>
 
</body>
</html>