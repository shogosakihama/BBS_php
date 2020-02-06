<body>
  <?php include('nav.php'); ?>
  <div class="container">
    <h2><?= $_SESSION['username'] ?></h2>
    <h1><?= $message ?></h1>
    <?php include('header.inc.php'); ?>
    <div class="table">
      <table class="table">
        <tr>
          <th class="font-size">Id</th>
          <th class="font-size">タイトル</th>
        </tr>
        <?php foreach ($articles as $article) { ?>
          <tr>
            <td class="font-size"><?= $article->id ?></td>
            <td class="font-size"><a href='show.php?id=<?= $article->id ?>'>
                <?= $article->title ?></td>
            </a>
          </tr>
        <?php } ?>
      </table>
    </div>
    <p><a href='new.php'>新規メモ</a></p>
  </div>

  <?php include('footer.inc.php'); ?>
</body>

</html>