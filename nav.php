
<nav class="navbar navbar-dark bg-dark">
  <a href="index.php" class="navbar-brand">PHP-None Framework</a>
  <? if ($_SESSION['username']){ ?>
  <a href ="signout.php"><?= $_SESSION['username'] ?>/ログアウト</a>
  <? }else{ ?>
  <a href ="signin.php">ログイン</a>
  <? } ?>
</nav>