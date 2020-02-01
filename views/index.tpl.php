<body>

<h1><?= $message ?></h1>

<table>
    <tr><th>Id</th><th>タイトル</th></tr>
    <?php foreach ($articles as $article) { ?>
        <tr>
            <td><?= $article->id ?></td>
            <td><a href='show.php?id=<?=$article->id?>'>
                    <?= $article->title ?></td>
                </a>
        </tr>
    <?php } ?>
</table>
<p><a href='new.php'>新規メモ</a></p>

<?php include('footer.inc.php'); ?>
</body>
</html>
