<a href="../index.php">Vissza a főoldalra</a>

<?php

header("Location: ../signup.php?signup=not_yet_implemented");

/* Ez a rész még nem kell, ha lesz benne adatbáziskezelés imlementálva majd akkor
include_once "dbh.inc.php";
try {
    $felhasznalonev = @mysqli_real_escape_string($conn, $_POST['felhasznalonev']);
    $email = @mysqli_real_escape_string($conn, $_POST['email']);
    $jelszo = @mysqli_real_escape_string($conn, $_POST['jelszo']);
    $vezeteknev = @mysqli_real_escape_string($conn, $_POST['vezeteknev']);
    $keresztnev = @mysqli_real_escape_string($conn, $_POST['keresztnev']);
    $confirm_password = @mysqli_real_escape_string($conn, $_POST['confirm_password']);
    $szerep = @mysqli_real_escape_string($conn, $_POST['radio']);
//    $szerep = @$_POST['radio']; // Ez redundáns

    if ($jelszo !== $confirm_password) {
        $GLOBALS['signup'] = "passwords_do_not_match";
        header("Location: ../index.php?signup=passwords_do_not_match");
        exit();
    }
    $jelszo = password_hash($jelszo, PASSWORD_DEFAULT);

    if(mysqli_query($conn, "INSERT INTO felhasznalo(felhasznalonev, email, jelszo, vezeteknev, keresztnev, szerep, is_logged_in)  VALUES ('$felhasznalonev', '$email', '$jelszo', '$vezeteknev', '$keresztnev', '$szerep', false);")){
        $GLOBALS['signup'] = "success";
        header("Location: ../index.php?signup=success");
    } else {

        // elokeszitjuk az utasitast
        $stmt = mysqli_prepare($conn, "INSERT INTO felhasznalo(felhasznalonev, email, jelszo, vezeteknev, keresztnev, szerep) VALUES (?, ?, ?, ?, ?, ?);");

        // bekotjuk a parametereket (igy biztonsagosabb az adatkezeles)
        mysqli_stmt_bind_param($stmt, "ssssss", $felhasznalonev, $email, $jelszo, $vezeteknev, $keresztnev, $szerep);
        if(mysqli_stmt_execute($stmt)) {
            $GLOBALS['signup'] = "success";
            header("Location: ../index.php?signup=success");
        } elseif ($stmt->execute()) {
            $GLOBALS['signup'] = "success";
            header("Location: ../index.php?signup=success");
        }  else {
            echo "Hiba az állomás felvitele során: " . $stmt->error;
            header("Location: ../index.php?signup=failure");
        }
    }
} catch (exception $exception){
    $GLOBALS['signup'] = $exception->getMessage();
    header("Location: ../index.php?signup=exception");
}
 */