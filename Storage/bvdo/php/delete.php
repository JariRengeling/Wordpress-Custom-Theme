<?php
    include('session.php');
?>
<?php
if(isset($_GET['delete_id']) && !empty($_GET['delete_id']))
	{
    include('config.php');
    $id = $_GET['delete_id'];
    $tbl_name = $_GET['tbl_name'];
        if ($tbl_name == "tblWebsite") {
            $sql = "DELETE FROM tblWebsite WHERE websiteId=$id";
                if($db->query($sql) === TRUE) {
                    header("Location: /bvdo/pages.php");
                } else
            {
                echo "No ID";
            }}

        if ($tbl_name == "tblOpzoek") {
            $sqlOpzoekDelete = "DELETE FROM tblOpzoek WHERE opzoekId=$id";
                if($db->query($sqlOpzoekDelete) === TRUE) {
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                } else
            {
                echo "No ID";
            }}  else if ($tbl_name == "tblKleur") {
            $sqlOpzoekDelete = "DELETE FROM tblKleur WHERE kleurId=$id";
                if($db->query($sqlOpzoekDelete) === TRUE) {
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                } else
            {
                echo "No ID";
            }} else if ($tbl_name == "tblDakbedekking") {
            $sqlOpzoekDelete = "DELETE FROM tblDakbedekking WHERE dakbedekkingId=$id";
                if($db->query($sqlOpzoekDelete) === TRUE) {
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                } else
            {
                echo "No ID";
            }} else if ($tbl_name == "tblZonwering") {
            $sqlOpzoekDelete = "DELETE FROM tblZonwering WHERE zonweringId=$id";
                if($db->query($sqlOpzoekDelete) === TRUE) {
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                } else
            {
                echo "No ID";
            }} else if ($tbl_name == "tblMontage") {
            $sqlOpzoekDelete = "DELETE FROM tblMontage WHERE montageId=$id";
                if($db->query($sqlOpzoekDelete) === TRUE) {
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                } else
            {
                echo "No ID";
            }} else if ($tbl_name == "tblUsers") {
            $sqlOpzoekDelete = "DELETE FROM tblUsers WHERE usersId=$id";
                if($db->query($sqlOpzoekDelete) === TRUE) {
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                } else
            {
                echo "No ID";
            }} else if ($tbl_name == "tblInstellingen") {
            $sqlOpzoekDelete = "DELETE FROM tblInstellingen WHERE instellingenId=$id";
                if($db->query($sqlOpzoekDelete) === TRUE) {
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                } else
            {
                echo "No ID";
            }}
                 
}
?>