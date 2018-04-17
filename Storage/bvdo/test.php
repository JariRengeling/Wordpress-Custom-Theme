<?php
    include('session.php');
?>
<?php
if(isset($_GET['test_id']) && !empty($_GET['test_id']))
	{include("php/config.php");
        $id = $_GET['test_id'];
        $sqlWebsiteNaam = "SELECT websiteNaam from tblWebsite WHERE websiteId=$id";
        if($db->query($sqlWebsiteNaam)->num_rows > 0) {
            $resultWebsiteNaam = $db->query($sqlWebsiteNaam);
             if ($resultWebsiteNaam->num_rows > 0) {
                // output data of each row
                while($row = $resultWebsiteNaam->fetch_assoc()) {
                    $websiteNaam = $row["websiteNaam"];
                }
            } else {
                echo "0 results";
            }   
        }
	else
	{
		echo "No ID";
	}}
$page_title = "Configuraties voor $websiteNaam";
?>

<!-- Type selecteren -->
<?php
include("includes/header.php");
if(isset($_GET['test_id']) && !empty($_GET['test_id']))
	{
    $id = $_GET['test_id'];
    $sql = "SELECT opzoekId, websiteId, opzoekName, opzoekValue, opzoekImage from tblOpzoek WHERE websiteId=$id";
    $sqlKleur = "SELECT kleurId, websiteId, kleurName, kleurValue, kleurImage from tblKleur WHERE websiteId=$id";
    $sqlDakbedekking = "SELECT dakbedekkingId, websiteId, dakbedekkingNaam, dakbedekkingValue, dakbedekkingImage from tblDakbedekking WHERE websiteId=$id";
    $sqlZonwering = "SELECT zonweringId, websiteId, zonweringNaam, zonweringValue, zonweringImage from tblzonwering WHERE websiteId=$id";
    $sqlMontage = "SELECT montageId, websiteId, montageNaam, montageValue, montageImage from tblmontage WHERE websiteId=$id";
    $sqlInstellingen = "SELECT instellingenId, websiteId, instellingenEmail, instellingenCSS, instellingenBedanktpagina from tblInstellingen WHERE websiteId=$id";
        
    if($db->query($sql)->num_rows > 0) {
            $result = $db->query($sql);
        }
    if($db->query($sqlKleur)->num_rows > 0) {
        $resultKleur = $db->query($sqlKleur);
    }
    if($db->query($sqlDakbedekking)->num_rows > 0) {
        $resultDakbedekking = $db->query($sqlDakbedekking);
    }
    if($db->query($sqlZonwering)->num_rows > 0) {
        $resultZonwering = $db->query($sqlZonwering);
    }
    if($db->query($sqlMontage)->num_rows > 0) {
        $resultMontage = $db->query($sqlMontage);
    }
    if($db->query($sqlInstellingen)->num_rows > 0) {
        $resultInstellingen = $db->query($sqlInstellingen);
    }
}
?>
<div style="padding-bottom: 100px;">
<div class="container">
    <div class="panel panel-default">
      <div class="panel-heading main-color-bg" data-target="#collapseOne" data-toggle="collapse" style="cursor: pointer;">
        <h3 class="panel-title" style="display: inline-block;">Type's</h3>
      </div>
      <div id="collapseOne" class="panel-collapse collapse">
      <div class="panel-body">
        <div class="row">
          <div class="col-md-12">
              <a type="button" class="btn btn-primary form-control" data-toggle="modal" data-target="#addType">Type toevoegen</a>
          </div>
        </div>
         <br>
          <table class="table table-striped table-hover">
              <tr>
                  <th>Type ID</th>
                  <th>Type Naam</th>
                  <th>Type Waarde</th>
                  <th>Type Afbeelding</th>
                  <th></th>
              </tr>
              <?php
                  if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>" . $row["opzoekId"]. "</td><td>" . $row["opzoekName"]. "</td><td>" . $row["opzoekValue"]. "</td><td><a id='single_image' href='php/user_images/" . $row["opzoekImage"]. "'>Afbeelding bekijken</a></td><td style='float: right; width: 100%;'><a class='btn btn-danger' href='/bvdo/php/delete.php?delete_id=" . $row["opzoekId"]. "&tbl_name=tblOpzoek' style='float:right;'>Verwijderen</a><a class='btn btn-default' data-toggle='modal' data-target='#editType' onclick='fillEditFields()' style='float:right; margin-right: 5px;'>Aanpassen</a> </td>";
                        }
                    } else {

                    }   
              ?>
          </table>
        </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="panel panel-default">
      <div class="panel-heading main-color-bg" data-target="#collapseThree" data-toggle="collapse" style="cursor: pointer;">
        <h3 class="panel-title" style="display: inline-block;">Kleuren</h3>
      </div>
      <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        <div class="row">
          <div class="col-md-12">
              <a type="button" class="btn btn-primary form-control" data-toggle="modal" data-target="#addKleur">Kleur toevoegen</a>
          </div>
        </div>
         <br>
          <table class="table table-striped table-hover">
              <tr>
                  <th>Kleur ID</th>
                  <th>Kleur Naam</th>
                  <th>Kleur Waarde</th>
                  <th>Kleur Afbeelding</th>
                  <th></th>
              </tr>
              <?php
                  if ($resultKleur->num_rows > 0) {
                        // output data of each row
                        while($row = $resultKleur->fetch_assoc()) {
                            echo "<tr><td>" . $row["kleurId"]. "</td><td>" . $row["kleurName"]. "</td><td>" . $row["kleurValue"]. "</td><td><a id='single_image' href='php/user_images/" . $row["kleurImage"]. "'>Afbeelding bekijken</a></td><td style='float: right; width: 100%;'><a class='btn btn-danger' href='/bvdo/php/delete.php?delete_id=" . $row["kleurId"]. "&tbl_name=tblKleur' style='float:right;'>Verwijderen</a><a class='btn btn-default' data-toggle='modal' data-target='#editKleur' onclick='fillEditFields()' style='float:right; margin-right: 5px;'>Aanpassen</a> </td>";
                        }
                    } else {

                    }   
              ?>
          </table>
        </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="panel panel-default">
      <div class="panel-heading main-color-bg" data-target="#collapseTwo" data-toggle="collapse" style="cursor: pointer;">
        <h3 class="panel-title" style="display: inline-block;">Dakbedekking</h3>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        <div class="row">
          <div class="col-md-12">
              <a type="button" class="btn btn-primary form-control" data-toggle="modal" data-target="#addDakbedekking">Dakbedekking toevoegen</a>
          </div>
        </div>
         <br>
          <table class="table table-striped table-hover">
              <tr>
                  <th>Dakbedekking ID</th>
                  <th>Dakbedekking Naam</th>
                  <th>Dakbedekking Waarde</th>
                  <th>Dakbedekking Afbeelding</th>
                  <th></th>
              </tr>
              <?php
                  if ($resultDakbedekking->num_rows > 0) {
                        // output data of each row
                        while($row = $resultDakbedekking->fetch_assoc()) {
                            echo "<tr><td>" . $row["dakbedekkingId"]. "</td><td>" . $row["dakbedekkingNaam"]. "</td><td>" . $row["dakbedekkingValue"]. "</td><td><a id='single_image' href='php/user_images/" . $row["dakbedekkingImage"]. "'>Afbeelding bekijken</a></td><td style='float: right; width: 100%;'><a class='btn btn-danger' href='/bvdo/php/delete.php?delete_id=" . $row["dakbedekkingId"]. "&tbl_name=tblDakbedekking' style='float:right;'>Verwijderen</a><a class='btn btn-default' data-toggle='modal' data-target='#editDakbedekking' onclick='fillEditFields()' style='float:right; margin-right: 5px;'>Aanpassen</a> </td>";
                        }
                    } else {

                    }   
              ?>
          </table>
        </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="panel panel-default">
      <div class="panel-heading main-color-bg" data-target="#collapseFour" data-toggle="collapse" style="cursor: pointer;">
        <h3 class="panel-title" style="display: inline-block;">Zonwering</h3>
      </div>
      <div id="collapseFour" class="panel-collapse collapse">
      <div class="panel-body">
        <div class="row">
          <div class="col-md-12">
              <a type="button" class="btn btn-primary form-control" data-toggle="modal" data-target="#addZonwering">Zonwering toevoegen</a>
          </div>
        </div>
         <br>
          <table class="table table-striped table-hover">
              <tr>
                  <th>Zonwering ID</th>
                  <th>Zonwering Naam</th>
                  <th>Zonwering Waarde</th>
                  <th>Zonwering Afbeelding</th>
                  <th></th>
              </tr>
              <?php
                  if ($resultZonwering->num_rows > 0) {
                        // output data of each row
                        while($row = $resultZonwering->fetch_assoc()) {
                            echo "<tr><td>" . $row["zonweringId"]. "</td><td>" . $row["zonweringNaam"]. "</td><td>" . $row["zonweringValue"]. "</td><td><a id='single_image' href='php/user_images/" . $row["zonweringImage"]. "'>Afbeelding bekijken</a></td><td style='float: right; width: 100%;'><a class='btn btn-danger' href='/bvdo/php/delete.php?delete_id=" . $row["zonweringId"]. "&tbl_name=tblZonwering' style='float:right;'>Verwijderen</a><a class='btn btn-default' data-toggle='modal' data-target='#editZonwering' onclick='fillEditFields()' style='float:right; margin-right: 5px;'>Aanpassen</a> </td>";
                        }
                    } else {

                    }   
              ?>
          </table>
        </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="panel panel-default">
      <div class="panel-heading main-color-bg" data-target="#collapseFive" data-toggle="collapse" style="cursor: pointer;">
        <h3 class="panel-title" style="display: inline-block;">Montage</h3>
      </div>
      <div id="collapseFive" class="panel-collapse collapse">
      <div class="panel-body">
        <div class="row">
          <div class="col-md-12">
              <a type="button" class="btn btn-primary form-control" data-toggle="modal" data-target="#addMontage">Montage toevoegen</a>
          </div>
        </div>
         <br>
          <table class="table table-striped table-hover">
              <tr>
                  <th>Montage ID</th>
                  <th>Montage Naam</th>
                  <th>Montage Waarde</th>
                  <th>Montage Afbeelding</th>
                  <th></th>
              </tr>
              <?php
                  if ($resultMontage->num_rows > 0) {
                        // output data of each row
                        while($row = $resultMontage->fetch_assoc()) {
                            echo "<tr><td>" . $row["montageId"]. "</td><td>" . $row["montageNaam"]. "</td><td>" . $row["montageValue"]. "</td><td><a id='single_image' href='php/user_images/" . $row["montageImage"]. "'>Afbeelding bekijken</a></td><td style='float: right; width: 100%;'><a class='btn btn-danger' href='/bvdo/php/delete.php?delete_id=" . $row["montageId"]. "&tbl_name=tblMontage' style='float:right;'>Verwijderen</a><a class='btn btn-default' data-toggle='modal' data-target='#editMontage' onclick='fillEditFields()' style='float:right; margin-right: 5px;'>Aanpassen</a> </td>";
                        }
                    } else {

                    }   
              ?>
          </table>
        </div>
        </div>
    </div>
    </div>

