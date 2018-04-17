<?php
    $sql = "SELECT websiteId, websiteNaam FROM tblWebsite";
    $resultaten = $db->query($sql);
    $websiteCounter = 0;
    if ($resultaten->num_rows > 0) {
        // output data of each row
        while($row = $resultaten->fetch_assoc()) {
            $websiteCounter++;
        }
    } else {
        echo "0 results";
    }
?>
<?php
    $sqlUsers = "SELECT usersId, usersUsername, usersPassword FROM tblUsers";
    $resultatenUsers = $db->query($sqlUsers);
    $usersCounter = 0;
    if ($resultatenUsers->num_rows > 0) {
        // output data of each row
        while($row = $resultatenUsers->fetch_assoc()) {
            $usersCounter++;
        }
    } else {
        echo "0 results";
    }
?>
<?php
    $sqlInzendingen = "SELECT inzendingId FROM tblInzending";
    $resultatenInzendingen = $db->query($sqlInzendingen);
    $sqlConf = "SELECT opzoekId FROM tblOpzoek";
    $resultatenConf = $db->query($sqlConf);
    $sqlConfKleur = "SELECT kleurId FROM tblKleur";
    $resultatenConfKleur = $db->query($sqlConfKleur);
    $sqlConfDakbedekking = "SELECT dakbedekkingId FROM tblDakbedekking";
    $resultatenConfDakbedekking = $db->query($sqlConfDakbedekking);
    $sqlConfZonwering = "SELECT zonweringId FROM tblZonwering";
    $resultatenConfZonwering = $db->query($sqlConfZonwering);
    $sqlConfMontage = "SELECT montageId FROM tblMontage";
    $resultatenConfMontage = $db->query($sqlConfMontage);
    $confCounter = 0;
    $inzendingenCounter = 0;
    if ($resultatenConf->num_rows > 0) {
        // output data of each row
        while($row = $resultatenConf->fetch_assoc()) {
            $confCounter++;
        }
    } if ($resultatenConfKleur->num_rows > 0) {
        // output data of each row
        while($row = $resultatenConfKleur->fetch_assoc()) {
            $confCounter++;
        }
    } if ($resultatenConfDakbedekking->num_rows > 0) {
        // output data of each row
        while($row = $resultatenConfDakbedekking->fetch_assoc()) {
            $confCounter++;
        }
    } if ($resultatenConfZonwering->num_rows > 0) {
        // output data of each row
        while($row = $resultatenConfZonwering->fetch_assoc()) {
            $confCounter++;
        }
    } if ($resultatenConfMontage->num_rows > 0) {
        // output data of each row
        while($row = $resultatenConfMontage->fetch_assoc()) {
            $confCounter++;
        }
    } if ($resultatenInzendingen->num_rows > 0) {
        // output data of each row
        while($row = $resultatenInzendingen->fetch_assoc()) {
            $inzendingenCounter++;
        }
    }
?>
   <div class="col-md-3">
    <div class="list-group">
      <a href="#" class="list-group-item active main-color-bg">
        Dashboard
      </a>
      <a href="pages.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Websites <span class="badge"><?php echo $websiteCounter; ?></span></a>
      <a href="pages.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Configuraties <span class="badge"><?php echo $confCounter; ?></span></a>
      <a href="users.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Gebruikers <span class="badge"><?php echo $usersCounter; ?></span></a>
    </div>
    <div class="well">
       <h4>Schijfruimte gebruikt</h4>
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
            <?php
            /* get disk space free (in bytes) */
            $df = disk_free_space("/");
            /* and get disk space total (in bytes)  */
            $dt = disk_total_space("/");
            /* now we calculate the disk space used (in bytes) */
            $du = $dt - $df;
            /* percentage of disk used - this will be used to also set the width % of the progress bar */
            $dp = sprintf('%.2f',($du / $dt) * 100);

            /* and we formate the size from bytes to MB, GB, etc. */
            $df = formatSize($df);
            $du = formatSize($du);
            $dt = formatSize($dt);

            function formatSize( $bytes )
            {
                    $types = array( 'B', 'KB', 'MB', 'GB', 'TB' );
                    for( $i = 0; $bytes >= 1024 && $i < ( count( $types ) -1 ); $bytes /= 1024, $i++ );
                            return( round( $bytes, 2 ) . " " . $types[$i] );
            }
            
            echo $dp."%";
            ?>
          </div>
        </div>
        <h4>Datum</h4>
        <div>
            <?php
                $datum = date("j F Y");
                $dagvanweek = date("l");
                $arraydag = array(
                "Zondag",
                "Maandag",
                "Dinsdag",
                "Woensdag",
                "Donderdag",
                "Vrijdag",
                "Zaterdag"
                );
                $dagvanweek = $arraydag[date("w")];
                $arraymaand = array(
                "Januari",
                "Februari",
                "Maart",
                "April",
                "Mei",
                "Juni",
                "Juli",
                "Augustus",
                "September",
                "Oktober",
                "November",
                "December"
                );
                $datum = date("j ") . $arraymaand
                [date("n") - 1] . date(" Y");
                echo "$dagvanweek, $datum";   
            ?>
        </div>
    </div>
</div>