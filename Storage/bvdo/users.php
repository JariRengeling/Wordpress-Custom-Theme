<!-- Include header -->
<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
$page_title = "Gebruikers"; 
include('includes/header.php');
$sql = "SELECT usersId, usersUsername, usersPassword FROM tblUsers";
$result = $db->query($sql);
?>
    
<section id="main">
    <div class="container">
        <div class="row">
            <?php include('includes/dashboard.php'); ?>
            <div class="col-md-9">
               <!-- CMS Overview -->
                <div class="panel panel-default">
                  <div class="panel-heading main-color-bg">
                    <h3 class="panel-title">Gebruikers Overzicht</h3>
                  </div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-12">
                          <a type="button" class="btn btn-primary form-control" data-toggle="modal" data-target="#addUsers">Gebruiker toevoegen</a>
                      </div>
                    </div>
                     <br>
                      <table class="table table-striped table-hover">
                          <tr>
                              <th>Gebruikersnaam</th>
                              <th>Wachtwoord</th>
                              <th></th>
                          </tr>
                          <?php
                              if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<tr id='". $row["usersId"]. "'><td id='row_". $row["usersUsername"]. "'>" . $row["usersUsername"]. "</td><td id='row_". $row["usersPassword"]. "'>" . $row["usersPassword"]. "</td><td style='float: right; width: 100%;'><a class='btn btn-danger' href='/bvdo/php/delete.php?delete_id=" . $row["usersId"]. "&tbl_name=tblUsers' style='float:right;'>Verwijderen</a><a class='btn btn-default' type='button' data-toggle='modal' data-target='#editWebsite' onclick='fillEditFields()' style='float:right; margin-right: 5px;'>Aanpassen</a></td></tr>";
                                    }
                                } else {
                                    echo "0 results";
                                }
                          ?>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Website bewerken -->
<div class="modal fade" id="editWebsite" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <form action="php/edit.php?id=users" method="post">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Gebruiker bewerken</h4>
      </div>
      <div class="modal-body">
       <div class="form-group">
            <label>Website ID</label>
            <input type="text" id="idWebsiteId" name="websiteid" class="form-control" readonly="readonly">
        </div>
        <div class="form-group">
            <label>Gebruikersnaam</label>
            <input type="text" id="idWebsiteNaam" name="websitenaam" class="form-control" >
        </div>
          <div class="form-group">
            <label>Wachtwoord</label>
            <input type="text" id="idGebruikersWachtwoord" name="gebruikerwachtwoord" class="form-control" >
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>
<script>
    $(document).ready(function () {      
         $('tr').click(function (event) {
              var value=$(this).closest('tr').children('td:first').text();
             var value2=$(this).closest('tr').children('td:nth-of-type(2)').text();   
             var value4=$(this).closest('tr').children('td:nth-of-type(3)').text();   
             var value3=$(this).attr('id');
             $('#idWebsiteNaam').val(value);
             $('#idWebsiteId').val(value3);
             $('#idGebruikersWachtwoord').val(value2);
         });
     });
</script>