<div class="container">
    <div class="panel panel-default">
      <div class="panel-heading main-color-bg" data-target="#collapseSix" data-toggle="collapse" style="cursor: pointer;">
        <h3 class="panel-title" style="display: inline-block;">Formulier instellingen</h3>
      </div>
      <div id="collapseSix" class="panel-collapse collapse">
      <div class="panel-body">
        <div class="row">
          <div class="col-md-12">
              <a type="button" class="btn btn-primary form-control" data-toggle="modal" data-target="#addInstelling" id="instellingenKnop">Instellingen toevoegen</a>
          </div>
        </div>
         <br>
          <table class="table table-striped table-hover" id="tableInstellingen">
              <tr>
                  <th>Instelling ID</th>
                  <th>E-mail ontvanger inzendingen</th>
                  <th>Kleur formulier</th>
                  <th>Bedanktpagina URL</th>
                  <th></th>
              </tr>
              <?php
                  if ($resultInstellingen->num_rows > 0) {
                        // output data of each row
                        while($row = $resultInstellingen->fetch_assoc()) {
                            echo "<span id='kleurTekst' style='display: none;'>" . $row["instellingenCSS"]. "</span><tr><td>" . $row["instellingenId"]. "</td><td>" . $row["instellingenEmail"]. "</td><td    ><div style='background-color: " . $row["instellingenCSS"]. "; width: 80%; height: 25px;'></div></td><td>" . $row["instellingenBedanktpagina"]. "</td><td style='float: right; width: 100%;'><a class='btn btn-danger' href='/bvdo/php/delete.php?delete_id=" . $row["instellingenId"]. "&tbl_name=tblInstellingen' style='float:right;'>Verwijderen</a><a class='btn btn-default' data-toggle='modal' data-target='#editInstellingen' style='float:right; margin-right: 5px;'>Aanpassen</a> </td>";
                        }
                    } else {

                    }   
              ?>
          </table>
        </div>
        </div>
    </div>
    </div></div>
<?php
include("includes/footer.php");
?>