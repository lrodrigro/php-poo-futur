<?php

$presentTime = new Datetime('NOW'); 
$destinationTime = new Datetime('1985-05-23 07:03');

//$destinationTime->modify( '+1002 day' );

$yearPre   = $presentTime->format('Y');
$mountPre  = strtoupper($presentTime->format('M'));
$dayPre    = $presentTime->format('d');
$pmPre     = $presentTime->format('A');
$hourPre   = $presentTime->format('h');
$minutePre = $presentTime->format('i');

$yearDes   = $destinationTime->format('Y');
$mountDes  = strtoupper($destinationTime->format('M'));
$dayDes    = $destinationTime->format('d');
$pmDes     =  $destinationTime->format('A');
$hourDes   =  $destinationTime->format('h');
$minuteDes =  $destinationTime->format('i');

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>title</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="watch">
            <div class="container">
                <div class="row">                
                    <div class="col-lg-1 box-title" ><?php echo "Mois"; ?></div>
                    <div class="col-lg-1 box-title"><?php echo "Jour"; ?></div>
                    <div class="col-lg-1 box-title"><?php echo "Année"; ?></div>
                    <div class="col-lg-1 box-title"><?php echo "PM/AM"; ?></div>
                    <div class="col-lg-1 box-title"><?php echo "Heure"; ?></div>               
                    <div class="col-lg-1 box-title"><?php echo "Minute"; ?></div>               
                </div>
            </div>
            <div class="container" style="margin-top:10px">
                <div class="row">                
                    <div class="col-lg-1 box-date-pre"><?php echo $mountPre; ?></div>
                    <div class="col-lg-1 box-date-pre"><?php echo $dayPre; ?></div>
                    <div class="col-lg-1 box-date-pre"><?php echo $yearPre; ?></div>
                    <div class="col-lg-1 box-date-pre"><?php echo $pmPre; ?></div>
                    <div class="col-lg-1 box-date-pre"><?php echo $hourPre; ?></div>               
                    <div class="col-lg-1 box-date-pre"><?php echo $minutePre; ?></div>               
                </div>
                <div class="row">                
                    <div class="col-lg-7 center">
                        <span class="title"><?php echo "Temps présent"; ?></span>
                    </div>         
                </div>
            </div>        
            <div style="margin-top:20px">
            </div>
            <div class="container">
                <div class="row">                
                    <div class="col-lg-1 box-title"><?php echo "Mois"; ?></div>
                    <div class="col-lg-1 box-title"><?php echo "Jour"; ?></div>
                    <div class="col-lg-1 box-title"><?php echo "Année"; ?></div>
                    <div class="col-lg-1 box-title"><?php echo "PM/AM"; ?></div>
                    <div class="col-lg-1 box-title"><?php echo "Heure"; ?></div>               
                    <div class="col-lg-1 box-title"><?php echo "Minute"; ?></div>               
                </div>
            </div>
            <div class="container" style="margin-top:10px">
                <div class="row">                
                    <div class="col-lg-1 box-date-des"><?php echo $mountDes; ?></div>
                    <div class="col-lg-1 box-date-des"><?php echo $dayDes; ?></div>
                    <div class="col-lg-1 box-date-des"><?php echo $yearDes; ?></div>
                    <div class="col-lg-1 box-date-des"><?php echo $pmDes; ?></div>
                    <div class="col-lg-1 box-date-des"><?php echo $hourDes; ?></div>               
                    <div class="col-lg-1 box-date-des"><?php echo $minuteDes; ?></div>               
                </div>
                <div class="row">                
                    <div class="col-lg-7 center">
                    <span class="title"><?php echo "Temps destination"; ?></span>
                    </div>         
                </div>
            </div>
        </div>
    </body>
</html>