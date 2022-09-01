<?php include 'includes/data.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="container">
            <section class="discs">
                <?php foreach ($discs as $disc) :?>
                    <div class="disc-container">
                        <ul>
                            <li><img class="poster" src="<?= $disc['poster'] ?>" alt="poster"></li>
                            <li><h2><?= $disc['title'] ?></h2></li>
                            <li><p><?= $disc['author'] ?></p></li>
                            <li><p><?= $disc['year'] ?></p></li>
                            <li><p><?= $disc['genre'] ?></p></li>
                        </ul>
                    </div>
                <?php endforeach; ?>
            </section>
        </div>
    </main>
</body>
</html>



