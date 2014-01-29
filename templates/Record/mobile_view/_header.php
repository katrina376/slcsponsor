<?php
	$districts = array('公館', '台電大樓', '新生南路', '後門、118巷', '科技大樓', '其他');
	$page = 'home';
	if (end(explode("/",$_SERVER['PHP_SELF'])) == 'district.php')||(end(explode("/",$_SERVER['PHP_SELF'])) == 'district2.php') {       // for disrict
		if (!isset($_GET['id'])) {
			header('Location: index.php');
		}else{
			$districtID = $_GET['id'];            // for getting data later
			$title = $districts[$districtID-1];
		}
	} elseif (end(explode("/",$_SERVER['PHP_SELF'])) == 'search.php') {   // for search
		$title = '搜尋';
	} else {                                      // for index
		$title = '首頁';
	}
?>
<div data-role="page" id="home" data-title="尋云拉贊網：<?= $title ?>">
<div data-role="header" data-position="fixed">
<?php include('_headerMain.php') ?>
</div><!-- header -->

<div data-role="content">