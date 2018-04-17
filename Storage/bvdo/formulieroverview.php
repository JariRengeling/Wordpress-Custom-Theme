<!-- Include header -->
<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
$page_title = "Formulieren"; 
include('includes/header.php');
$sql = "SELECT websiteId, websiteNaam FROM tblWebsite";
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
                    <h3 class="panel-title">Formulieren Overzicht</h3>
                  </div>
                  <div class="panel-body">
                      <table class="table table-striped table-hover">
                          <tr>
                              <th>Naam</th>
                              <th></th>
                          </tr>
                          <?php
                              if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<tr id='". $row["websiteId"]. "'><td id='row_". $row["websiteNaam"]. "'>" . $row["websiteNaam"]. "</td><td style='float: right; width: 100%;'><a class='btn btn-primary' href='formulier.php?test_id=" . $row["websiteId"]. "' style='float:right; margin-right: 5px;'>Selecteren</a> </td></tr>";
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
     <form action="php/edit.php?id=website" method="post">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Website bewerken</h4>
      </div>
      <div class="modal-body">
       <div class="form-group">
            <label>Website ID</label>
            <input type="text" id="idWebsiteId" name="websiteid" class="form-control" readonly="readonly">
        </div>
        <div class="form-group">
            <label>Website Naam</label>
            <input type="text" id="idWebsiteNaam" name="websitenaam" class="form-control" >
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
             var value3=$(this).attr('id');
             $('#idWebsiteNaam').val(value);
             $('#idWebsiteURL').val(value2);
             $('#idWebsiteId').val(value3);
         });
     });
</script>
