<!-- Include header -->
<?php 
$page_title = "Dashboard";
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
                        <h3 class="panel-title">CMS Overzicht</h3>
                      </div>
                      <div class="panel-body">
                        <div class="col-md-3">
                            <div class="well dash-box">
                                <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $usersCounter; ?></h2>
                                <h4>Gebruikers</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="well dash-box">
                                <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <?php echo $websiteCounter; ?></h2>
                                <h4>Websites</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="well dash-box">
                                <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> <?php echo $confCounter; ?></h2>
                                <h4>Configuraties</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="well dash-box">
                                <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> <?php echo $inzendingenCounter; ?></h2>
                                <h4>Inzendingen</h4>
                            </div>
                        </div>
                      </div>
                    </div>
                    <!-- Laatste gebruikers -->
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">Gebruikers</h3>
                      </div>
                      <div class="panel-body">
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Gebruikersnaam</th>
                            </tr>
                            <?php
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<tr><td>" . $row["usersId"]. "</td><td>" . $row["usersUsername"]. "</td></tr>";
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
    
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>

    <?php include('includes/footer.php'); ?>
