<!<!DOCTYPE html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="css/<?php echo $_GET['id'] . '.css' ?>">
        <script src="js/<?php echo $_GET['id'] . '.js' ?>"></script>

 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
    </head>

    <body>
        <header>
        </header>
        <main role="main"><div class="container"><h1>MetaGauss Product Icons</h1>
                <?php
                    if (isset($_GET['id'])) {
                        echo '<a href="index.php">&#8592; List</a><br><br>';
                        include_once($_GET['id'] . '.php');
                    } else {
                        elementList();
                    }
                ?>
        </div></main>
    </body>

    </html>

<?php
    function elementList()
    {
        $elements = array_diff(scandir('css'), array('..', '.', 'style.css'));
        echo '<ol>';
        foreach ($elements as $element) {
            $element = str_replace('.css', '', $element);
            echo '<li><a href="?id=' . $element . '">' . ucfirst($element) . '</a></li>';
        }
        echo '</ol>';
    }
?>