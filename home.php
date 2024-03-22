<?php
session_start();

// cek session
if (!isset ($_SESSION["email"])) {
    header("Location: index.php");
    exit;
}

// cek cookie
// if (!isset ($_COOKIE['email'])) {
//     header("Location: index.php");
//     exit;
// }

?>

<?php
if (isset ($_POST['logout'])) {
    session_unset();
    session_destroy();

    // hapus cookie
    // setcookie('email', '', time() - 3600);

    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>Berhasil Login</h1>
    <h2>Ini home</h2>
    <form action="" method="POST">
        <button type="submit" name="logout">Logout</button>
    </form>
</body>

</html>