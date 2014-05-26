<?php require_once 'header.php' ?>

<p>友達のプロフィール名は：<br>
<?php
    $dsn = 'mysql:dbname=my_db;host=127.0.0.1';
    $user = '--omitted--';
    $password = '--omitted--';

    try {
        $conn = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }

    $sql = "SELECT user_email, display_name FROM my_users WHERE user_email = \"" . $_POST['email'] . "\"";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $row) {
        echo $row['user_email'] . ": " . $row['display_name'] . " <br>";
    }

?>
</p>
