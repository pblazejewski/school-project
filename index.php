<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM blocks";
$results = $conn->query($sql);

echo 
"<!DOCTYPE html>
<html lang='pl'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>my-project</title>
    <link rel='stylesheet' type='text/css' href='styles.css?<?php echo time(); ?>' />
</head>
<body>
    <header>
        <div class='header__div'>
            <h1 class='header__title'>Bloki<span class='header-title__span'>MC</span></h1>
            <p class='header__paragraph'>Wyszukaj swoje ulubione bloki, nasza strona posiada informacje dotyczace <span class='paragraph__span'>ID</span> danego bloku</p>
            <a class='scroll-down__btn' href='#main'>Scrolluj</a>
        </div>
    </header>
    <article>
        <p class='authors__names'>Tworcy projektu: <span class='article-authors__span'>Patryk Blazejewski, Piotr Fudala, Maciej Przybyla</span></p>
    </article>
    <main id='main'>";
    foreach($results as $result) {
        echo "<div class='main-block__container'>
            <img class='block__img' src='";
            echo $result['image_path']; 
            echo "'alt='Dirt block'>
            <p class='block__name'>Nazwa: <span class='paragraph__span'>";
            echo $result['name']; 
            echo "</span></p>
            <p class='block__id'>ID: <span class='paragraph__span'>";
            echo $result['minecraft_id'];
            echo "</span></p><p class='block-numerical__id'>Numeryczne ID: <span class='paragraph__span'>";
            echo $result['id'];
            echo "</span></p></div>";
    }
echo
    "</main>
</body>
</html>";
?>