<!DOCTYPE html>
<html lang='ja'>
<? if ($_SESSION['username']){ ?>

    <?php include('header.inc.php'); ?>
    <body>
        <?php include('nav.php'); ?> 
        <div class="container">
        <h1><?= $message ?></h1>
        <form action='update.php' method='post'>
    		<input type='hidden' name='id' value="<?= $article['id'] ?>">
            <label for='title'>タイトル</label><br>
            <input type="text" name="title" value="<?= $article['title'] ?>">
            <p></p>
            <label for='content'>本文</label><br>
            <textarea name='content' cols='40' rows='10'><?= $article['content'] ?></textarea>
            <p></p>
            <button type='submit'>保存する</button>
        </form>

        <p><a href='index.php'>一覧に戻る</a></p>
        </div>

        <?php include('footer.inc.php'); ?>
        
        <? } ?>


    </body>
</html>