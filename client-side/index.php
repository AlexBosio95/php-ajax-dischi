<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/2048px-Spotify_logo_without_text.svg.png" alt="" srcset="">

    </header>

    <main>
        <div class="container">
            <div class="box-container">
                <?php 
                include __DIR__ . '/../database.php';
                foreach ($database as $key => $value) {
                    echo "<div class='box'>";
                    echo '<img src="' . $value['poster'] . '"' . ' alt="" srcset="">';
                    echo "<h1>" . $value['title'] . "</h1>";
                    echo "<h4>" . $value['author'] . "</h4>";
                    echo "<h4>" . $value['year'] . "</h4>";
                    echo '</div>';
                }
                ?>
            </div>
        </div>
</main>


    
</body>
</html>