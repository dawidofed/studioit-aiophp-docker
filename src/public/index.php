<!DOCTYPE html>
<html>
<head>
    <title>AIOPHP docker by StudioIT</title>

    <style>
        p.header {
            font-family: Verdana;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            width: 8em
        }
        h1 {
            font-family: Verdana;
            text-align: center;
        }
        h3 {
            font-family: Verdana;
            text-align: center;
        }
        p.info {
            font-family: Verdana;
            margin-left: 30px;
        }
        p.warning {
            color: red;
        }

    </style
</head>
<body>
<p class="header">Studio IT presents</p>
<h1>All-In-One PHP docker</h1>
<p class="info warning">UWAGA: docker nie był testowany w środowiskach produkcyjnych.<br />Zalecany jest raczej do środowisk developerskich, aczkolwiek nic nie stoi na przeszkodzie, byś sam dostosował go do własnych potrzeb.</p>
<p class="info">Masz do dyspozycji:<br />
    <ul>
        <li>NGINX</li>
        <li>PHP w wersji: <?php echo phpversion(); ?></li>
        <li>MySQL</li>
        <li>Mailhog</li>
        <li>Redis</li>
        <li>Elasticsearch</li>
        <li>RabbitMQ</li>
    </ul>
</p>
<p class="info">
    Sprawdzimy, czy działa połączenie z MySQL:<br />
    <i>(dane dostępowe połączenia znajdują się w pliku .env, w katalogu głównym)</i><br />
    Host: <?php echo getenv('MYSQL_HOST'); ?><br />
    Port: <?php echo getenv('MYSQL_PORT'); ?><br />
    Baza danych: <?php echo getenv('MYSQL_DATABASE'); ?><br />
    Hasło root: <?php echo getenv('MYSQL_ROOT_PASSWORD'); ?><br />
    Użytkownik: <?php echo getenv('MYSQL_USER'); ?><br />
    Hasło użytkownika: <?php echo getenv('MYSQL_PASSWORD'); ?><br />
    Efekt nawiązania połączenia przez PDO:<br />
    <?php
    $mdb = new PDO(
        'mysql:host=' . getenv('MYSQL_HOST')
        . ';port=' . getenv('MYSQL_PORT')
        . ';dbname=' . getenv('MYSQL_DATABASE'),
        'root',
        getenv('MYSQL_ROOT_PASSWORD')
    );
    echo 'MySQL NOW(): ', $mdb->query('SELECT NOW()')->fetchColumn() . "\n";
    ?>
</p>
<hr />
<?php
phpinfo();
?>
</body>
</html>
