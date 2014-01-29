</div>
<div data-role="footer" data-position="fixed">
  <div data-role="navbar">
    <ul>
      <li><a data-icon="star" href="javascript:window.external.AddFavorite(window.document.location,window.document.title)">Fav</a></li>
      <li><a data-icon="search" href="search.php" <?php if(end(explode("/",$_SERVER['PHP_SELF'])) == 'search.php'){echo 'class="ui-state-persist"';} ?>>Search</a></li>
    </ul>
  </div>
</div>

</div>