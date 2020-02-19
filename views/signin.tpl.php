<!DOCTYPE html>
<html lang='ja'>
<?php include('header.inc.php'); ?>

<body>
  <?php include('nav.php'); ?>
  <div class="container">
    <form action='signin_check.php' method='post'>
    <input type="hidden" name="csrf_token" value="<?=$csrf_token?>">
      <label for='name'>Name</label><br>
      <input type='text' name='name'>
      <p></p>
      <label for='email'>Email</label><br>
      <input type='text' name='email'>
      <p></p>
      <label for='password'>Password</label><br>
      <input text='password' name='password'>
      <p></p>
      <button type='submit'>ログイン</button>
    </form>
    <p><a href="signup.php">Create an account</a></p>
    <p><a href="#">Forgot password?</a></p>
    <p><a href='index.php'>一覧に戻る</a></p>
  </div>

  <?php include('footer.inc.php'); ?>
</body>

</html>