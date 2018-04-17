<!-- Pagina toevoegen -->
<div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <form action="php/new.php?id=website" method="post">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Website toevoegen</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Website Naam</label>
            <input type="text" name="websitenaam" class="form-control" placeholder="Website naam">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sluiten</button>
        <button type="submit" name="submit" class="btn btn-primary">Gegevens opslaan</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- Gebruiker toevoegen -->
<div class="modal fade" id="addUsers" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <form action="php/new.php?id=user" method="post">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Gebruiker toevoegen</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Gebruikersnaam</label>
            <input type="text" name="gebruikersnaam" class="form-control" placeholder="Gebruikersnaam">
        </div>
          <div class="form-group">
            <label>Wachtwoord</label>
            <input type="text" name="wachtwoord" class="form-control" placeholder="Wachtwoord">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sluiten</button>
        <button type="submit" name="submit" class="btn btn-primary">Gegevens opslaan</button>
      </div>
    </form>
    </div>
  </div>
</div>
   
<!-- Type toevoegen-->
<div class="modal fade" id="addType" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <form action="php/new.php?website_naam=<?php echo $websiteNaam ?>&tbl_name=tblOpzoek" method="post" id="formTypeToevoegen" enctype="multipart/form-data">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Type toevoegen</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Type Naam</label>
            <input type="text" id="typeNaamToevoegen" name="typeNaamToevoegen" class="form-control" >
        </div>
        <div class="form-group">
            <label>Type Waarde</label>
            <input type="text" id="typeWaardeToevoegen" name="typeWaardeToevoegen" class="form-control" >
        </div>
        <div class="form-group">
            <label>Type Afbeelding</label>
            <input class="input-group" type="file" id="videoUploadFile" name="user_image" accept="image/*" />
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sluiten</button>
        <button type="submit" name="submit" class="btn btn-primary">Gegevens opslaan</button>
      </div>
    </form>
    </div>
  </div>
</div>
    
<!-- Type bewerken -->
<div class="modal fade" id="editType" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <form action="php/edit.php?id=type" method="post" id="formTypeBewerken" enctype="multipart/form-data">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Type bewerken</h4>
      </div>
      <div class="modal-body">
       <div class="form-group">
            <label>Type ID</label>
            <input type="text" id="typeId" name="typeid" class="form-control" readonly="readonly">
        </div>
        <div class="form-group">
            <label>Type Naam</label>
            <input type="text" id="typeNaam" name="typenaam" class="form-control" >
        </div>
        <div class="form-group">
            <label>Type Waarde</label>
            <input type="text" id="typeWaarde" name="typewaarde" class="form-control" >
        </div>
        <div class="form-group">
            <label>Type Afbeelding</label>
            <input class="input-group" type="file" id="videoUploadFile" name="user_image" accept="image/*" />
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sluiten</button>
        <button type="submit" id="btnSave" name="submit" class="btn btn-primary">Gegevens opslaan</button>
      </div>
    </form>
    </div>
  </div>
</div>
   
<!-- Kleur toevoegen -->
<div class="modal fade" id="addKleur" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <form action="php/new.php?website_naam=<?php echo $websiteNaam ?>&tbl_name=kleur" method="post" id="formTypeToevoegen" enctype="multipart/form-data">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Kleur toevoegen</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Kleur Naam</label>
            <input type="text" id="typeNaamToevoegen" name="kleurNaamToevoegen" class="form-control" >
        </div>
        <div class="form-group">
            <label>Kleur Waarde</label>
            <input type="text" id="typeWaardeToevoegen" name="kleurWaardeToevoegen" class="form-control" >
        </div>
        <div class="form-group">
            <label>Kleur Afbeelding</label>
            <input class="input-group" type="file" id="videoUploadFile" name="user_image" accept="image/*" />
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sluiten</button>
        <button type="submit" name="submit" class="btn btn-primary">Gegevens opslaan</button>
      </div>
    </form>
    </div>
  </div>
</div>
   
<!-- Kleur bewerken -->
<div class="modal fade" id="editKleur" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <form action="php/edit.php?id=kleur" method="post" id="formTypeBewerken" enctype="multipart/form-data">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Kleur bewerken</h4>
      </div>
      <div class="modal-body">
       <div class="form-group">
            <label>Kleur ID</label>
            <input type="text" id="kleurId" name="kleurid" class="form-control" readonly="readonly">
        </div>
        <div class="form-group">
            <label>Kleur Naam</label>
            <input type="text" id="kleurNaam" name="kleurnaam" class="form-control" >
        </div>
        <div class="form-group">
            <label>Kleur Waarde</label>
            <input type="text" id="kleurWaarde" name="kleurwaarde" class="form-control" >
        </div>
        <div class="form-group">
            <label>Kleur Afbeelding</label>
            <input class="input-group" type="file" id="videoUploadFile" name="user_image" accept="image/*" />
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sluiten</button>
        <button type="submit" id="btnSave" name="submit" class="btn btn-primary">Gegevens opslaan</button>
      </div>
    </form>
    </div>
  </div>
</div>
   
