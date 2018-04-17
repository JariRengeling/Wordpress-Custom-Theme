<?php
    include('session.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php 
    if(isset($_POST["submit"]) && isset($_GET['id']) && $_GET['id'] == "website") {
    include('config.php');
    $sql2 = "INSERT INTO tblWebsite (websiteNaam) VALUES ('".$_POST["websitenaam"]."')";

    if($db->query($sql2) === TRUE) {
        header('Location: /bvdo/pages.php');
        } else {
        echo "<script type= 'text/javascript'>alert('Error: " . $sql2 . "<br>" . $db->error."');</script>";
        }
    }
?>

<?php 
    if(isset($_POST["submit"]) && isset($_GET['id']) && $_GET['id'] == "user") {
    include('config.php');
    $sql2 = "INSERT INTO tblUsers (usersUsername, usersPassword) VALUES ('".$_POST["gebruikersnaam"]."', '".$_POST["wachtwoord"]."')";

    if($db->query($sql2) === TRUE) {
        header('Location: /bvdo/users.php');
        } else {
        echo "<script type= 'text/javascript'>alert('Error: " . $sql2 . "<br>" . $db->error."');</script>";
        }
    }
?>

<?php 
    if(isset($_POST["submit"]) && isset($_GET['website_naam']) && isset($_GET['tbl_name']) && $_GET['tbl_name'] == "tblOpzoek") {
    include('config.php');
    $website_naam = $_GET['website_naam'];
    $sqlWebsiteId =  "SELECT websiteId FROM tblWebsite WHERE websiteNaam = '$website_naam'";
    if($db->query($sqlWebsiteId) != "") {
        $resultWebsiteId = $db->query($sqlWebsiteId);
        if ($resultWebsiteId->num_rows > 0) {
            // output data of each row
            while($row = $resultWebsiteId->fetch_assoc()) {
                $websiteId = $row["websiteId"];
            }
            include('image.php');
    $sqlToevoegenType = "INSERT INTO tblOpzoek (websiteId, opzoekName, opzoekValue, opzoekImage) VALUES ('".$websiteId."', '".$_POST["typeNaamToevoegen"]."', '".$_POST["typeWaardeToevoegen"]."', '".$userpic."')";
    if($db->query($sqlToevoegenType) === TRUE) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        } else {
        echo "<script type= 'text/javascript'>alert('Error: " . $sqlToevoegenType . "<br>" . $db->error."');</script>";
        }
        } else {
            echo "0 results";
        }
        } 
    }
?>


<?php 
    if(isset($_POST["submit"]) && isset($_GET['website_naam']) && isset($_GET['tbl_name']) && $_GET['tbl_name'] == "kleur") {
    include('config.php');
    $website_naam = $_GET['website_naam'];
    $sqlWebsiteId =  "SELECT websiteId FROM tblWebsite WHERE websiteNaam = '$website_naam'";
    if($db->query($sqlWebsiteId) != "") {
        $resultWebsiteId = $db->query($sqlWebsiteId);
        if ($resultWebsiteId->num_rows > 0) {
            // output data of each row
            while($row = $resultWebsiteId->fetch_assoc()) {
                $websiteId = $row["websiteId"];
            }
            include('image.php');
    $sqlToevoegenKleur = "INSERT INTO tblKleur (websiteId, kleurName, kleurValue, kleurImage) VALUES ('".$websiteId."', '".$_POST["kleurNaamToevoegen"]."', '".$_POST["kleurWaardeToevoegen"]."', '".$userpic."')";
    if($db->query($sqlToevoegenKleur) === TRUE) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        } else {
        echo "<script type= 'text/javascript'>alert('Error: " . $sqlToevoegenKleur . "<br>" . $db->error."');</script>";
        }
        } else {
            echo "0 results";
        }
        } 
    }
?>


<?php 
    if(isset($_POST["submit"]) && isset($_GET['website_naam']) && isset($_GET['tbl_name']) && $_GET['tbl_name'] == "dakbedekking") {
    include('config.php');
    $website_naam = $_GET['website_naam'];
    $sqlWebsiteId =  "SELECT websiteId FROM tblWebsite WHERE websiteNaam = '$website_naam'";
    if($db->query($sqlWebsiteId) != "") {
        $resultWebsiteId = $db->query($sqlWebsiteId);
        if ($resultWebsiteId->num_rows > 0) {
            // output data of each row
            while($row = $resultWebsiteId->fetch_assoc()) {
                $websiteId = $row["websiteId"];
            }
            include('image.php');
    $sqlToevoegenDakbedekking = "INSERT INTO tblDakbedekking (websiteId, DakbedekkingNaam, dakbedekkingValue, dakbedekkingImage) VALUES ('".$websiteId."', '".$_POST["dakbedekkingNaamToevoegen"]."', '".$_POST["dakbedekkingWaardeToevoegen"]."', '".$userpic."')";
    if($db->query($sqlToevoegenDakbedekking) === TRUE) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        } else {
        echo "<script type= 'text/javascript'>alert('Error: " . $sqlToevoegenDakbedekking . "<br>" . $db->error."');</script>";
        }
        } else {
            echo "0 results";
        }
        } 
    }
