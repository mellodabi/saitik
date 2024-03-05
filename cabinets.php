<?php
$db = mysqli_connect('localhost', 'root', '', 'sp4');

// Проверка успешности подключения
if (!$db) {
    die('Ошибка подключения: ' . mysqli_connect_error());
}

$info = [];
$data = [];


?>

<!DOCTYPE html>
<html lang="RU">
    <head>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./stylecabinets.css">
        <title>Vest Heaven</title>
    </head>
    <body>
        <div class="content">

        <a href="./cabinets.php" class="logo"><h1 class="brand">СПК</h1></a>
        <div class="obsh">
            <div class="left">
                <div><b href="./cabinets.php" class="linkleft">Кабинеты</b></div>
                <div><a href="./other.php" class="linkleft">Остальные</a></div>

            </div>
            <div class="right">
                
                <div class="line1">

                    <div class="card">
                    <?php
                    $query = mysqli_query($db, "SELECT * FROM `cabinets` where id = 8");
                    if (!$query) {
                            print_r($db->error);
                        }
                        echo '<div class="container">';
                        while ($row = mysqli_fetch_assoc($query)) {
                                echo '<div class="column">';
                                echo '<p>' . $row['name'] . '</p>';
                                echo '<p>' . $row['height'] . '</p>';
                                echo '<p>' . $row['width'] . '</p>';
                                echo '<p>' . $row['length'] . '</p>';
                                echo '<p>' . $row['area'] . '</p>';
                                echo '</div>';
                        }
                        echo '</div>';
                    ?>
                    </div>                 
                
                    <div class="card">
                    <?php
                    $query = mysqli_query($db, "SELECT * FROM `cabinets` where id = 9");
                    if (!$query) {
                            print_r($db->error);
                        }
                        echo '<div class="container">';
                        while ($row = mysqli_fetch_assoc($query)) {
                                echo '<div class="column">';
                                echo '<p>' . $row['name'] . '</p>';
                                echo '<p>' . $row['height'] . '</p>';
                                echo '<p>' . $row['width'] . '</p>';
                                echo '<p>' . $row['length'] . '</p>';
                                echo '<p>' . $row['area'] . '</p>';
                                echo '</div>';
                        }
                        echo '</div>';
                    ?>
                    </div>     

                    <div class="card">
                    <?php
                    $query = mysqli_query($db, "SELECT * FROM `cabinets` where id = 10");
                    if (!$query) {
                            print_r($db->error);
                        }
                        echo '<div class="container">';
                        while ($row = mysqli_fetch_assoc($query)) {
                                echo '<div class="column">';
                                echo '<p>' . $row['name'] . '</p>';
                                echo '<p>' . $row['height'] . '</p>';
                                echo '<p>' . $row['width'] . '</p>';
                                echo '<p>' . $row['length'] . '</p>';
                                echo '<p>' . $row['area'] . '</p>';
                                echo '</div>';
                        }
                        echo '</div>';
                    ?>
                    </div>     

                </div>       

                <div class="line1">

                    <div class="card">
                    <?php
                    $query = mysqli_query($db, "SELECT * FROM `cabinets` where id = 12");
                    if (!$query) {
                            print_r($db->error);
                        }
                        echo '<div class="container">';
                        while ($row = mysqli_fetch_assoc($query)) {
                                echo '<div class="column">';
                                echo '<p>' . $row['name'] . '</p>';
                                echo '<p>' . $row['height'] . '</p>';
                                echo '<p>' . $row['width'] . '</p>';
                                echo '<p>' . $row['length'] . '</p>';
                                echo '<p>' . $row['area'] . '</p>';
                                echo '</div>';
                        }
                        echo '</div>';
                    ?>
                    </div>                 
                
                    <div class="card">
                    <?php
                    $query = mysqli_query($db, "SELECT * FROM `cabinets` where id = 13");
                    if (!$query) {
                            print_r($db->error);
                        }
                        echo '<div class="container">';
                        while ($row = mysqli_fetch_assoc($query)) {
                                echo '<div class="column">';
                                echo '<p>' . $row['name'] . '</p>';
                                echo '<p>' . $row['height'] . '</p>';
                                echo '<p>' . $row['width'] . '</p>';
                                echo '<p>' . $row['length'] . '</p>';
                                echo '<p>' . $row['area'] . '</p>';
                                echo '</div>';
                        }
                        echo '</div>';
                    ?>
                    </div>     

                    <div class="card">
                    <?php
                    $query = mysqli_query($db, "SELECT * FROM `cabinets` where id = 21");
                    if (!$query) {
                            print_r($db->error);
                        }
                        echo '<div class="container">';
                        while ($row = mysqli_fetch_assoc($query)) {
                                echo '<div class="column">';
                                echo '<p>' . $row['name'] . '</p>';
                                echo '<p>' . $row['height'] . '</p>';
                                echo '<p>' . $row['width'] . '</p>';
                                echo '<p>' . $row['length'] . '</p>';
                                echo '<p>' . $row['area'] . '</p>';
                                echo '</div>';
                        }
                        echo '</div>';
                    ?>
                    </div>     

                </div>
                                <div class="line1">

                    <div class="card">
                    <?php
                    $query = mysqli_query($db, "SELECT * FROM `cabinets` where id = 22");
                    if (!$query) {
                            print_r($db->error);
                        }
                        echo '<div class="container">';
                        while ($row = mysqli_fetch_assoc($query)) {
                                echo '<div class="column">';
                                echo '<p>' . $row['name'] . '</p>';
                                echo '<p>' . $row['height'] . '</p>';
                                echo '<p>' . $row['width'] . '</p>';
                                echo '<p>' . $row['length'] . '</p>';
                                echo '<p>' . $row['area'] . '</p>';
                                echo '</div>';
                        }
                        echo '</div>';
                    ?>
                    </div>                 
                
                    <div class="card">
                    <?php
                    $query = mysqli_query($db, "SELECT * FROM `cabinets` where id = 23");
                    if (!$query) {
                            print_r($db->error);
                        }
                        echo '<div class="container">';
                        while ($row = mysqli_fetch_assoc($query)) {
                                echo '<div class="column">';
                                echo '<p>' . $row['name'] . '</p>';
                                echo '<p>' . $row['height'] . '</p>';
                                echo '<p>' . $row['width'] . '</p>';
                                echo '<p>' . $row['length'] . '</p>';
                                echo '<p>' . $row['area'] . '</p>';
                                echo '</div>';
                        }
                        echo '</div>';
                    ?>
                    </div>     

                    <div class="card">
                    <?php
                    $query = mysqli_query($db, "SELECT * FROM `cabinets` where id = 24");
                    if (!$query) {
                            print_r($db->error);
                        }
                        echo '<div class="container">';
                        while ($row = mysqli_fetch_assoc($query)) {
                                echo '<div class="column">';
                                echo '<p>' . $row['name'] . '</p>';
                                echo '<p>' . $row['height'] . '</p>';
                                echo '<p>' . $row['width'] . '</p>';
                                echo '<p>' . $row['length'] . '</p>';
                                echo '<p>' . $row['area'] . '</p>';
                                echo '</div>';
                        }
                        echo '</div>';
                    ?>
                    </div>     

                </div>
                                <div class="line1">

                    <div class="card">
                    <?php
                    $query = mysqli_query($db, "SELECT * FROM `cabinets` where id = 25");
                    if (!$query) {
                            print_r($db->error);
                        }
                        echo '<div class="container">';
                        while ($row = mysqli_fetch_assoc($query)) {
                                echo '<div class="column">';
                                echo '<p>' . $row['name'] . '</p>';
                                echo '<p>' . $row['height'] . '</p>';
                                echo '<p>' . $row['width'] . '</p>';
                                echo '<p>' . $row['length'] . '</p>';
                                echo '<p>' . $row['area'] . '</p>';
                                echo '</div>';
                        }
                        echo '</div>';
                    ?>
                    </div>                 
                
                    <div class="card">
                    <?php
                    $query = mysqli_query($db, "SELECT * FROM `cabinets` where id = 26");
                    if (!$query) {
                            print_r($db->error);
                        }
                        echo '<div class="container">';
                        while ($row = mysqli_fetch_assoc($query)) {
                                echo '<div class="column">';
                                echo '<p>' . $row['name'] . '</p>';
                                echo '<p>' . $row['height'] . '</p>';
                                echo '<p>' . $row['width'] . '</p>';
                                echo '<p>' . $row['length'] . '</p>';
                                echo '<p>' . $row['area'] . '</p>';
                                echo '</div>';
                        }
                        echo '</div>';
                    ?>
                    </div>     

                    <div class="card">
                    <?php
                    $query = mysqli_query($db, "SELECT * FROM `cabinets` where id = 31");
                    if (!$query) {
                            print_r($db->error);
                        }
                        echo '<div class="container">';
                        while ($row = mysqli_fetch_assoc($query)) {
                                echo '<div class="column">';
                                echo '<p>' . $row['name'] . '</p>';
                                echo '<p>' . $row['height'] . '</p>';
                                echo '<p>' . $row['width'] . '</p>';
                                echo '<p>' . $row['length'] . '</p>';
                                echo '<p>' . $row['area'] . '</p>';
                                echo '</div>';
                        }
                        echo '</div>';
                    ?>
                    </div>     

                </div>
                                <div class="line1">

                    <div class="card">
                    <?php
                    $query = mysqli_query($db, "SELECT * FROM `cabinets` where id = 32");
                    if (!$query) {
                            print_r($db->error);
                        }
                        echo '<div class="container">';
                        while ($row = mysqli_fetch_assoc($query)) {
                                echo '<div class="column">';
                                echo '<p>' . $row['name'] . '</p>';
                                echo '<p>' . $row['height'] . '</p>';
                                echo '<p>' . $row['width'] . '</p>';
                                echo '<p>' . $row['length'] . '</p>';
                                echo '<p>' . $row['area'] . '</p>';
                                echo '</div>';
                        }
                        echo '</div>';
                    ?>
                    </div>                 
                
                    <div class="card">
                    <?php
                    $query = mysqli_query($db, "SELECT * FROM `cabinets` where id = 33");
                    if (!$query) {
                            print_r($db->error);
                        }
                        echo '<div class="container">';
                        while ($row = mysqli_fetch_assoc($query)) {
                                echo '<div class="column">';
                                echo '<p>' . $row['name'] . '</p>';
                                echo '<p>' . $row['height'] . '</p>';
                                echo '<p>' . $row['width'] . '</p>';
                                echo '<p>' . $row['length'] . '</p>';
                                echo '<p>' . $row['area'] . '</p>';
                                echo '</div>';
                        }
                        echo '</div>';
                    ?>
                    </div>     

                    <div class="card">
                    <?php
                    $query = mysqli_query($db, "SELECT * FROM `cabinets` where id = 34");
                    if (!$query) {
                            print_r($db->error);
                        }
                        echo '<div class="container">';
                        while ($row = mysqli_fetch_assoc($query)) {
                                echo '<div class="column">';
                                echo '<p>' . $row['name'] . '</p>';
                                echo '<p>' . $row['height'] . '</p>';
                                echo '<p>' . $row['width'] . '</p>';
                                echo '<p>' . $row['length'] . '</p>';
                                echo '<p>' . $row['area'] . '</p>';
                                echo '</div>';
                        }
                        echo '</div>';
                    ?>
                    </div>     

                </div>
                            <div class="line1">

                    <div class="card">
                    <?php
                    $query = mysqli_query($db, "SELECT * FROM `cabinets` where id = 35");
                    if (!$query) {
                            print_r($db->error);
                        }
                        echo '<div class="container">';
                        while ($row = mysqli_fetch_assoc($query)) {
                                echo '<div class="column">';
                                echo '<p>' . $row['name'] . '</p>';
                                echo '<p>' . $row['height'] . '</p>';
                                echo '<p>' . $row['width'] . '</p>';
                                echo '<p>' . $row['length'] . '</p>';
                                echo '<p>' . $row['area'] . '</p>';
                                echo '</div>';
                        }
                        echo '</div>';
                    ?>
                    </div>                 
                
                    <div class="card">
                    <?php
                    $query = mysqli_query($db, "SELECT * FROM `cabinets` where id = 36");
                    if (!$query) {
                            print_r($db->error);
                        }
                        echo '<div class="container">';
                        while ($row = mysqli_fetch_assoc($query)) {
                                echo '<div class="column">';
                                echo '<p>' . $row['name'] . '</p>';
                                echo '<p>' . $row['height'] . '</p>';
                                echo '<p>' . $row['width'] . '</p>';
                                echo '<p>' . $row['length'] . '</p>';
                                echo '<p>' . $row['area'] . '</p>';
                                echo '</div>';
                        }
                        echo '</div>';
                    ?>
                    </div>     

                    <div class="card">
                    <?php
                    $query = mysqli_query($db, "SELECT * FROM `cabinets` where id = 41");
                    if (!$query) {
                            print_r($db->error);
                        }
                        echo '<div class="container">';
                        while ($row = mysqli_fetch_assoc($query)) {
                                echo '<div class="column">';
                                echo '<p>' . $row['name'] . '</p>';
                                echo '<p>' . $row['height'] . '</p>';
                                echo '<p>' . $row['width'] . '</p>';
                                echo '<p>' . $row['length'] . '</p>';
                                echo '<p>' . $row['area'] . '</p>';
                                echo '</div>';
                        }
                        echo '</div>';
                    ?>
                    </div>     

                </div>

                <div class="line1">

                    <div class="card">
                    <?php
                    $query = mysqli_query($db, "SELECT * FROM `cabinets` where id = 42");
                    if (!$query) {
                            print_r($db->error);
                        }
                        echo '<div class="container">';
                        while ($row = mysqli_fetch_assoc($query)) {
                                echo '<div class="column">';
                                echo '<p>' . $row['name'] . '</p>';
                                echo '<p>' . $row['height'] . '</p>';
                                echo '<p>' . $row['width'] . '</p>';
                                echo '<p>' . $row['length'] . '</p>';
                                echo '<p>' . $row['area'] . '</p>';
                                echo '</div>';
                        }
                        echo '</div>';
                    ?>
                    </div>                 
                
                    <div class="card">
                    <?php
                    $query = mysqli_query($db, "SELECT * FROM `cabinets` where id = 43");
                    if (!$query) {
                            print_r($db->error);
                        }
                        echo '<div class="container">';
                        while ($row = mysqli_fetch_assoc($query)) {
                                echo '<div class="column">';
                                echo '<p>' . $row['name'] . '</p>';
                                echo '<p>' . $row['height'] . '</p>';
                                echo '<p>' . $row['width'] . '</p>';
                                echo '<p>' . $row['length'] . '</p>';
                                echo '<p>' . $row['area'] . '</p>';
                                echo '</div>';
                        }
                        echo '</div>';
                    ?>
                    </div>     

                    <div class="card">
                    <?php
                    $query = mysqli_query($db, "SELECT * FROM `cabinets` where id = 44");
                    if (!$query) {
                            print_r($db->error);
                        }
                        echo '<div class="container">';
                        while ($row = mysqli_fetch_assoc($query)) {
                                echo '<div class="column">';
                                echo '<p>' . $row['name'] . '</p>';
                                echo '<p>' . $row['height'] . '</p>';
                                echo '<p>' . $row['width'] . '</p>';
                                echo '<p>' . $row['length'] . '</p>';
                                echo '<p>' . $row['area'] . '</p>';
                                echo '</div>';
                        }
                        echo '</div>';
                    ?>
                    </div>     
                </div>
                <div class="line1">

                    <div class="card">
                    <?php
                    $query = mysqli_query($db, "SELECT * FROM `cabinets` where id = 45");
                    if (!$query) {
                            print_r($db->error);
                        }
                        echo '<div class="container">';
                        while ($row = mysqli_fetch_assoc($query)) {
                                echo '<div class="column">';
                                echo '<p>' . $row['name'] . '</p>';
                                echo '<p>' . $row['height'] . '</p>';
                                echo '<p>' . $row['width'] . '</p>';
                                echo '<p>' . $row['length'] . '</p>';
                                echo '<p>' . $row['area'] . '</p>';
                                echo '</div>';
                        }
                        echo '</div>';
                    ?>
                    </div>                 
                
                    <div class="card">
                    <?php
                    $query = mysqli_query($db, "SELECT * FROM `cabinets` where id = 46");
                    if (!$query) {
                            print_r($db->error);
                        }
                        echo '<div class="container">';
                        while ($row = mysqli_fetch_assoc($query)) {
                                echo '<div class="column">';
                                echo '<p>' . $row['name'] . '</p>';
                                echo '<p>' . $row['height'] . '</p>';
                                echo '<p>' . $row['width'] . '</p>';
                                echo '<p>' . $row['length'] . '</p>';
                                echo '<p>' . $row['area'] . '</p>';
                                echo '</div>';
                        }
                        echo '</div>';
                    ?>
                    </div>     

                </div>              
            </div>
        
        </div>
        <footer>
            <div class="footer1">
                    <div class="ftname"><b>Links</b></div>
                    <div><a href="https://sketchfab.com/minnen3">Sketchfab</a></div>
                    <div><a href="https://www.youtube.com/channel/UCOVJWN3tfTd7BjfbV-gDjcw">Youtube</a></div>
                    <div><a href="https://vk.com/mdhmnnn">VK</a></div>
            </div>  
        </footer>
        </div>

    </body>
</html>