<!-- Dakbedekking toevoegen -->
<div class="modal fade" id="addDakbedekking" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <form action="php/new.php?website_naam=<?php echo $websiteNaam ?>&tbl_name=dakbedekking" method="post" id="formTypeToevoegen" enctype="multipart/form-data">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Dakbedekking toevoegen</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Dakbedekking Naam</label>
            <input type="text" id="typeNaamToevoegen" name="dakbedekkingNaamToevoegen" class="form-control" >
        </div>
        <div class="form-group">
            <label>Dakbedekking Waarde</label>
            <input type="text" id="typeWaardeToevoegen" name="dakbedekkingWaardeToevoegen" class="form-control" >
        </div>
        <div class="form-group">
            <label>Dakbedekking Afbeelding</label>
            <input class="input-group" type="file" id="videoUploadFile" name="user_image" accept="image/*" />
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sluiten</button>
        <button type="submit" name="submit" class="btn btn-primary">Gegevens opslaan</button>
      </div>
    </form>
    </div>
  </div>
</div>
   
<!-- Dakbedekking bewerken -->
<div class="modal fade" id="editDakbedekking" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <form action="php/edit.php?id=dakbedekking" method="post" id="formTypeBewerken" enctype="multipart/form-data">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Dakbedekking bewerken</h4>
      </div>
      <div class="modal-body">
       <div class="form-group">
            <label>Dakbedekking ID</label>
            <input type="text" id="dakbedekkingId" name="dakbedekkingid" class="form-control" readonly="readonly">
        </div>
        <div class="form-group">
            <label>Dakbedekking Naam</label>
            <input type="text" id="dakbedekkingNaam" name="dakbedekkingnaam" class="form-control" >
        </div>
        <div class="form-group">
            <label>Dakbedekking Waarde</label>
            <input type="text" id="dakbedekkingWaarde" name="dakbedekkingwaarde" class="form-control" >
        </div>
        <div class="form-group">
            <label>Dakbdekking Afbeelding</label>
            <input class="input-group" type="file" id="videoUploadFile" name="user_image" accept="image/*" />
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sluiten</button>
        <button type="submit" id="btnSave" name="submit" class="btn btn-primary">Gegevens opslaan</button>
      </div>
    </form>
    </div>
  </div>
</div>
   
<!-- Zonwering toevoegen -->
<div class="modal fade" id="addZonwering" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <form action="php/new.php?website_naam=<?php echo $websiteNaam ?>&tbl_name=zonwering" method="post" id="formTypeToevoegen" enctype="multipart/form-data">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Zonwering toevoegen</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Zonwering Naam</label>
            <input type="text" id="typeNaamToevoegen" name="zonweringNaamToevoegen" class="form-control" >
        </div>
        <div class="form-group">
            <label>Zonwering Waarde</label>
            <input type="text" id="typeWaardeToevoegen" name="zonweringWaardeToevoegen" class="form-control" >
        </div>
        <div class="form-group">
            <label>Zonwering Afbeelding</label>
            <input class="input-group" type="file" id="videoUploadFile" name="user_image" accept="image/*" />
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sluiten</button>
        <button type="submit" name="submit" class="btn btn-primary">Gegevens opslaan</button>
      </div>
    </form>
    </div>
  </div>
</div>
   
<!-- Zonwering bewerken -->
<div class="modal fade" id="editZonwering" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <form action="php/edit.php?id=zonwering" method="post" id="formTypeBewerken" enctype="multipart/form-data">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Zonwering bewerken</h4>
      </div>
      <div class="modal-body">
       <div class="form-group">
            <label>Zonwering ID</label>
            <input type="text" id="zonweringId" name="zonweringid" class="form-control" readonly="readonly">
        </div>
        <div class="form-group">
            <label>Zonwering Naam</label>
            <input type="text" id="zonweringNaam" name="zonweringnaam" class="form-control" >
        </div>
        <div class="form-group">
            <label>Zonwering Waarde</label>
            <input type="text" id="zonweringWaarde" name="zonweringwaarde" class="form-control" >
        </div>
        <div class="form-group">
            <label>Zonwering Afbeelding</label>
            <input class="input-group" type="file" id="videoUploadFile" name="user_image" accept="image/*" />
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sluiten</button>
        <button type="submit" id="btnSave" name="submit" class="btn btn-primary">Gegevens opslaan</button>
      </div>
    </form>
    </div>
  </div>
</div>
   
<!-- Montage toevoegen -->
<div class="modal fade" id="addMontage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <form action="php/new.php?website_naam=<?php echo $websiteNaam ?>&tbl_name=montage" method="post" id="formTypeToevoegen" enctype="multipart/form-data">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Montage toevoegen</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Montage Naam</label>
            <input type="text" id="typeNaamToevoegen" name="montageNaamToevoegen" class="form-control" >
        </div>
        <div class="form-group">
            <label>Montage Waarde</label>
            <input type="text" id="typeWaardeToevoegen" name="montageWaardeToevoegen" class="form-control" >
        </div>
        <div class="form-group">
            <label>Montage Afbeelding</label>
            <input class="input-group" type="file" id="videoUploadFile" name="user_image" accept="image/*" />
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sluiten</button>
        <button type="submit" name="submit" class="btn btn-primary">Gegevens opslaan</button>
      </div>
    </form>
    </div>
  </div>
