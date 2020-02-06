<!DOCTYPE html>
<html lang='ja'>
    <?php include('header.inc.php'); ?>
    <body>
        <?php include( 'nav.php'); ?> 
        <div class="container">

        <h1><?= $message ?></h1>

        <p>タイトル:<?= $my_html_title ?></p>
        <div><?= $my_html_content ?></div>

        <p><a href='index.php'>一覧に戻る</a> |  <a href="edit.php?id=<?= $article->id ?>">編集</a> | <a href='destroy.php?id=<?= $article->id ?>'>削除</a></p>
    </div>
        <?php include('footer.inc.php'); ?>
    </body>
</html>

