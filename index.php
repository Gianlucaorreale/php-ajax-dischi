<?php include 'includes/data.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="container">
            <section class="discs">
                <?php foreach ($discs as $disc) :?>
                    <ul>
                        <li><?= $disc['title'] ?></li>
                        <li><?= $disc['author'] ?></li>
                        <li><?= $disc['year'] ?></li>
                        <li><img src="<?= $disc['poster'] ?>" alt="poster"></li>
                        <li><?= $disc['genre'] ?></li>
                    </ul>
                <?php endforeach; ?>
            </section>
        </div>
    </main>
</body>
</html>



