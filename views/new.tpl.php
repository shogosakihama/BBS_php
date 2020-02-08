
<!DOCTYPE html>
<html lang='ja'>
    <?php include('header.inc.php'); ?>
    <body>
        <?php include( 'nav.php'); ?> 
        <div class="container">
        <h1><?= $message ?></h1>

        <form action='create.php' method='post'>
        <input type="hidden" name="csrf_token" value="<?=$csrf_token?>">
        <input type="hidden" name="user_name" value="<?= $_SESSION['username'] ?>">
            <label for='title'>タイトル</label><br>
            <input type='text' name='title' >
            <p></p>
            <label for='content'>本文</label><br>
            <textarea name='content' cols='40' rows='10'></textarea>
            <p></p>
            <button type='submit'>作成する</button>
        </form>

        <p><a href='index.php'>一覧に戻る</a></p>
         </div>
        <?php include('footer.inc.php'); ?>
    </body>
</html>