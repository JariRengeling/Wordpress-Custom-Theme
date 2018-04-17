<!-- Include header -->
<?php 
$page_title = "Formulier"; 
include("includes/header.php");
if(isset($_GET['test_id']) && !empty($_GET['test_id']))
	{
    $id = $_GET['test_id'];
    $sql = "SELECT opzoekId, websiteId, opzoekName, opzoekValue, opzoekImage from tblOpzoek WHERE websiteId=$id";
    $sqlImage = "SELECT opzoekValue, opzoekImage from tblOpzoek WHERE websiteId=$id";
    $sqlKleur = "SELECT kleurId, websiteId, kleurName, kleurValue, kleurImage from tblKleur WHERE websiteId=$id";
    $sqlKleurImage = "SELECT kleurValue, kleurImage from tblKleur WHERE websiteId=$id";
    $sqlDakbedekking = "SELECT dakbedekkingId, websiteId, dakbedekkingNaam, dakbedekkingValue, dakbedekkingImage from tblDakbedekking WHERE websiteId=$id";
    $sqlDakbedekkingImage = "SELECT dakbedekkingValue, dakbedekkingImage from tblDakbedekking WHERE websiteId=$id";
    $sqlZonwering = "SELECT zonweringId, websiteId, zonweringNaam, zonweringValue, zonweringImage from tblzonwering WHERE websiteId=$id";
    $sqlZonweringImage = "SELECT zonweringValue, zonweringImage from tblzonwering WHERE websiteId=$id";
    $sqlMontage = "SELECT montageId, websiteId, montageNaam, montageValue, montageImage from tblmontage WHERE websiteId=$id";
    $sqlWebsite = "SELECT websiteNaam FROM tblWebsite WHERE websiteId=$id";
    $sqlInstellingen = "SELECT instellingenCSS FROM tblInstellingen WHERE websiteId=$id";

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
    if($db->query($sqlImage)->num_rows > 0) {
        $resultImage = $db->query($sqlImage);
    }
    if($db->query($sqlKleurImage)->num_rows > 0) {
        $resultKleurImage = $db->query($sqlKleurImage);
    }
    if($db->query($sqlDakbedekkingImage)->num_rows > 0) {
        $resultDakbdekkingImage = $db->query($sqlDakbedekkingImage);
    }
    if($db->query($sqlZonweringImage)->num_rows > 0) {
        $resultZonweringImage = $db->query($sqlZonweringImage);
    }
    if($db->query($sqlWebsite)->num_rows > 0) {
        $resultWebsite = $db->query($sqlWebsite);
    }
    if($db->query($sqlInstellingen)->num_rows > 0) {
        $resultInstellingen = $db->query($sqlInstellingen);
    }
    if ($resultWebsite->num_rows > 0) {
        // output data of each row
        while($row = $resultWebsite->fetch_assoc()) {
            $websiteNaam = $row["websiteNaam"];
        }
    } else {
        
    } 
    if ($resultInstellingen->num_rows > 0) {
        // output data of each row
        while($row = $resultInstellingen->fetch_assoc()) {
            $knopKleur = $row["instellingenCSS"];
        }
    } else {
        
    } 
}
?>
    
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="padding-bottom: 100px;">
               <!-- CMS Overview -->
                <div class="panel panel-default">
                  <div class="panel-heading main-color-bg">
                    <h3 class="panel-title"><?php echo $websiteNaam; ?> Offerte Formulier</h3>
                  </div>
                  <div class="panel-body">
                    <div class="col-md-6">
                        <form action="mail/mail.php?website_naam=<?php echo $websiteNaam; ?>" method="post">
                          <div class="form-group">
                            <label for="exampleSelect1">Ik ben op zoek naar een:</label>
                            <select class="form-control" id="exampleSelect1" name="typeSelect">
                             <option selected="selected">Selecteer een type</option>
                              <?php
                                          if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                    echo "<option value='".$row["opzoekValue"]."'>" . $row["opzoekName"]. "</option>";
                                                }
                                            } else {
                                                
                                            }   
                                      ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" style="width: 59%;">Breedte (mm)</label>
                            <label for="exampleInputEmail1" style="">Diepte(mm)</label>
                            <input type="number" class="form-control" name="inputBreedte" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Vul de breedte in" style="display: inline-block; width: 40%; margin-right: 18%;">
                            <input type="number" class="form-control" name="inputDiepte" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Vul de diepte in" style="display: inline-block; width: 40%;">
                          </div>
                          <div class="form-group">
                            <label for="exampleSelect1">Kleurstelling:</label>
                            <select class="form-control" id="exampleSelect2" name="colorSelect">
                             <option selected="selected">Selecteer een kleur</option>
                              <?php
                                          if ($resultKleur->num_rows > 0) {
                                                // output data of each row
                                                while($row = $resultKleur->fetch_assoc()) {
                                                    echo "<option value='".$row["kleurValue"]."' class='".$row["kleurValue"]."'>" . $row["kleurName"]. "</option>";
                                                }
                                            } else {
                                               
                                            }   
                                      ?>
                                <option value="Weet_niet">Weet niet</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleSelect1">Dakbedekking:</label>
                            <select class="form-control" id="exampleSelect3" name="dakbedekkingSelect">
                             <option selected="selected">Kies een dakbedekking</option>
                              <?php
                                          if ($resultDakbedekking->num_rows > 0) {
                                                // output data of each row
                                                while($row = $resultDakbedekking->fetch_assoc()) {
                                                    echo "<option value='".$row["dakbedekkingValue"]."' class='".$row["dakbedekkingValue"]."'>" . $row["dakbedekkingNaam"]. "</option>";
                                                }
                                            } else {
                                                
                                            }   
                                      ?>
                                <option value="Weet_niet">Weet niet</option>
                            </select>
                          </div>
                          <div class="form-group" id="form-zonwering">
                            <label for="exampleSelect1">Zonwering:</label>
                            <select class="form-control" id="exampleSelect4" name="zonweringSelect">
                             <option selected="selected">Kies een zonwering</option>
                              <?php
                                          if ($resultZonwering->num_rows > 0) {
                                                // output data of each row
                                                while($row = $resultZonwering->fetch_assoc()) {
                                                    echo "<option value='".$row["zonweringValue"]."' class='".$row["zonweringValue"]."'>" . $row["zonweringNaam"]. "</option>";
                                                }
                                            } else {
                                                
                                            }   
                                      ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleSelect1">Montage:</label>
                            <select class="form-control" id="exampleSelect5" name="montageSelect">
                             <option selected="selected">Kies een montage mogelijkheid</option>
                              <?php
                                          if ($resultMontage->num_rows > 0) {
                                                // output data of each row
                                                while($row = $resultMontage->fetch_assoc()) {
                                                    echo "<option value='".$row["montageValue"]."' class='".$row["montageValue"]."'>" . $row["montageNaam"]. "</option>";
                                                }
                                            } else {
                                                
                                            }   
                                      ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleSelect1">Wanneer plaatsen:</label>
                            <select class="form-control" id="exampleSelect6" name="wanneerSelect">
                             <option selected="selected">Kies een mogelijke datum</option>
                              <option value="Binnen_een_maand">Binnen een maand</option>
                              <option value="Binnen_drie_maanden">Binnen drie maanden</option>
                              <option value="Weet_niet">Weet niet</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleSelect1">Vraag of opmerking</label>
                            <textarea class="form-control" name="inputVraag"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleSelect1">Naam</label>
                            <input type="text" class="form-control" name="inputNaam">
                          </div>
                          <div class="form-group">
                            <label for="exampleSelect1">Adres</label>
                            <input type="text" class="form-control" name="inputAdres">
                          </div>
                          <div class="form-group">
                            <label for="exampleSelect1">Postcode</label>
                            <input type="text" class="form-control" name="inputPostcode">
                          </div>
                          <div class="form-group">
                            <label for="exampleSelect1">Woonplaats</label>
                            <input type="text" class="form-control" name="inputWoonplaats">
                          </div>
                          <div class="form-group">
                            <label for="exampleSelect1">Telefoonnummer</label>
                            <input type="text" class="form-control" name="inputTelefoonnummer">
                          </div>
                          <div class="form-group">
                            <label for="exampleSelect1">E-mail</label>
                            <input type="text" class="form-control" name="inputEmail">
                          </div>
                          <button type="submit" name="send" class="btn btn-primary" style="border: none!important; background-color: <?php echo $knopKleur  ; ?>">Verzenden</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <?php
                  if ($resultImage->num_rows > 0) {
                        // output data of each row
                        while($row = $resultImage->fetch_assoc()) {
                            echo "<img style='display :none; width: 100%; height: auto;' class='onzichtbaar' id='".$row["opzoekValue"]."' src='php/user_images/".$row["opzoekImage"]."'>";
                        }
                    } else {
                        
                    }   
              ?>
                     <?php
                  if ($resultKleurImage->num_rows > 0) {
                        // output data of each row
                        while($row = $resultKleurImage->fetch_assoc()) {
                            echo "<img style='display :none; width: 100%; height: auto;' class='onzichtbaarkleur' id='".$row["kleurValue"]."' src='php/user_images/".$row["kleurImage"]."'>";
                        }
                    } else {
                        
                    }   
              ?>
                     <?php
                  if ($resultDakbdekkingImage->num_rows > 0) {
                        // output data of each row
                        while($row = $resultDakbdekkingImage->fetch_assoc()) {
                            echo "<img style='display :none; width: 100%; height: auto;' class='onzichtbaardakbedekking' id='".$row["dakbedekkingValue"]."' src='php/user_images/".$row["dakbedekkingImage"]."'>";
                        }
                    } else {
                        
                    }   
              ?>
                     <?php
                  if ($resultZonweringImage->num_rows > 0) {
                        // output data of each row
                        while($row = $resultZonweringImage->fetch_assoc()) {
                            echo "<img style='display :none; width: 100%; height: auto;' class='onzichtbaarzonwering' id='".$row["zonweringValue"]."' src='php/user_images/".$row["zonweringImage"]."'>";
                        }
                    } else {
                        
                    }   
              ?>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
