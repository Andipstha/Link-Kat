<?php
require "./db.php";

$sql = "SELECT * FROM `urls`";
$urls = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Link Kat</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <h1>Link/Kat</h1>
    </header>

    <main>
        <section class="form">
            <form action="/add/index.php" method="post">
                <input type="text" name="long_url" id="long_url" placeholder="e.g. https://example.com" />
                <input type="submit" value="SHORTEN" />
            </form>
        </section>

        <section class="urls">
            <?php foreach ($urls as $url): ?>
                <div class="url">
                    <div class="id">
                        <?= $url['uid'] ?>
                    </div>
                    <div class="short_url">
                        <a href="http://localhost:8000/r?c=<?= $url['uid']; ?>" target="_blank">http://localhost:8000/r?c=
                            <?= $url['uid']; ?>
                        </a>
                    </div>
                    <div class="long_url">
                        <a href="<?= $url['longurl']; ?>" target="_blank">
                            <?= $url['longurl']; ?>
                        </a>
                    </div>
                    <div class="delete_url">
                        <form action="./delete/index.php" method="get">
                            <input type="hidden" name="uid" value="<?= $url['uid']; ?>">
                            <button type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                    <path
                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>