<?php
    include('session.php');
?>
<?php 
    if(isset($_POST["submit"]) && isset($_GET['id']) && $_GET['id'] == "website") {
    include('config.php');
    $sql2 = "UPDATE tblWebsite SET websiteNaam='".$_POST["websitenaam"]."' WHERE websiteId=".$_POST["websiteid"]."";

    if($db->query($sql2) === TRUE) {
        header('Location: /bvdo/pages.php');
        } else {
        echo "<script type= 'text/javascript'>alert('Error: " . $sql2 . "<br>" . $db->error."');</script>";
        }
    }
?>

<?php 
    if(isset($_POST["submit"]) && isset($_GET['id']) && $_GET['id'] == "users") {
    include('config.php');
    $sql2 = "UPDATE tblUsers SET usersUsername='".$_POST["websitenaam"]."', usersPassword='".$_POST["gebruikerwachtwoord"]."' WHERE usersId=".$_POST["websiteid"]."";

    if($db->query($sql2) === TRUE) {
        header('Location: /bvdo/users.php');
        } else {
        echo "<script type= 'text/javascript'>alert('Error: " . $sql2 . "<br>" . $db->error."');</script>";
        }
    }
?>

<?php 
    if(isset($_POST["submit"]) && isset($_GET['id']) && $_GET['id'] == "type") {
        
        include('image.php');

    $sqlOpzoek = "UPDATE tblOpzoek SET opzoekName='".$_POST["typenaam"]."', 
                opzoekValue='".$_POST["typewaarde"]."', 
                opzoekImage='".$userpic."' 
        WHERE opzoekId='".$_POST["typeid"]."'";

    if($db->query($sqlOpzoek) === TRUE) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            } else {
            echo "<script type= 'text/javascript'>alert('Error: " . $sql2 . "<br>" . $db->error."');</script>";
            }
        }
?>


<?php 
    if(isset($_POST["submit"]) && isset($_GET['id']) && $_GET['id'] == "kleur") {

    include('config.php');
    include('image.php');

    $sqlOpzoek = "UPDATE tblKleur SET kleurName='".$_POST["kleurnaam"]."', 
                kleurValue='".$_POST["kleurwaarde"]."', 
                kleurImage='".$userpic."' 
        WHERE kleurId='".$_POST["kleurid"]."'";

    if($db->query($sqlOpzoek) === TRUE) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            } else {
            echo "<script type= 'text/javascript'>alert('Error: " . $sql2 . "<br>" . $db->error."');</script>";
            }
        }
?>


<?php 
    if(isset($_POST["submit"]) && isset($_GET['id']) && $_GET['id'] == "dakbedekking") {

    include('config.php');
    include('image.php');

    $sqlOpzoek = "UPDATE tblDakbedekking SET dakbedekkingNaam='".$_POST["dakbedekkingnaam"]."', 
                dakbedekkingValue='".$_POST["dakbedekkingwaarde"]."', 
                dakbedekkingImage='".$userpic."' 
        WHERE dakbedekkingId='".$_POST["dakbedekkingid"]."'";

    if($db->query($sqlOpzoek) === TRUE) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            } else {
            echo "<script type= 'text/javascript'>alert('Error: " . $sql2 . "<br>" . $db->error."');</script>";
            }
        }
?>


<?php 
    if(isset($_POST["submit"]) && isset($_GET['id']) && $_GET['id'] == "zonwering") {

    include('config.php');
    include('image.php');

    $sqlOpzoek = "UPDATE tblZonwering SET zonweringNaam='".$_POST["zonweringnaam"]."', 
                zonweringValue='".$_POST["zonweringwaarde"]."', 
                zonweringImage='".$userpic."' 
        WHERE zonweringId='".$_POST["zonweringid"]."'";

    if($db->query($sqlOpzoek) === TRUE) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            } else {
            echo "<script type= 'text/javascript'>alert('Error: " . $sql2 . "<br>" . $db->error."');</script>";
            }
        }
?>


<?php 
    if(isset($_POST["submit"]) && isset($_GET['id']) && $_GET['id'] == "montage") {

    include('config.php');
    include('image.php');

    $sqlOpzoek = "UPDATE tblMontage SET montageNaam='".$_POST["montagenaam"]."', 
                montageValue='".$_POST["montagewaarde"]."', 
                montageImage='".$userpic."' 
        WHERE montageId='".$_POST["montageid"]."'";

    if($db->query($sqlOpzoek) === TRUE) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            } else {
            echo "<script type= 'text/javascript'>alert('Error: " . $sql2 . "<br>" . $db->error."');</script>";
            }
        }
?>

<?php 
    if(isset($_POST["submit"]) && isset($_GET['id']) && $_GET['id'] == "instellingen") {

    include('config.php');

    $sqlOpzoek = "UPDATE tblInstellingen SET instellingenEmail='".$_POST["emailOntvangerEdit"]."', 
                instellingenCSS='".$_POST["inputKleurEdit"]."', 
                instellingenBedanktpagina='".$_POST["inputBedanktpaginaEdit"]."'
        WHERE instellingenId='".$_POST["instellingId"]."'";

    if($db->query($sqlOpzoek) === TRUE) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            } else {
            echo "<script type= 'text/javascript'>alert('Error: " . $sql2 . "<br>" . $db->error."');</script>";
            }
        }
?>