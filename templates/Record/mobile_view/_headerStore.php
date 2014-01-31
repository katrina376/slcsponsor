<div data-role="header" data-position="fixed">
<?php include('_headerMain.php') ?>
  <div data-role="navbar">
    <ul>
      <li><a data-icon="info" href="#info" <?php if($pages[$count] == 'info'){echo 'class="ui-state-persist"';} ?>>Info</a></li>
      <li><a data-icon="bars" href="#record" <?php if($pages[$count] == 'record'){echo 'class="ui-state-persist"';} ?>>Past Records</a></li>
      <li><a data-icon="comment" href="#comment" <?php if($pages[$count] == 'comment'){echo 'class="ui-state-persist"';} ?>>Comments</a></li>
    </ul>
  </div><!-- navbar -->
</div><!-- header -->

<div data-role="content">