?>


<?php 
    if(isset($_POST["submit"]) && isset($_GET['website_naam']) && isset($_GET['tbl_name']) && $_GET['tbl_name'] == "zonwering") {
    include('config.php');
    $website_naam = $_GET['website_naam'];
    $sqlWebsiteId =  "SELECT websiteId FROM tblWebsite WHERE websiteNaam = '$website_naam'";
    if($db->query($sqlWebsiteId) != "") {
        $resultWebsiteId = $db->query($sqlWebsiteId);
        if ($resultWebsiteId->num_rows > 0) {
            // output data of each row
            while($row = $resultWebsiteId->fetch_assoc()) {
                $websiteId = $row["websiteId"];
            }
            include('image.php');
    $sqlToevoegenZonwering = "INSERT INTO tblZonwering (websiteId, zonweringNaam, zonweringValue, zonweringImage) VALUES ('".$websiteId."', '".$_POST["zonweringNaamToevoegen"]."', '".$_POST["zonweringWaardeToevoegen"]."', '".$userpic."')";
    if($db->query($sqlToevoegenZonwering) === TRUE) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        } else {
        echo "<script type= 'text/javascript'>alert('Error: " . $sqlToevoegenZonwering . "<br>" . $db->error."');</script>";
        }
        } else {
            echo "0 results";
        }
        } 
    }
?>


<?php 
    if(isset($_POST["submit"]) && isset($_GET['website_naam']) && isset($_GET['tbl_name']) && $_GET['tbl_name'] == "montage") {
    include('config.php');
    $website_naam = $_GET['website_naam'];
    $sqlWebsiteId =  "SELECT websiteId FROM tblWebsite WHERE websiteNaam = '$website_naam'";
    if($db->query($sqlWebsiteId) != "") {
        $resultWebsiteId = $db->query($sqlWebsiteId);
        if ($resultWebsiteId->num_rows > 0) {
            // output data of each row
            while($row = $resultWebsiteId->fetch_assoc()) {
                $websiteId = $row["websiteId"];
            }
            include('image.php');
    $sqlToevoegenMontage = "INSERT INTO tblMontage (websiteId, montageNaam, montageValue, montageImage) VALUES ('".$websiteId."', '".$_POST["montageNaamToevoegen"]."', '".$_POST["montageWaardeToevoegen"]."', '".$userpic."')";
    if($db->query($sqlToevoegenMontage) === TRUE) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        } else {
        echo "<script type= 'text/javascript'>alert('Error: " . $sqlToevoegenMontage . "<br>" . $db->error."');</script>";
        }
        } else {
            echo "0 results";
        }
        } 
    }
?>

<?php
    if(isset($_POST["submit"]) && isset($_GET['website_naam']) && isset($_GET['tbl_name']) && $_GET['tbl_name'] == "instellingen") {
    include('config.php');
    $website_naam = $_GET['website_naam'];
    $sqlWebsiteId =  "SELECT websiteId FROM tblWebsite WHERE websiteNaam = '$website_naam'";
    if($db->query($sqlWebsiteId) != "") {
        $resultWebsiteId = $db->query($sqlWebsiteId);
        if ($resultWebsiteId->num_rows > 0) {
            // output data of each row
            while($row = $resultWebsiteId->fetch_assoc()) {
                $websiteId = $row["websiteId"];
            }
    $sqlToevoegenInstellingen = "INSERT INTO tblInstellingen (websiteId, instellingenEmail, instellingenCSS, instellingenBedanktpagina) VALUES ('".$websiteId."', '".$_POST["emailOntvanger"]."', '".$_POST["inputKleur"]."', '".$_POST["inputBedanktpagina"]."')";
    if($db->query($sqlToevoegenInstellingen) === TRUE) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        } else {
        echo "<script type= 'text/javascript'>alert('Error: " . $sqlToevoegenInstellingen . "<br>" . $db->error."');</script>";
        }
        } else {
            echo "0 results";
        }
        } 
    }
?>