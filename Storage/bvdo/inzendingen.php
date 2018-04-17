<!-- Include header -->
<?php 
$page_title = "Inzendingen"; 
include('includes/header.php');
$sql = "SELECT inzendingId, websiteNaam, Email FROM tblInzending";
$sql2 = "SELECT * FROM tblInzending";
$result = $db->query($sql);
$result2 = $db->query($sql2);
?>
    
<section id="main">
    <div class="container">
        <div class="row">
            <?php include('includes/dashboard.php'); ?>
            <div class="col-md-9">
               <!-- CMS Overview -->
                <div class="panel panel-default">
                  <div class="panel-heading main-color-bg">
                    <h3 class="panel-title">Inzendingen Overzicht</h3>
                  </div>
<div class="panel-body">
  <table class="table table-striped table-hover">
      <tr>
          <th>Website</th>
          <th>E-mail</th>
          <th></th>
          <th></th>
      </tr>
      <?php
          if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr id='". $row["inzendingId"]. "'><td id='row_". $row["websiteNaam"]. "'>" . $row["websiteNaam"]. "</td><td id='row_". $row["Email"]. "'>" . $row["Email"]. "</td><td></td><td style='float: right; width: 100%;'><a class='btn btn-primary' id='". $row["inzendingId"]. "' type='button' data-toggle='modal' data-target='#model". $row["inzendingId"]. "' style='float:right; margin-right: 5px;'>Selecteren</a> </td></ tr>";
                }
            } else {
              
            }
      ?>
  </table>
</div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
if ($result2->num_rows > 0) {
        // output data of each row
        while($row = $result2->fetch_assoc()) {
            echo "<div class='modal fade' id='model". $row["inzendingId"]. "' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
     <form action='php/edit.php?id=type' method='post' id='formTypeBewerken' enctype='multipart/form-data'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
        <h4 class='modal-title' id='myModalLabel'>Offerteaanvraag voor ". $row["websiteNaam"]. "</h4>
      </div>
      <div class='modal-body'>
      <table id='customers'>
  <tr>
    <th>Offerteaanvraag</th>
    <th></th>
  </tr>
  <tr>
    <td>Type</td>
    <td>". $row ["Type"]."</td>
  </tr>
  <tr>
    <td>Breedte</td>
    <td>". $row ["Breedte"]." mm</td>
  </tr>
  <tr>
    <td>Diepte</td>
    <td>". $row ["Diepte"]." mm</td>
  </tr>
  <tr>
    <td>Kleurstelling</td>
    <td>". $row ["Kleurstelling"]."</td>
  </tr>
  <tr>
    <td>Dakbedekking</td>
    <td>". $row ["Dakbedekking"]."</td>
  </tr>
  <tr>
    <td>Zonwering</td>
    <td>". $row ["Zonwering"]."</td>
  </tr>
  <tr>
    <td>Montage</td>
    <td>". $row ["Montage"]."</td>
  </tr>
  <tr>
    <td>Datum</td>
    <td>". $row ["Datum"]."</td>
  </tr>
  <tr>
    <td>Vraag of opmerking</td>
    <td>". $row ["Vraag"]."</td>
  </tr>
  <tr>
    <th>Contactgegevens</th>
    <th></th>
  </tr>
  <tr>
    <td>Naam</td>
    <td>". $row ["Naam"]."</td>
  </tr>
  <tr>
    <td>Adres</td>
    <td>". $row ["Adres"]."</td>
  </tr>
  <tr>
    <td>Postcode</td>
    <td>". $row ["Postcode"]."</td>
  </tr>
  <tr>
    <td>Woonplaats</td>
    <td>". $row ["Woonplaats"]."</td>
  </tr>
  <tr>
    <td>Telefoonnummer</td>
    <td>". $row ["Telefoonnummer"]."</td>
  </tr>
  <tr>
    <td>Email</td>
    <td>". $row ["Email"]."</td>
  </tr>
</table>
        </div>
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-default' data-dismiss='modal'>Sluiten</button>
      </div>
    </form>
    </div>
  </div>
</div>";
        }
    } else {
        
    }
?>
<!-- Type bewerken -->

<?php include('includes/footer.php'); ?>
