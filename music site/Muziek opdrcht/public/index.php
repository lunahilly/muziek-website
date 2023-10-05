<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Music Library</title>
</head>
<body>
    <header>
        <nav>
            <img src="" alt="logo">
            <ul>
                <li>Home</li>
                <li>Library</li>
                <li>Filter</li>
            </ul>
        </nav>
    </header>
    <article class="Library">

    </article>
    
</body>
</html>



#docent code#
<?php
require_once("/source/views/data.php")
?>

<?php
    foreach ($library as $single ){
        echo $single['title'] . '<br>';
        include('/source/views/card.php');
    }

    for( $i=0; $i<10; $i++ ){
        include('/source/views/card.php');
    }
?>