$(document).ready(function(){ 
    $('.onzichtbaar').css("display","none");
    $('.onzichtbaarkleur').css("display","none");
    $('#exampleSelect1').on('change', function() {
        $('.onzichtbaar').css("display","none");
          var fotoid = '#'+this.value;
          $( fotoid ).css( "display", "block" );
        $('#exampleSelect2').prop('selectedIndex',0);
        $('#exampleSelect3').prop('selectedIndex',0);
        $('#exampleSelect4').prop('selectedIndex',0);
        $('.onzichtbaarkleur').css("display","none");
        $('.onzichtbaardakbedekking').css("display","none");
        $('.onzichtbaarzonwering').css("display","none");
        });
    $('#exampleSelect2').on('change', function() {
        $('.onzichtbaarkleur').css("display","none");
          var fotoid = '#'+this.value;
          $( fotoid ).css( "display", "block" );
        });
    $('#exampleSelect3').on('change', function() {
        $('.onzichtbaardakbedekking').css("display","none");
          var fotoid = '#'+this.value;
          $( fotoid ).css( "display", "block" );
        });
    $('#exampleSelect4').on('change', function() {
        $('.onzichtbaarzonwering').css("display","none");
          var fotoid = '#'+this.value;
          $( fotoid ).css( "display", "block" );
        });
});
</script>
<?php include('includes/footer.php'); ?>
