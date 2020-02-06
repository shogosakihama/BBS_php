<!DOCTYPE html>
<html lang='ja'>
<?php include('header.inc.php'); ?>

<body>
    <?php include('nav.php'); ?>
    <form action='newAccount.php' method='post'>
        <input type="hidden" name='user_pass' value='user_pass'>
        <label for='name'>Name</label><br>
        <input type='text' name='name'>
        <p></p>
        <label for='email'>Email</label><br>
        <input type='text' name='email'>
        <p></p>
        <label for='password'>Password</label><br>
        <input text='password' name='password'>
        <p></p>
        <button type='submit'>作成する</button>
    </form>

    <p><a href='index.php'>一覧に戻る</a></p>

    <?php include('footer.inc.php'); ?>
</body>

</html>