</div>
   
<!-- Montage bewerken -->
<div class="modal fade" id="editMontage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <form action="php/edit.php?id=montage" method="post" id="formTypeBewerken" enctype="multipart/form-data">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Montage bewerken</h4>
      </div>
      <div class="modal-body">
       <div class="form-group">
            <label>Montage ID</label>
            <input type="text" id="montageId" name="montageid" class="form-control" readonly="readonly">
        </div>
        <div class="form-group">
            <label>Montage Naam</label>
            <input type="text" id="montageNaam" name="montagenaam" class="form-control" >
        </div>
        <div class="form-group">
            <label>Montage Waarde</label>
            <input type="text" id="montageWaarde" name="montagewaarde" class="form-control" >
        </div>
        <div class="form-group">
            <label>Montage Afbeelding</label>
            <input class="input-group" type="file" id="videoUploadFile" name="user_image" accept="image/*" />
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sluiten</button>
        <button type="submit" id="btnSave" name="submit" class="btn btn-primary">Gegevens opslaan</button>
      </div>
    </form>
    </div>
  </div>
</div>

<div class="modal fade" id="addInstelling" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <form action="php/new.php?website_naam=<?php echo $websiteNaam ?>&tbl_name=instellingen" method="post" id="formTypeToevoegen" enctype="multipart/form-data">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Instellingen</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>E-mail ontvanger formulier</label>
            <input type="text" id="emailOntvanger" name="emailOntvanger" class="form-control" >
        </div>
        <div class="form-group">
            <label>Kleur formulier</label><br>
            <input type="text" class="formData" id="custom" value="yoyoyo"/>
            <input type="text" class="inputKleur" id="inputKleur" value="yoyoyo" name="inputKleur" style="display: none;"/>
        </div>
        <div class="form-group">
            <label>Bedanktpagina URL</label>
            <input type="text" id="inputBedanktpagina" name="inputBedanktpagina" class="form-control" >
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sluiten</button>
        <button type="submit" name="submit" class="btn btn-primary">Gegevens opslaan</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- Instellingen bewerken -->
<div class="modal fade" id="editInstellingen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <form action="php/edit.php?id=instellingen" method="post" id="formTypeBewerken" enctype="multipart/form-data">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Instellingen bewerken</h4>
      </div>
      <div class="modal-body">
       <div class="modal-body">
        <div class="form-group">
            <label>Instelling ID</label>
            <input type="text" id="instellingId" name="instellingId" class="form-control" readonly="readonly">
        </div>
        <div class="form-group">
            <label>E-mail ontvanger formulier</label>
            <input type="text" id="emailOntvangerEdit" name="emailOntvangerEdit" class="form-control" >
        </div>
        <div class="form-group" id="parentColor">
            <label>Kleur formulier</label><br>
            <input type="text" class="formData" id="customEdit" value="yoyoyo"/>
            <input type="text" class="inputKleur" id="inputKleurEdit" value="yoyoyo" name="inputKleurEdit" style="display: none;"/>
        </div>
        <div class="form-group">
            <label>Bedanktpagina URL</label>
            <input type="text" id="inputBedanktpaginaEdit" name="inputBedanktpaginaEdit" class="form-control" >
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sluiten</button>
        <button type="submit" id="btnSave" name="submit" class="btn btn-primary">Gegevens opslaan</button>
      </div>
    </form>
    </div>
  </div>
</div>

<script>
$( "#custom" ).change(function() {
  var color = $(".sp-preview-inner").css("background-color");
  var colorInput = $(".sp-input").val();
  $(".inputKleur").val(colorInput);
});
$( "#customEdit" ).change(function() {
  var colorEdit = $(".sp-preview-inner").css("background-color");
  var colorInputEdit = $("#parentColor .sp-input").val();
  $("#inputKleurEdit").val(colorInputEdit);
});
</script>
</div>
</div>
</div>
    
    <footer id="footer">
        <p>&copy; Bureau van den Oever</p>
    </footer>
<script src='js/spectrum.js'></script>
<script>
$("#custom").spectrum({
    color: "#f00",
    showInput: true,
    flat: true,
    preferredFormat: "hex",
    palette: [["red", "rgba(0, 255, 0, .5)", "rgb(0, 0, 255)"]]
});
$("#customEdit").spectrum({
    color: "#f00",
    showInput: true,
    flat: true,
    preferredFormat: "hex",
    palette: [["red", "rgba(0, 255, 0, .5)", "rgb(0, 0, 255)"]]
});
$( document ).ready(function() {
    $(".sp-cancel").text("Annuleren");
    $(".sp-choose").text("Kleur kiezen");
    var rowCount = $('#tableInstellingen tr').length;
    if(rowCount == '2') {
        $("#instellingenKnop").css("display", "none");
    } else {
        $("#instellingenKnop").css("display", "block");
    }
});
</script>

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/functions.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.0/jquery.fancybox.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel='stylesheet' href='css/spectrum.css' />
  </body>
</html>