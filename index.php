<?php
session_start();

if (isset ($_POST['email']) && isset ($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $_SESSION['email'] = $email;

    // if (isset ($_POST['remember']) && $_POST['remember'] == 'on') {
    //     setcookie('email', $email, time() + 3600);
    // }

    header("Location: home.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum</title>
</head>

<body>
    <h1>Praktikum PHP 1</h1>

    <h2>Print di PHP</h2>
    <?php echo "Hello World"; ?>

    <h2>TIPE DATA</h2>
    <?php
    // string
    echo "string: " . "Nama saya Michael Arselius <br>";
    // integer
    echo "integer: ";
    echo 21;
    echo "<br>";
    // float
    echo "float: ";
    echo 2.1;
    echo "<br>";
    // boolean
    echo "boolean: ";
    echo true;
    echo "<br>";
    // array
    $listNama = ["Michael", "Arselius"];
    echo "array: ";
    foreach ($listNama as $nama) {
        echo $nama . ", ";
    }
    echo "<br>";
    // null
    echo "null: ";
    echo null;
    echo "<br>";
    ?>

    <p>Operator</p>
    <?php
    $angka = 10;
    echo "Nilai awal: $angka <br>";
    $angka = $angka + 5;
    echo "Nilai setelah ditambah 5: $angka <br>";
    $angka = $angka - 3;
    echo "Nilai setelah dikurang 3: $angka <br>";
    $angka = $angka * 2;
    echo "Nilai setelah dikali 2: $angka <br>";
    $angka = $angka / 4;
    echo "Nilai setelah dibagi 4: $angka <br>";

    echo "<br>" . "Increment Decrement" . "<br>";
    $angka++;
    echo "Nilai setelah ditambah 1: $angka <br>";
    $angka--;
    echo "Nilai setelah dikurang 1: $angka <br>";

    echo "<br>" . "Pengkondisian" . "<br>";
    if ($angka > 10) {
        echo "Nilai lebih dari 10 <br>";
    } else {
        echo "Nilai kurang dari 10 <br>";
    }
    ?>

    <div>
        <h2>Angka Saat Ini</h2>
        <?php if ($angka > 10): ?>
            <p>Lebih dari 10</p>
        <?php else: ?>
            <p>Kurang dari 10</p>
        <?php endif; ?>
    </div>

    <h2>Function</h2>
    <?php
    function kaliDua($parameter)
    {
        return $parameter * 2;
    }
    ;

    echo "Nilai sebelum dikali 2: " . $angka . "<br>";
    echo "Nilai setelah dikali 2: " . kaliDua($angka);
    ?>

    <h2>Form</h2>
    <form action="index.php" method="POST">
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <input type="checkbox" name="remember" id="remember"><label for="remember">Ingat Saya</label>
        <button type="submit">Login</button>
    </form>
</body>

</html>