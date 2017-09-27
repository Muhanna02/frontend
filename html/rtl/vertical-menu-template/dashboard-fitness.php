<!DOCTYPE html>
<html lang="en" data-textdirection="rtl" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>نظام متابعة برنامج سكني 280 ألف منتج</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/pace.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/icheck/custom.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/unslider.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/weather-icons/climacons.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/calendars/fullcalendar.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/app.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/custom-rtl.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/plugins/calendars/fullcalendar.css">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/core/menu/menu-types/vertical-overlay-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/core/colors/palette-climacon.css">
    <link rel="stylesheet" type="text/css" href=" ../../../app-assets/css-rtl/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/meteocons/style.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/pages/users.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS NAD JS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/pages/project.css">


    <link rel="stylesheet" type="text/css" href="../../../assets/css/mapsvg.css">

    <script src="../../../assets/js/jquery.js"></script>
    <script src="../../../assets/js/jquery.mousewheel.min.js"></script>
    <script src="../../../assets/js/mapsvg.min.js"></script>
    <!-- END Custom CSS AND JS-->
     <script>

    function getSummary(id)
    {
       $.ajax({

         type: "GET",
         url: 'http://map.sa/dashboard/public/api',
//         data: "id=" + id, // appears as $_GET['id'] @ your backend side
         success: function(data) {
               // data is ur summary
              $('#summary').html(data);
             document.getElementById("villaD").innerHTML=data.ball1villa;
             document.getElementById("villaA").innerHTML=data.ballallo1villa;
             document.getElementById("landingD").innerHTML=data.ball1landing;
             document.getElementById("landingA").innerHTML=data.ballallo1landing;
             document.getElementById("loanD").innerHTML=data.ball1loan;
             document.getElementById("loanA").innerHTML=data.ballallo1loan;
             document.getElementById("mapsaleD").innerHTML=data.ball1mapsaled;
             document.getElementById("mapsaleA").innerHTML=data.ball1mapsalea;
         }

       });

    }
    function getSummary2(id)
    {
       $.ajax({

         type: "GET",
         url: 'http://map.sa/dashboard/public/api',
//         data: "id=" + id, // appears as $_GET['id'] @ your backend side
         success: function(data) {
               // data is ur summary
              $('#summary').html(data);
             document.getElementById("villaD").innerHTML=data.ball2villa;
             document.getElementById("villaA").innerHTML=data.ballallo2villa;
             document.getElementById("landingD").innerHTML=data.ball2landing;
             document.getElementById("landingA").innerHTML=data.ballallo2landing;
             document.getElementById("loanD").innerHTML=data.ball2loan;
             document.getElementById("loanA").innerHTML=data.ballallo2loan;
             document.getElementById("mapsaleD").innerHTML=data.ball2mapsaled;
             document.getElementById("mapsaleA").innerHTML=data.ball2mapsalea;
         }

       });

    }
         
     function getSummary3(id)
    {
       $.ajax({

         type: "GET",
         url: 'http://map.sa/dashboard/public/api',
//         data: "id=" + id, // appears as $_GET['id'] @ your backend side
         success: function(data) {
               // data is ur summary
              $('#summary').html(data);
             document.getElementById("villaD").innerHTML=data.ball3villa;
             document.getElementById("villaA").innerHTML=data.ballallo3villa;
             document.getElementById("landingD").innerHTML=data.ball3landing;
             document.getElementById("landingA").innerHTML=data.ballallo3landing;
             document.getElementById("loanD").innerHTML=data.ball3loan;
             document.getElementById("loanA").innerHTML=data.ballallo3loan;
             document.getElementById("mapsaleD").innerHTML=data.ball3mapsaled;
             document.getElementById("mapsaleA").innerHTML=data.ball3mapsalea;
         }

       });

    }
         
     function getSummary4(id)
    {
       $.ajax({

         type: "GET",
         url: 'http://map.sa/dashboard/public/api',
//         data: "id=" + id, // appears as $_GET['id'] @ your backend side
         success: function(data) {
               // data is ur summary
              $('#summary').html(data);
             document.getElementById("villaD").innerHTML=data.ball4villa;
             document.getElementById("villaA").innerHTML=data.ballallo4villa;
             document.getElementById("landingD").innerHTML=data.ball4landing;
             document.getElementById("landingA").innerHTML=data.ballallo4landing;
             document.getElementById("loanD").innerHTML=data.ball4loan;
             document.getElementById("loanA").innerHTML=data.ballallo4loan;
             document.getElementById("mapsaleD").innerHTML=data.ball4mapsaled;
             document.getElementById("mapsaleA").innerHTML=data.ball4mapsalea;
         }

       });

    }
         
     function getSummary5(id)
    {
       $.ajax({

         type: "GET",
         url: 'http://map.sa/dashboard/public/api',
//         data: "id=" + id, // appears as $_GET['id'] @ your backend side
         success: function(data) {
               // data is ur summary
              $('#summary').html(data);
             document.getElementById("villaD").innerHTML=data.ball5villa;
             document.getElementById("villaA").innerHTML=data.ballallo5villa;
             document.getElementById("landingD").innerHTML=data.ball5landing;
             document.getElementById("landingA").innerHTML=data.ballallo5landing;
             document.getElementById("loanD").innerHTML=data.ball5loan;
             document.getElementById("loanA").innerHTML=data.ballallo5loan;
             document.getElementById("mapsaleD").innerHTML=data.ball5mapsaled;
             document.getElementById("mapsaleA").innerHTML=data.ball5mapsalea;
         }

       });

    }
         
     function getSummary6(id)
    {
       $.ajax({

         type: "GET",
         url: 'http://map.sa/dashboard/public/api',
//         data: "id=" + id, // appears as $_GET['id'] @ your backend side
         success: function(data) {
               // data is ur summary
              $('#summary').html(data);
             document.getElementById("villaD").innerHTML=data.ball6villa;
             document.getElementById("villaA").innerHTML=data.ballallo6villa;
             document.getElementById("landingD").innerHTML=data.ball6landing;
             document.getElementById("landingA").innerHTML=data.ballallo6landing;
             document.getElementById("loanD").innerHTML=data.ball6loan;
             document.getElementById("loanA").innerHTML=data.ballallo6loan;
             document.getElementById("mapsaleD").innerHTML=data.ball6mapsaled;
             document.getElementById("mapsaleA").innerHTML=data.ball6mapsalea;
         }

       });

    }
         
     function getSummary7(id)
    {
       $.ajax({

         type: "GET",
         url: 'http://map.sa/dashboard/public/api',
//         data: "id=" + id, // appears as $_GET['id'] @ your backend side
         success: function(data) {
               // data is ur summary
              $('#summary').html(data);
             document.getElementById("villaD").innerHTML=data.ball7villa;
             document.getElementById("villaA").innerHTML=data.ballallo7villa;
             document.getElementById("landingD").innerHTML=data.ball7landing;
             document.getElementById("landingA").innerHTML=data.ballallo7landing;
             document.getElementById("loanD").innerHTML=data.ball7loan;
             document.getElementById("loanA").innerHTML=data.ballallo7loan;
             document.getElementById("mapsaleD").innerHTML=data.ball7mapsaled;
             document.getElementById("mapsaleA").innerHTML=data.ball7mapsalea;
         }

       });

    }
       
     function getSummary8(id)
    {
       $.ajax({

         type: "GET",
         url: 'http://map.sa/dashboard/public/api',
//         data: "id=" + id, // appears as $_GET['id'] @ your backend side
         success: function(data) {
               // data is ur summary
              $('#summary').html(data);
             document.getElementById("villaD").innerHTML=data.ball8villa;
             document.getElementById("villaA").innerHTML=data.ballallo8villa;
             document.getElementById("landingD").innerHTML=data.ball8landing;
             document.getElementById("landingA").innerHTML=data.ballallo8landing;
             document.getElementById("loanD").innerHTML=data.ball8loan;
             document.getElementById("loanA").innerHTML=data.ballallo8loan;
             document.getElementById("mapsaleD").innerHTML=data.ball8mapsaled;
             document.getElementById("mapsaleA").innerHTML=data.ball8mapsalea;
         }

       });

    }
    
     function getSummary9(id)
    {
       $.ajax({

         type: "GET",
         url: 'http://map.sa/dashboard/public/api',
//         data: "id=" + id, // appears as $_GET['id'] @ your backend side
         success: function(data) {
               // data is ur summary
              $('#summary').html(data);
             document.getElementById("villaD").innerHTML=data.ball9villa;
             document.getElementById("villaA").innerHTML=data.ballallo9villa;
             document.getElementById("landingD").innerHTML=data.ball9landing;
             document.getElementById("landingA").innerHTML=data.ballallo9landing;
             document.getElementById("loanD").innerHTML=data.ball9loan;
             document.getElementById("loanA").innerHTML=data.ballallo9loan;
             document.getElementById("mapsaleD").innerHTML=data.ball9mapsaled;
             document.getElementById("mapsaleA").innerHTML=data.ball9mapsalea;
         }

       });

    }
    
     function getSummary10(id)
    {
       $.ajax({

         type: "GET",
         url: 'http://map.sa/dashboard/public/api',
//         data: "id=" + id, // appears as $_GET['id'] @ your backend side
         success: function(data) {
               // data is ur summary
              $('#summary').html(data);
             document.getElementById("villaD").innerHTML=data.ball10villa;
             document.getElementById("villaA").innerHTML=data.ballallo10villa;
             document.getElementById("landingD").innerHTML=data.ball10landing;
             document.getElementById("landingA").innerHTML=data.ballallo10landing;
             document.getElementById("loanD").innerHTML=data.ball10loan;
             document.getElementById("loanA").innerHTML=data.ballallo10loan;
             document.getElementById("mapsaleD").innerHTML=data.ball10mapsaled;
             document.getElementById("mapsaleA").innerHTML=data.ball10mapsalea;
         }

       });

    }
    function getSummary11(id)
    {
       $.ajax({

         type: "GET",
         url: 'http://map.sa/dashboard/public/api',
//         data: "id=" + id, // appears as $_GET['id'] @ your backend side
         success: function(data) {
               // data is ur summary
              $('#summary').html(data);
             document.getElementById("villaD").innerHTML=data.ball11villa;
             document.getElementById("villaA").innerHTML=data.ballallo11villa;
             document.getElementById("landingD").innerHTML=data.ball11landing;
             document.getElementById("landingA").innerHTML=data.ballallo11landing;
             document.getElementById("loanD").innerHTML=data.ball11loan;
             document.getElementById("loanA").innerHTML=data.ballallo11loan;
             document.getElementById("mapsaleD").innerHTML=data.ball11mapsaled;
             document.getElementById("mapsaleA").innerHTML=data.ball11mapsalea;
         }

       });

    }
    
    function getSummary12(id)
    {
       $.ajax({

         type: "GET",
         url: 'http://map.sa/dashboard/public/api',
//         data: "id=" + id, // appears as $_GET['id'] @ your backend side
         success: function(data) {
               // data is ur summary
              $('#summary').html(data);
             document.getElementById("villaD").innerHTML=data.ball12villa;
             document.getElementById("villaA").innerHTML=data.ballallo12villa;
             document.getElementById("landingD").innerHTML=data.ball12landing;
             document.getElementById("landingA").innerHTML=data.ballallo12landing;
             document.getElementById("loanD").innerHTML=data.ball12loan;
             document.getElementById("loanA").innerHTML=data.ballallo12loan;
             document.getElementById("mapsaleD").innerHTML=data.ball12mapsaled;
             document.getElementById("mapsaleA").innerHTML=data.ball12mapsalea;
         }

       });

    }
    
    </script>
<!--
      <script>
     var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var myObj = JSON.parse(this.responseText);
                document.getElementById("demo1").style.background = myObj.white;        
                document.getElementById("demo2").style.background = myObj.gray;        
                document.getElementById("demo3").style.background = myObj.gray;        
                document.getElementById("demo4").style.background = myObj.gray;        

            }
        };
        xmlhttp.open("GET", "http://localhost:8888/boilerplate/public/api", true);
        xmlhttp.send();
    </script>
-->
    <?php
        $json = file_get_contents('http://map.sa/dashboard/public/api');
        $obj = json_decode($json);
    ?>
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">
<script src="../../../assets/js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script type="text/javascript">
jQuery(document).ready(function(){
jQuery("#mapsvgg").mapSvg({width: 730.13947,height: 600.4032,colors: {baseDefault: "#000000",background: "#eeeeee",selected: 40,hover: 20,stroke: "#d4d4d4"},regions: {'SA-01': {id: "SA-01",'id_no_spaces': "SA-01",title: "Ar Riyāḑ",fill: "rgba(255,227,202,1)",tooltip: "الرياض",popover: "<?php echo $obj->villas_city1; ?>الاراضي :  <?php echo $obj->mapsale_city1; ?>البيع على الخارطه :  <?php echo $obj->landing_city1; ?> الفلل: "},'SA-02': {id: "SA-02",'id_no_spaces': "SA-02",title: "Makkah",fill: "rgba(255,243,218,1)",tooltip: "مكة المكرمة",popover: "<?php echo $obj->villas_city2; ?>الاراضي :  <?php echo $obj->mapsale_city2; ?>البيع على الخارطه :  <?php echo $obj->landing_city2; ?> الفلل: "},'SA-03': {id: "SA-03",'id_no_spaces': "SA-03",title: "Al Madīnah",fill: "rgba(235,237,195,1)",tooltip: "المدينه المنوره",popover: "<?php echo $obj->villas_city3; ?>الاراضي :  <?php echo $obj->mapsale_city3; ?>البيع على الخارطه :  <?php echo $obj->landing_city3; ?> الفلل: "},'SA-04': {id: "SA-04",'id_no_spaces': "SA-04",title: "Ash Sharqīyah",fill: "rgba(252,212,199,1)",tooltip: "الشرقيه ",popover: "<?php echo $obj->villas_city4; ?>الاراضي :  <?php echo $obj->mapsale_city4; ?>البيع على الخارطه :  <?php echo $obj->landing_city4; ?> الفلل: "},'SA-05': {id: "SA-05",'id_no_spaces': "SA-05",title: "Al Qaşīm",fill: "rgba(252,212,199,1)",tooltip: " القصيم",popover: "<?php echo $obj->villas_city5; ?>الاراضي :  <?php echo $obj->mapsale_city5; ?>البيع على الخارطه :  <?php echo $obj->landing_city5; ?> الفلل: "},'SA-06': {id: "SA-06",'id_no_spaces': "SA-06",title: "Ḩā'il",fill: "rgba(255,243,218,1)",tooltip: " حائل",popover: "<?php echo $obj->villas_city6; ?>الاراضي :  <?php echo $obj->mapsale_city6; ?>البيع على الخارطه :  <?php echo $obj->landing_city6; ?> الفلل: "},'SA-07': {id: "SA-07",'id_no_spaces': "SA-07",title: "Tabūk",fill: "rgba(252,212,199,1)",tooltip: "تبوك ",popover: "<?php echo $obj->villas_city7; ?>الاراضي :  <?php echo $obj->mapsale_city7; ?>البيع على الخارطه :  <?php echo $obj->landing_city7; ?> الفلل: "},'SA-08': {id: "SA-08",'id_no_spaces': "SA-08",title: "Al Ḩudūd ash Shamālīyah",fill: "rgba(235,237,195,1)",tooltip: "الحدود الشماليه",popover: "<?php echo $obj->villas_city8; ?>الاراضي :  <?php echo $obj->mapsale_city8; ?>البيع على الخارطه :  <?php echo $obj->landing_city8; ?> الفلل: "},'SA-12': {id: "SA-12",'id_no_spaces': "SA-12",title: "Al Jawf",fill: "rgba(255,227,202,1)",tooltip: " الجوف",popover: "<?php echo $obj->villas_city9; ?>الاراضي :  <?php echo $obj->mapsale_city9; ?>البيع على الخارطه :  <?php echo $obj->landing_city9; ?> الفلل: "},'SA-14': {id: "SA-14",'id_no_spaces': "SA-14",title: "'Asir",fill: "rgba(235,237,195,1)",tooltip: "عسير ",popover: "<?php echo $obj->villas_city10; ?>الاراضي :  <?php echo $obj->mapsale_city10; ?>البيع على الخارطه :  <?php echo $obj->landing_city10; ?> الفلل: "},'SA-10': {id: "SA-10",'id_no_spaces': "SA-10",title: "Najrān",fill: "rgba(255,243,218,1)",tooltip: " نجران",popover: "<?php echo $obj->villas_city11; ?>الاراضي :  <?php echo $obj->mapsale_city11; ?>البيع على الخارطه :  <?php echo $obj->landing_city11; ?> الفلل: "},'SA-11': {id: "SA-11",'id_no_spaces': "SA-11",title: "Al Bāḩah",fill: "rgba(255,227,202,1)",tooltip: " الباحه",popover: "<?php echo $obj->villas_city12; ?>الاراضي :  <?php echo $obj->mapsale_city12; ?>البيع على الخارطه :  <?php echo $obj->landing_city12; ?> الفلل: "},'SA-09': {id: "SA-09",'id_no_spaces': "SA-09",title: "Jīzān",fill: "rgba(255,227,202,1)",tooltip: " جازان",popover: "<?php echo $obj->villas_city14; ?>الاراضي :  <?php echo $obj->mapsale_city13; ?>البيع على الخارطه :  <?php echo $obj->landing_city13; ?> الفلل: "}},viewBox: [0,0,730,600],zoom: {on: true,limit: [0,10],delta: 1.2,buttons: {on: true,location: "right"},mousewheel: false},gauge: {on: false,labels: {low: "low",high: "high"},colors: {lowRGB: {r: 85,g: 0,b: 0,a: 1},highRGB: {r: 238,g: 0,b: 0,a: 1},low: "#550000",high: "#ee0000",diffRGB: {r: 153,g: 0,b: 0,a: 0}},min: 0,max: false},source: "../../../app-assets/images/svg/saudi-arabia.svg",title: "Saudi-arabia",responsive: true});
}); 
</script>
     <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body" id="modal-body">
          <table class="table table-hover mb-0" style="font-family: tahoma">
                        <thead>
                            <tr>
                                <th>الأيام</th>
                                <th>المهمة</th>
                                <th>الحالة</th>
                            </tr>
                        </thead>
                        <?php $icount = count($obj->task1latest);
                            for($i=0;$i <= $icount;$i++){?>
                        <tbody>
                           <tr>
                                <td class="text-truncate"><?php echo $obj->task1latest[$i]->period;?></td>
                               <?php if($obj->task1latest[$i]->task == 1){?>
                                <td class="text-truncate">مخططات</td>
                               <?php }elseif($obj->task1latest[$i]->task == 2){?>
                                <td class="text-truncate">منتجات</td>
                               <?php }elseif($obj->task1latest[$i]->task == 3){?>
                                <td class="text-truncate">بنوك</td>
                                <?php }elseif($obj->task1latest[$i]->task == 4){?>
                                <td class="text-truncate">الوزاره</td>
                                 <?php }elseif($obj->task1latest[$i]->task == 5){?>

                                <td class="text-truncate">اخرى</td>
                               <?php } ?>
                            
                                <?php if($obj->task1latest[$i]->done_notDone == 1){?>
                                <td class="text-truncate"><span class="tag tag-default tag-success">تمت</span></td>
                               <?php }elseif($obj->task1latest[$i]->done_notDone == 2){?>
                                <td class="text-truncate"><span class="tag tag-default tag-danger">لم تتم</span></td>
                                <?php }?>
                            </tr>
                           

                        </tbody>
                        <?php }?>
                    </table>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
   
   
     <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body" id="modal-body">
         
             <table class="table table-hover mb-0" style="font-family: tahoma">
                        <thead>
                            <tr>
                                <th>الأيام</th>
                                <th>المهمة</th>
                                <th>الحالة</th>
                            </tr>
                        </thead>
                        <?php $icount = count($obj->task2latest);
                            for($i=0;$i <= $icount;$i++){?>
                        <tbody>
                           <tr>
                                <td class="text-truncate"><?php echo $obj->task2latest[$i]->period;?></td>
                               <?php if($obj->task2latest[$i]->task == 1){?>
                                <td class="text-truncate">مخططات</td>
                               <?php }elseif($obj->task2latest[$i]->task == 2){?>
                                <td class="text-truncate">منتجات</td>
                               <?php }elseif($obj->task2latest[$i]->task == 3){?>
                                <td class="text-truncate">بنوك</td>
                                <?php }elseif($obj->task2latest[$i]->task == 4){?>
                                <td class="text-truncate">الوزاره</td>
                                 <?php }elseif($obj->task2latest[$i]->task == 5){?>

                                <td class="text-truncate">اخرى</td>
                                <?php } ?>
                                <?php if($obj->task2latest[$i]->done_notDone == 1){?>
                                <td class="text-truncate"><span class="tag tag-default tag-success">تمت</span></td>
                               <?php  }elseif($obj->task2latest[$i]->done_notDone == 2){?>
                                <td class="text-truncate"><span class="tag tag-default tag-danger">لم تتم</span></td>
                                <?php }?>
                            </tr>
                           

                        </tbody>
                        <?php }?>
                    </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
   
   
     <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body" id="modal-body">
          
             <table class="table table-hover mb-0" style="font-family: tahoma">
                        <thead>
                            <tr>
                                <th>الأيام</th>
                                <th>المهمة</th>
                                <th>الحالة</th>
                            </tr>
                        </thead>
                        <?php $icount = count($obj->task3latest);
                            for($i=0;$i <= $icount;$i++){?>
                        <tbody>
                           <tr>
                                <td class="text-truncate"><?php echo $obj->task3latest[$i]->period;?></td>
                               <?php if($obj->task3latest[$i]->task == 1){?>
                                <td class="text-truncate">مخططات</td>
                               <?php }elseif($obj->task3latest[$i]->task == 2){?>
                                <td class="text-truncate">منتجات</td>
                               <?php }elseif($obj->task3latest[$i]->task == 3){?>
                                <td class="text-truncate">بنوك</td>
                                <?php }elseif($obj->task3latest[$i]->task == 4){?>
                                <td class="text-truncate">الوزاره</td>
                                 <?php }elseif($obj->task3latest[$i]->task == 5){?>
                                
                                <td class="text-truncate">اخرى</td>
                                <?php } ?>
                                <?php if($obj->task3latest[$i]->done_notDone == 1){?>
                                <td class="text-truncate"><span class="tag tag-default tag-success">تمت</span></td>
                               <?php  }elseif($obj->task3latest[$i]->done_notDone == 2){?>
                                <td class="text-truncate"><span class="tag tag-default tag-danger">لم تتم</span></td>
                                <?php }?>
                            </tr>
                           

                        </tbody>
                        <?php }?>
                    </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
  
    <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body" id="modal-body">
          
             <table class="table table-hover mb-0" style="font-family: tahoma">
                        <thead>
                            <tr>
                                <th>الأيام</th>
                                <th>المهمة</th>
                                <th>الحالة</th>
                            </tr>
                        </thead>
                        <?php $icount = count($obj->task4latest);
                            for($i=0;$i <= $icount;$i++){?>
                        <tbody>
                           <tr>
                                <td class="text-truncate"><?php echo $obj->task4latest[$i]->period;?></td>
                               <?php if($obj->task4latest[$i]->task == 1){?>
                                <td class="text-truncate">مخططات</td>
                               <?php }elseif($obj->task4latest[$i]->task == 2){?>
                                <td class="text-truncate">منتجات</td>
                               <?php }elseif($obj->task4latest[$i]->task == 3){?>
                                <td class="text-truncate">بنوك</td>
                                <?php }elseif($obj->task4latest[$i]->task == 4){?>
                                <td class="text-truncate">الوزاره</td>
                                 <?php }elseif($obj->task4latest[$i]->task == 5){?>
                                
                                <td class="text-truncate">اخرى</td>
                                <?php } ?>
                                <?php if($obj->task4latest[$i]->done_notDone == 1){?>
                                <td class="text-truncate"><span class="tag tag-default tag-success">تمت</span></td>
                               <?php  }elseif($obj->task4latest[$i]->done_notDone == 2){?>
                                <td class="text-truncate"><span class="tag tag-default tag-danger">لم تتم</span></td>
                                <?php }?>
                            </tr>
                           

                        </tbody>
                        <?php }?>
                    </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
  
    <div class="modal fade" id="myModal5" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body" id="modal-body">
         
             <table class="table table-hover mb-0" style="font-family: tahoma">
                        <thead>
                            <tr>
                                <th>الأيام</th>
                                <th>المهمة</th>
                                <th>الحالة</th>
                            </tr>
                        </thead>
                        <?php $icount = count($obj->task5latest);
                            for($i=0;$i <= $icount;$i++){?>
                        <tbody>
                           <tr>
                                <td class="text-truncate"><?php echo $obj->task5latest[$i]->period;?></td>
                               <?php if($obj->task5latest[$i]->task == 1){?>
                                <td class="text-truncate">مخططات</td>
                               <?php }elseif($obj->task5latest[$i]->task == 2){?>
                                <td class="text-truncate">منتجات</td>
                               <?php }elseif($obj->task5latest[$i]->task == 3){?>
                                <td class="text-truncate">بنوك</td>
                                <?php }elseif($obj->task5latest[$i]->task == 4){?>
                                <td class="text-truncate">الوزاره</td>
                                 <?php }elseif($obj->task5latest[$i]->task == 5){?>
                                
                                <td class="text-truncate">اخرى</td>
                                <?php } ?>
                                <?php if($obj->task5latest[$i]->done_notDone == 1){?>
                                <td class="text-truncate"><span class="tag tag-default tag-success">تمت</span></td>
                               <?php  }elseif($obj->task5latest[$i]->done_notDone == 2){?>
                                <td class="text-truncate"><span class="tag tag-default tag-danger">لم تتم</span></td>
                                <?php }?>
                            </tr>
                           

                        </tbody>
                        <?php }?>
                    </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
  
    <div class="modal fade" id="myModal6" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body" id="modal-body">
          
             <table class="table table-hover mb-0" style="font-family: tahoma">
                        <thead>
                            <tr>
                                <th>الأيام</th>
                                <th>المهمة</th>
                                <th>الحالة</th>
                            </tr>
                        </thead>
                        <?php $icount = count($obj->task6latest);
                            for($i=0;$i <= $icount;$i++){?>
                        <tbody>
                           <tr>
                                <td class="text-truncate"><?php echo $obj->task6latest[$i]->period;?></td>
                               <?php if($obj->task6latest[$i]->task == 1){?>
                                <td class="text-truncate">مخططات</td>
                               <?php }elseif($obj->task6latest[$i]->task == 2){?>
                                <td class="text-truncate">منتجات</td>
                               <?php }elseif($obj->task6latest[$i]->task == 3){?>
                                <td class="text-truncate">بنوك</td>
                                <?php }elseif($obj->task6latest[$i]->task == 4){?>
                                <td class="text-truncate">الوزاره</td>
                                 <?php }elseif($obj->task6latest[$i]->task == 5){?>
                                
                                <td class="text-truncate">اخرى</td>
                                <?php } ?>
                                <?php if($obj->task6latest[$i]->done_notDone == 1){?>
                                <td class="text-truncate"><span class="tag tag-default tag-success">تمت</span></td>
                               <?php  }elseif($obj->task6latest[$i]->done_notDone == 2){?>
                                <td class="text-truncate"><span class="tag tag-default tag-danger">لم تتم</span></td>
                                <?php }?>
                            </tr>
                           

                        </tbody>
                        <?php }?>
                    </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
  
    <div class="modal fade" id="myModal7" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body" id="modal-body">
          
             <table class="table table-hover mb-0" style="font-family: tahoma">
                        <thead>
                            <tr>
                                <th>الأيام</th>
                                <th>المهمة</th>
                                <th>الحالة</th>
                            </tr>
                        </thead>
                        <?php $icount = count($obj->task7latest);
                            for($i=0;$i <= $icount;$i++){?>
                        <tbody>
                           <tr>
                                <td class="text-truncate"><?php echo $obj->task7latest[$i]->period;?></td>
                               <?php if($obj->task7latest[$i]->task == 1){?>
                                <td class="text-truncate">مخططات</td>
                               <?php }elseif($obj->task7latest[$i]->task == 2){?>
                                <td class="text-truncate">منتجات</td>
                               <?php }elseif($obj->task7latest[$i]->task == 3){?>
                                <td class="text-truncate">بنوك</td>
                                <?php }elseif($obj->task7latest[$i]->task == 4){?>
                                <td class="text-truncate">الوزاره</td>
                                 <?php }elseif($obj->task7latest[$i]->task == 5){?>
                                
                                <td class="text-truncate">اخرى</td>
                                <?php } ?>
                                <?php if($obj->task7latest[$i]->done_notDone == 1){?>
                                <td class="text-truncate"><span class="tag tag-default tag-success">تمت</span></td>
                               <?php  }elseif($obj->task7latest[$i]->done_notDone == 2){?>
                                <td class="text-truncate"><span class="tag tag-default tag-danger">لم تتم</span></td>
                                <?php }?>
                            </tr>
                           

                        </tbody>
                        <?php }?>
                    </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
  
    <div class="modal fade" id="myModal8" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body" id="modal-body">
         
             <table class="table table-hover mb-0" style="font-family: tahoma">
                        <thead>
                            <tr>
                                <th>الأيام</th>
                                <th>المهمة</th>
                                <th>الحالة</th>
                            </tr>
                        </thead>
                        <?php $icount = count($obj->task8latest);
                            for($i=0;$i <= $icount;$i++){?>
                        <tbody>
                           <tr>
                                <td class="text-truncate"><?php echo $obj->task8latest[$i]->period;?></td>
                               <?php if($obj->task8latest[$i]->task == 1){?>
                                <td class="text-truncate">مخططات</td>
                               <?php }elseif($obj->task8latest[$i]->task == 2){?>
                                <td class="text-truncate">منتجات</td>
                               <?php }elseif($obj->task8latest[$i]->task == 3){?>
                                <td class="text-truncate">بنوك</td>
                                <?php }elseif($obj->task8latest[$i]->task == 4){?>
                                <td class="text-truncate">الوزاره</td>
                                 <?php }elseif($obj->task8latest[$i]->task == 5){?>
                                
                                <td class="text-truncate">اخرى</td>
                                <?php } ?>
                                <?php if($obj->task8latest[$i]->done_notDone == 1){?>
                                <td class="text-truncate"><span class="tag tag-default tag-success">تمت</span></td>
                               <?php  }elseif($obj->task8latest[$i]->done_notDone == 2){?>
                                <td class="text-truncate"><span class="tag tag-default tag-danger">لم تتم</span></td>
                                <?php }?>
                            </tr>
                           

                        </tbody>
                        <?php }?>
                    </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
   
    <!-- - var navbarShadow = true-->
    <!-- navbar-fixed-top-->
    <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-light bg-gradient-x-grey-blue">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a href="#" class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item"><a href="#" class="navbar-brand">
                <h3 class="brand-text" >نظام متابعة برنامج سكني 280 ألف منتج</h3></a></li>
            <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="fa fa-ellipsis-v"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content container-fluid">
          <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
            <ul class="nav navbar-nav">
              <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="ft-menu"></i></a></li>
              <li class="dropdown nav-item mega-dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link">القائمة الرئيسية</a>
                <ul class="mega-dropdown-menu dropdown-menu row">
                  <li class="col-md-2">
                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="fa fa-newspaper-o"></i> News</h6>
                    <div id="mega-menu-carousel-example">
                      <div><img src="../../../app-assets/images/slider/slider-2.png" alt="First slide" class="rounded img-fluid mb-1"><a href="#" class="news-title mb-0">Poster Frame PSD</a>
                        <p class="news-content"><span class="font-small-2">January 26, 2016</span></p>
                      </div>
                    </div>
                  </li>
                  <li class="col-md-3">
                    <h6 class="dropdown-menu-header text-uppercase"><i class="fa fa-random"></i> Drill down menu</h6>
                    <ul class="drilldown-menu">
                      <li class="menu-list">
                        <ul>
                          <li><a href="layout-2-columns.html" class="dropdown-item"><i class="ft-file"></i> Page layouts & Templates</a></li>
                          <li><a href="#"><i class="ft-align-left"></i> Multi level menu</a>
                            <ul>
                              <li><a href="#" class="dropdown-item"><i class="fa fa-bookmark-o"></i>  Second level</a></li>
                              <li><a href="#"><i class="fa fa-lemon-o"></i> Second level menu</a>
                                <ul>
                                  <li><a href="#" class="dropdown-item"><i class="fa fa-heart-o"></i>  Third level</a></li>
                                  <li><a href="#" class="dropdown-item"><i class="fa fa-file-o"></i> Third level</a></li>
                                  <li><a href="#" class="dropdown-item"><i class="fa fa-trash-o"></i> Third level</a></li>
                                  <li><a href="#" class="dropdown-item"><i class="fa fa-clock-o"></i> Third level</a></li>
                                </ul>
                              </li>
                              <li><a href="#" class="dropdown-item"><i class="fa fa-hdd-o"></i> Second level, third link</a></li>
                              <li><a href="#" class="dropdown-item"><i class="fa fa-floppy-o"></i> Second level, fourth link</a></li>
                            </ul>
                          </li>
                          <li><a href="color-palette-primary.html" class="dropdown-item"><i class="ft-camera"></i> Color pallet system</a></li>
                          <li><a href="sk-2-columns.html" class="dropdown-item"><i class="ft-edit"></i> Page starter kit</a></li>
                          <li><a href="changelog.html" class="dropdown-item"><i class="ft-minimize-2"></i> Change log</a></li>
                          <li><a href="http://support.pixinvent.com/" class="dropdown-item"><i class="fa fa-life-ring"></i> Customer support center</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="col-md-3">
                    <h6 class="dropdown-menu-header text-uppercase"><i class="fa fa-list-ul"></i> Accordion</h6>
                    <div id="accordionWrap" role="tablist" aria-multiselectable="true">
                      <div class="card no-border box-shadow-0 collapse-icon accordion-icon-rotate">
                        <div id="headingOne" role="tab" class="card-header p-0 pb-2 no-border"><a data-toggle="collapse" data-parent="#accordionWrap" href="#accordionOne" aria-expanded="true" aria-controls="accordionOne">Accordion Item #1</a></div>
                        <div id="accordionOne" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true" class="card-collapse collapse in">
                          <div class="card-body">
                            <p class="accordion-text text-small-3">Caramels dessert chocolate cake pastry jujubes bonbon. Jelly wafer jelly beans. Caramels chocolate cake liquorice cake wafer jelly beans croissant apple pie.</p>
                          </div>
                        </div>
                        <div id="headingTwo" role="tab" class="card-header p-0 pb-2 no-border"><a data-toggle="collapse" data-parent="#accordionWrap" href="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo" class="collapsed">Accordion Item #2</a></div>
                        <div id="accordionTwo" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" class="card-collapse collapse">
                          <div class="card-body">
                            <p class="accordion-text">Sugar plum bear claw oat cake chocolate jelly tiramisu dessert pie. Tiramisu macaroon muffin jelly marshmallow cake. Pastry oat cake chupa chups.</p>
                          </div>
                        </div>
                        <div id="headingThree" role="tab" class="card-header p-0 pb-2 no-border"><a data-toggle="collapse" data-parent="#accordionWrap" href="#accordionThree" aria-expanded="false" aria-controls="accordionThree" class="collapsed">Accordion Item #3</a></div>
                        <div id="accordionThree" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" class="card-collapse collapse">
                          <div class="card-body">
                            <p class="accordion-text">Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon. Cake dragée jujubes donut chocolate bar chocolate cake cupcake chocolate topping.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="col-md-4">
                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="fa fa-envelope-o"></i> Contact Us</h6>
                    <form>
                      <fieldset class="form-group">
                        <label for="inputName1" class="col-sm-3 form-control-label">Name</label>
                        <div class="col-sm-9">
                          <div class="position-relative has-icon-left">
                            <input type="text" id="inputName1" placeholder="John Doe" class="form-control">
                            <div class="form-control-position"><i class="fa fa-user-o pl-1"></i></div>
                          </div>
                        </div>
                      </fieldset>
                      <fieldset class="form-group">
                        <label for="inputEmail1" class="col-sm-3 form-control-label">Email</label>
                        <div class="col-sm-9">
                          <div class="position-relative has-icon-left">
                            <input type="email" id="inputEmail1" placeholder="john@example.com" class="form-control">
                            <div class="form-control-position pl-1"><i class="fa fa-envelope-o"></i></div>
                          </div>
                        </div>
                      </fieldset>
                      <fieldset class="form-group">
                        <label for="inputMessage1" class="col-sm-3 form-control-label">Message</label>
                        <div class="col-sm-9">
                          <div class="position-relative has-icon-left">
                            <textarea id="inputMessage1" rows="2" placeholder="Simple Textarea" class="form-control"></textarea>
                            <div class="form-control-position pl-1"><i class="fa fa-commenting-o"></i></div>
                          </div>
                        </div>
                      </fieldset>
                      <div class="col-sm-12 mb-1">
                        <button type="button" class="btn btn-primary float-xs-right"><i class="fa fa-paper-plane-o"></i> Send</button>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>
              <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i class="ficon ft-maximize"></i></a></li>
              <li class="nav-item nav-search"><a href="#" class="nav-link nav-link-search"><i class="ficon ft-search"></i></a>
                <div class="search-input">
                  <input type="text" placeholder="Explore Stack..." class="input">
                </div>
              </li>
            </ul>
            <ul class="nav navbar-nav float-xs-right">
              <li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon ft-bell"></i><span class="tag tag-pill tag-default tag-danger tag-default tag-up">5</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    <h6 class="dropdown-header m-0"><span class="grey darken-2">التنبيهات</span><span class="notification-tag tag tag-default tag-danger float-xs-right m-0">5 New</span></h6>
                  </li>
                  <li class="list-group scrollable-container"><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left valign-middle"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading">You have new order!</h6>
                          <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">30 minutes ago</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left valign-middle"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading red darken-1">99% Server load</h6>
                          <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Five hour ago</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left valign-middle"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                          <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Today</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left valign-middle"><i class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading">Complete the task</h6><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Last week</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left valign-middle"><i class="ft-file icon-bg-circle bg-teal"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading">Generate monthly report</h6><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Last month</time></small>
                        </div>
                      </div></a></li>
                  <li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all notifications</a></li>
                </ul>
              </li>
              <li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon ft-mail"></i><span class="tag tag-pill tag-default tag-warning tag-default tag-up">3</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    <h6 class="dropdown-header m-0"><span class="grey darken-2">الرسائل</span><span class="notification-tag tag tag-default tag-warning float-xs-right m-0">4 New</span></h6>
                  </li>
                  <li class="list-group scrollable-container"><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Margaret Govan</h6>
                          <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start the project.</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Today</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Bret Lezama</h6>
                          <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Tuesday</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Carie Berra</h6>
                          <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Friday</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Eric Alsobrook</h6>
                          <p class="notification-text font-small-3 text-muted">We have project party this saturday night.</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">last month</time></small>
                        </div>
                      </div></a></li>
                  <li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all messages</a></li>
                </ul>
              </li>
              <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="../../../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span><span class="user-name">مركز إتمام</span></a>
                <div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item"><i class="ft-user"></i> Edit Profile</a><a href="#" class="dropdown-item"><i class="ft-mail"></i> My Inbox</a><a href="#" class="dropdown-item"><i class="ft-check-square"></i> Task</a><a href="#" class="dropdown-item"><i class="ft-comment-square"></i> Chats</a>
                  <div class="dropdown-divider"></div><a href="#" class="dropdown-item"><i class="ft-power"></i> Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


<!--     <div data-scroll-to-active="true" class="main-menu menu-fixed menu-light menu-accordion menu-shadow">
      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
          <li class=" navigation-header"><span>General</span><i data-toggle="tooltip" data-placement="right" data-original-title="General" class=" ft-minus"></i>
          </li>
          <li class=" nav-item"><a href="index.html"><i class="ft-home"></i><span data-i18n="" class="menu-title">Dashboard</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2">3</span></a>
            <ul class="menu-content">
              <li><a href="dashboard-ecommerce.html" class="menu-item">eCommerce</a>
              </li>
              <li><a href="dashboard-analytics.html" class="menu-item">Analytics</a>
              </li>
              <li class="active"><a href="dashboard-fitness.html" class="menu-item">Fitness</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-monitor"></i><span data-i18n="" class="menu-title">Templates</span></a>
            <ul class="menu-content">
              <li><a href="#" class="menu-item">Vertical</a>
                <ul class="menu-content">
                  <li><a href="../vertical-menu-template" class="menu-item">Semi Light</a>
                  </li>
                  <li><a href="../vertical-menu-template-semi-dark" class="menu-item">Semi Dark</a>
                  </li>
                  <li><a href="../vertical-menu-template-nav-dark" class="menu-item">Nav Dark</a>
                  </li>
                  <li><a href="../vertical-menu-template-light" class="menu-item">Light</a>
                  </li>
                  <li><a href="../vertical-overlay-menu-template" class="menu-item">Overlay Menu</a>
                  </li>
                </ul>
              </li>
              <li><a href="#" class="menu-item">Horizontal</a>
                <ul class="menu-content">
                  <li><a href="../horizontal-menu-template" class="menu-item">Classic</a>
                  </li>
                  <li><a href="../horizontal-menu-template-nav" class="menu-item">Nav Dark</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-layout"></i><span data-i18n="" class="menu-title">Layouts</span></a>
            <ul class="menu-content">
              <li><a href="#" class="menu-item">Page Layouts</a>
                <ul class="menu-content">
                  <li><a href="layout-1-column.html" class="menu-item">1 column</a>
                  </li>
                  <li><a href="layout-2-columns.html" class="menu-item">2 columns</a>
                  </li>
                  <li><a href="#" class="menu-item">Content Det. Sidebar</a>
                    <ul class="menu-content">
                      <li><a href="layout-content-detached-left-sidebar.html" class="menu-item">Detached left sidebar</a>
                      </li>
                      <li><a href="layout-content-detached-left-sticky-sidebar.html" class="menu-item">Detached sticky left sidebar</a>
                      </li>
                      <li><a href="layout-content-detached-right-sidebar.html" class="menu-item">Detached right sidebar</a>
                      </li>
                      <li><a href="layout-content-detached-right-sticky-sidebar.html" class="menu-item">Detached sticky right sidebar</a>
                      </li>
                    </ul>
                  </li>
                  <li class="navigation-divider"></li>
                  <li><a href="layout-fixed-navbar.html" class="menu-item">Fixed navbar</a>
                  </li>
                  <li><a href="layout-fixed-navigation.html" class="menu-item">Fixed navigation</a>
                  </li>
                  <li><a href="layout-fixed-navbar-navigation.html" class="menu-item">Fixed navbar &amp; navigation</a>
                  </li>
                  <li><a href="layout-fixed-navbar-footer.html" class="menu-item">Fixed navbar &amp; footer</a>
                  </li>
                  <li class="navigation-divider"></li>
                  <li><a href="layout-fixed.html" class="menu-item">Fixed layout</a>
                  </li>
                  <li><a href="layout-boxed.html" class="menu-item">Boxed layout</a>
                  </li>
                  <li><a href="layout-static.html" class="menu-item">Static layout</a>
                  </li>
                  <li class="navigation-divider"></li>
                  <li><a href="layout-light.html" class="menu-item">Light layout</a>
                  </li>
                  <li><a href="layout-dark.html" class="menu-item">Dark layout</a>
                  </li>
                  <li><a href="layout-semi-dark.html" class="menu-item">Semi dark layout</a>
                  </li>
                </ul>
              </li>
              <li><a href="#" class="menu-item">Navbars</a>
                <ul class="menu-content">
                  <li><a href="navbar-light.html" class="menu-item">Navbar Light</a>
                  </li>
                  <li><a href="navbar-dark.html" class="menu-item">Navbar Dark</a>
                  </li>
                  <li><a href="navbar-semi-dark.html" class="menu-item">Navbar Semi Dark</a>
                  </li>
                  <li><a href="navbar-brand-center.html" class="menu-item">Brand Center</a>
                  </li>
                  <li><a href="navbar-fixed-top.html" class="menu-item">Fixed Top</a>
                  </li>
                  <li><a href="#" class="menu-item">Hide on Scroll</a>
                    <ul class="menu-content">
                      <li><a href="navbar-hide-on-scroll-top.html" class="menu-item">Hide on Scroll Top</a>
                      </li>
                      <li><a href="navbar-hide-on-scroll-bottom.html" class="menu-item">Hide on Scroll Bottom</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="navbar-components.html" class="menu-item">Navbar Components</a>
                  </li>
                  <li><a href="navbar-styling.html" class="menu-item">Navbar Styling</a>
                  </li>
                </ul>
              </li>
              <li><a href="#" class="menu-item">Vertical Nav</a>
                <ul class="menu-content">
                  <li><a href="#" class="menu-item">Navigation Types</a>
                    <ul class="menu-content">
                      <li><a href="../vertical-menu-template" class="menu-item">Vertical Menu</a>
                      </li>
                      <li><a href="../vertical-overlay-menu-template" class="menu-item">Vertical Overlay</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="vertical-nav-fixed.html" class="menu-item">Fixed Navigation</a>
                  </li>
                  <li><a href="vertical-nav-static.html" class="menu-item">Static Navigation</a>
                  </li>
                  <li><a href="vertical-nav-light.html" class="menu-item">Navigation Light</a>
                  </li>
                  <li><a href="vertical-nav-dark.html" class="menu-item">Navigation Dark</a>
                  </li>
                  <li><a href="vertical-nav-accordion.html" class="menu-item">Accordion Navigation</a>
                  </li>
                  <li><a href="vertical-nav-collapsible.html" class="menu-item">Collapsible Navigation</a>
                  </li>
                  <li><a href="vertical-nav-flipped.html" class="menu-item">Flipped Navigation</a>
                  </li>
                  <li><a href="vertical-nav-native-scroll.html" class="menu-item">Native scroll</a>
                  </li>
                  <li><a href="vertical-nav-right-side-icon.html" class="menu-item">Right side icons</a>
                  </li>
                  <li><a href="vertical-nav-bordered.html" class="menu-item">Bordered Navigation</a>
                  </li>
                  <li><a href="vertical-nav-disabled-link.html" class="menu-item">Disabled Navigation</a>
                  </li>
                  <li><a href="vertical-nav-styling.html" class="menu-item">Navigation Styling</a>
                  </li>
                  <li><a href="vertical-nav-tags-pills.html" class="menu-item">Tags &amp; Pills</a>
                  </li>
                </ul>
              </li>
              <li><a href="#" class="menu-item">Horizontal Nav</a>
                <ul class="menu-content">
                  <li><a href="#" class="menu-item">Navigation Types</a>
                    <ul class="menu-content">
                      <li><a href="../horizontal-menu-template" class="menu-item">Classic</a>
                      </li>
                      <li><a href="../horizontal-menu-template-nav" class="menu-item">Nav Dark</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="#" class="menu-item">Page Headers</a>
                <ul class="menu-content">
                  <li><a href="headers-breadcrumbs-basic.html" class="menu-item">Breadcrumbs basic</a>
                  </li>
                  <li><a href="headers-breadcrumbs-top.html" class="menu-item">Breadcrumbs top</a>
                  </li>
                  <li><a href="headers-breadcrumbs-bottom.html" class="menu-item">Breadcrumbs bottom</a>
                  </li>
                  <li><a href="headers-breadcrumbs-with-button.html" class="menu-item">Breadcrumbs with button</a>
                  </li>
                  <li><a href="headers-breadcrumbs-with-round-button.html" class="menu-item">Breadcrumbs with round button 2</a>
                  </li>
                  <li><a href="headers-breadcrumbs-with-stats.html" class="menu-item">Breadcrumbs with stats</a>
                  </li>
                </ul>
              </li>
              <li><a href="#" class="menu-item">Footers</a>
                <ul class="menu-content">
                  <li><a href="footer-light.html" class="menu-item">Footer Light</a>
                  </li>
                  <li><a href="footer-dark.html" class="menu-item">Footer Dark</a>
                  </li>
                  <li><a href="footer-transparent.html" class="menu-item">Footer Transparent</a>
                  </li>
                  <li><a href="footer-fixed.html" class="menu-item">Footer Fixed</a>
                  </li>
                  <li><a href="footer-components.html" class="menu-item">Footer Components</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-zap"></i><span data-i18n="" class="menu-title">Starter kit</span><span class="tag tag tag-danger tag-pill float-xs-right mr-2">New</span></a>
            <ul class="menu-content">
              <li><a href="../../../starter-kit/rtl/vertical-menu-template/layout-1-column.html" class="menu-item">1 column</a>
              </li>
              <li><a href="../../../starter-kit/rtl/vertical-menu-template/layout-2-columns.html" class="menu-item">2 columns</a>
              </li>
              <li><a href="#" class="menu-item">Content Det. Sidebar</a>
                <ul class="menu-content">
                  <li><a href="../../../starter-kit/rtl/vertical-menu-template/layout-content-detached-left-sidebar.html" class="menu-item">Detached left sidebar</a>
                  </li>
                  <li><a href="../../../starter-kit/rtl/vertical-menu-template/layout-content-detached-left-sticky-sidebar.html" class="menu-item">Detached sticky left sidebar</a>
                  </li>
                  <li><a href="../../../starter-kit/rtl/vertical-menu-template/layout-content-detached-right-sidebar.html" class="menu-item">Detached right sidebar</a>
                  </li>
                  <li><a href="../../../starter-kit/rtl/vertical-menu-template/layout-content-detached-right-sticky-sidebar.html" class="menu-item">Detached sticky right sidebar</a>
                  </li>
                </ul>
              </li>
              <li class="navigation-divider"></li>
              <li><a href="../../../starter-kit/rtl/vertical-menu-template/layout-fixed-navbar.html" class="menu-item">Fixed navbar</a>
              </li>
              <li><a href="../../../starter-kit/rtl/vertical-menu-template/layout-fixed-navigation.html" class="menu-item">Fixed navigation</a>
              </li>
              <li><a href="../../../starter-kit/rtl/vertical-menu-template/layout-fixed-navbar-navigation.html" class="menu-item">Fixed navbar &amp; navigation</a>
              </li>
              <li><a href="../../../starter-kit/rtl/vertical-menu-template/layout-fixed-navbar-footer.html" class="menu-item">Fixed navbar &amp; footer</a>
              </li>
              <li class="navigation-divider"></li>
              <li><a href="../../../starter-kit/rtl/vertical-menu-template/layout-fixed.html" class="menu-item">Fixed layout</a>
              </li>
              <li><a href="../../../starter-kit/rtl/vertical-menu-template/layout-boxed.html" class="menu-item">Boxed layout</a>
              </li>
              <li><a href="../../../starter-kit/rtl/vertical-menu-template/layout-static.html" class="menu-item">Static layout</a>
              </li>
              <li class="navigation-divider"></li>
              <li><a href="../../../starter-kit/rtl/vertical-menu-template/layout-light.html" class="menu-item">Light layout</a>
              </li>
              <li><a href="../../../starter-kit/rtl/vertical-menu-template/layout-dark.html" class="menu-item">Dark layout</a>
              </li>
              <li><a href="../../../starter-kit/rtl/vertical-menu-template/layout-semi-dark.html" class="menu-item">Semi dark layout</a>
              </li>
            </ul>
          </li>
          <li class=" navigation-header"><span>Apps</span><i data-toggle="tooltip" data-placement="right" data-original-title="Apps" class=" ft-minus"></i>
          </li>
          <li class=" nav-item"><a href="project-summary.html"><i class="ft-airplay"></i><span data-i18n="" class="menu-title">Project Summary</span></a>
          </li>
          <li class=" nav-item"><a href="invoice-template.html"><i class="ft-printer"></i><span data-i18n="" class="menu-title">Invoice Template</span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-share"></i><span data-i18n="" class="menu-title">Timelines</span></a>
            <ul class="menu-content">
              <li><a href="timeline-center.html" class="menu-item">Timelines Center</a>
              </li>
              <li><a href="timeline-horizontal.html" class="menu-item">Timelines Horizontal</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-user"></i><span data-i18n="" class="menu-title">Users</span></a>
            <ul class="menu-content">
              <li><a href="user-profile.html" class="menu-item">Users Profile</a>
              </li>
              <li><a href="user-cards.html" class="menu-item">Users Cards</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-plus-square"></i><span data-i18n="" class="menu-title">Calender</span></a>
            <ul class="menu-content">
              <li><a href="full-calender-basic.html" class="menu-item">Full Calender Basic</a>
              </li>
              <li><a href="full-calender-events.html" class="menu-item">Full Calender Events</a>
              </li>
              <li><a href="full-calender-advance.html" class="menu-item">Full Calender Advance</a>
              </li>
              <li><a href="full-calender-extra.html" class="menu-item">Full Calender Extra</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-image"></i><span data-i18n="" class="menu-title">Gallery</span></a>
            <ul class="menu-content">
              <li><a href="gallery-grid.html" class="menu-item">Gallery Grid</a>
              </li>
              <li><a href="gallery-grid-with-desc.html" class="menu-item">Gallery Grid with Desc</a>
              </li>
              <li><a href="gallery-masonry.html" class="menu-item">Masonry Gallery</a>
              </li>
              <li><a href="gallery-masonry-with-desc.html" class="menu-item">Masonry Gallery with Desc</a>
              </li>
              <li><a href="gallery-hover-effects.html" class="menu-item">Hover Effects</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-search"></i><span data-i18n="" class="menu-title">Search</span></a>
            <ul class="menu-content">
              <li><a href="search-page.html" class="menu-item">Search Page</a>
              </li>
              <li><a href="search-website.html" class="menu-item">Search Website</a>
              </li>
              <li><a href="search-images.html" class="menu-item">Search Images</a>
              </li>
              <li><a href="search-videos.html" class="menu-item">Search Videos</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-unlock"></i><span data-i18n="" class="menu-title">Authentication</span></a>
            <ul class="menu-content">
              <li><a href="login-simple.html" class="menu-item">Login Simple</a>
              </li>
              <li><a href="login-with-bg.html" class="menu-item">Login with Bg</a>
              </li>
              <li><a href="login-with-bg-image.html" class="menu-item">Login with Bg Image</a>
              </li>
              <li><a href="register-simple.html" class="menu-item">Register Simple</a>
              </li>
              <li><a href="register-with-bg.html" class="menu-item">Register with Bg</a>
              </li>
              <li><a href="register-with-bg-image.html" class="menu-item">Register with Bg Image</a>
              </li>
              <li><a href="unlock-user.html" class="menu-item">Unlock User</a>
              </li>
              <li><a href="recover-password.html" class="menu-item">Recover Password</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-alert-triangle"></i><span data-i18n="" class="menu-title">Error</span></a>
            <ul class="menu-content">
              <li><a href="error-400.html" class="menu-item">Error 400</a>
              </li>
              <li><a href="error-401.html" class="menu-item">Error 401</a>
              </li>
              <li><a href="error-403.html" class="menu-item">Error 403</a>
              </li>
              <li><a href="error-404.html" class="menu-item">Error 404</a>
              </li>
              <li><a href="error-500.html" class="menu-item">Error 500</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-watch"></i><span data-i18n="" class="menu-title">Coming Soon</span></a>
            <ul class="menu-content">
              <li><a href="coming-soon-flat.html" class="menu-item">Flat</a>
              </li>
              <li><a href="coming-soon-bg-image.html" class="menu-item">Bg image</a>
              </li>
              <li><a href="coming-soon-bg-video.html" class="menu-item">Bg video</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="under-maintenance.html"><i class="ft-cloud-off"></i><span data-i18n="" class="menu-title">Maintenance</span></a>
          </li>
          <li class=" navigation-header"><span>UI</span><i data-toggle="tooltip" data-placement="right" data-original-title="UI" class="ft-droplet ft-minus"></i>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-globe"></i><span data-i18n="" class="menu-title">Content</span></a>
            <ul class="menu-content">
              <li><a href="content-grid.html" class="menu-item">Grid</a>
              </li>
              <li><a href="content-typography.html" class="menu-item">Typography</a>
              </li>
              <li><a href="content-text-utilities.html" class="menu-item">Text utilities</a>
              </li>
              <li><a href="content-syntax-highlighter.html" class="menu-item">Syntax highlighter</a>
              </li>
              <li><a href="content-helper-classes.html" class="menu-item">Helper classes</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-square"></i><span data-i18n="" class="menu-title">Cards</span><span class="tag tag tag-pill tag-success float-xs-right mr-2">Hot</span></a>
            <ul class="menu-content">
              <li><a href="card-bootstrap.html" class="menu-item">Bootstrap</a>
              </li>
              <li><a href="card-headings.html" class="menu-item">Headings</a>
              </li>
              <li><a href="card-options.html" class="menu-item">Options</a>
              </li>
              <li><a href="card-actions.html" class="menu-item">Action</a>
              </li>
              <li><a href="card-draggable.html" class="menu-item">Draggable</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-layers"></i><span data-i18n="" class="menu-title">Advance Cards</span></a>
            <ul class="menu-content">
              <li><a href="card-statistics.html" class="menu-item">Statistics</a>
              </li>
              <li><a href="card-weather.html" class="menu-item">Weather</a>
              </li>
              <li><a href="card-charts.html" class="menu-item">Charts</a>
              </li>
              <li><a href="card-maps.html" class="menu-item">Maps</a>
              </li>
              <li><a href="card-social.html" class="menu-item">Social</a>
              </li>
              <li><a href="card-ecommerce.html" class="menu-item">E-Commerce</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-droplet"></i><span data-i18n="" class="menu-title">Color Palette</span><span class="tag tag tag-warning tag-pill float-xs-right mr-2">14</span></a>
            <ul class="menu-content">
              <li><a href="color-palette-primary.html" class="menu-item">Primary palette</a>
              </li>
              <li><a href="color-palette-danger.html" class="menu-item">Danger palette</a>
              </li>
              <li><a href="color-palette-success.html" class="menu-item">Success palette</a>
              </li>
              <li><a href="color-palette-warning.html" class="menu-item">Warning palette</a>
              </li>
              <li><a href="color-palette-info.html" class="menu-item">Info palette</a>
              </li>
              <li class="navigation-divider"></li>
              <li><a href="color-palette-red.html" class="menu-item">Red palette</a>
              </li>
              <li><a href="color-palette-pink.html" class="menu-item">Pink palette</a>
              </li>
              <li><a href="color-palette-purple.html" class="menu-item">Purple palette</a>
              </li>
              <li><a href="color-palette-blue.html" class="menu-item">Blue palette</a>
              </li>
              <li><a href="color-palette-cyan.html" class="menu-item">Cyan palette</a>
              </li>
              <li><a href="color-palette-teal.html" class="menu-item">Teal palette</a>
              </li>
              <li><a href="color-palette-yellow.html" class="menu-item">Yellow palette</a>
              </li>
              <li><a href="color-palette-amber.html" class="menu-item">Amber palette</a>
              </li>
              <li><a href="color-palette-blue-grey.html" class="menu-item">Blue Grey palette</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-eye"></i><span data-i18n="" class="menu-title">Icons</span></a>
            <ul class="menu-content">
              <li><a href="icons-feather.html" class="menu-item">Feather</a>
              </li>
              <li><a href="icons-font-awesome.html" class="menu-item">Font Awesome</a>
              </li>
              <li><a href="icons-simple-line-icons.html" class="menu-item">Simple Line Icons</a>
              </li>
              <li><a href="icons-meteocons.html" class="menu-item">Meteocons</a>
              </li>
            </ul>
          </li>
          <li class=" navigation-header"><span>Components</span><i data-toggle="tooltip" data-placement="right" data-original-title="Components" class=" ft-minus"></i>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-briefcase"></i><span data-i18n="" class="menu-title">Bootstrap Components</span></a>
            <ul class="menu-content">
              <li><a href="component-alerts.html" class="menu-item">Alerts</a>
              </li>
              <li><a href="component-callout.html" class="menu-item">Callout</a>
              </li>
              <li><a href="#" class="menu-item">Buttons</a>
                <ul class="menu-content">
                  <li><a href="component-buttons-basic.html" class="menu-item">Basic Buttons</a>
                  </li>
                  <li><a href="component-buttons-extended.html" class="menu-item">Extended Buttons</a>
                  </li>
                </ul>
              </li>
              <li><a href="component-carousel.html" class="menu-item">Carousel</a>
              </li>
              <li><a href="component-collapse.html" class="menu-item">Collapse</a>
              </li>
              <li><a href="component-dropdowns.html" class="menu-item">Dropdowns</a>
              </li>
              <li><a href="component-list-group.html" class="menu-item">List Group</a>
              </li>
              <li><a href="component-modals.html" class="menu-item">Modals</a>
              </li>
              <li><a href="component-pagination.html" class="menu-item">Pagination</a>
              </li>
              <li><a href="component-navs-component.html" class="menu-item">Navs Component</a>
              </li>
              <li><a href="component-tabs-component.html" class="menu-item">Tabs Component</a>
              </li>
              <li><a href="component-pills-component.html" class="menu-item">Pills Component</a>
              </li>
              <li><a href="component-tooltips.html" class="menu-item">Tooltips</a>
              </li>
              <li><a href="component-popovers.html" class="menu-item">Popovers</a>
              </li>
              <li><a href="component-tags.html" class="menu-item">Tags</a>
              </li>
              <li><a href="component-pill-tags.html" class="menu-item">Pill Tags</a>
              </li>
              <li><a href="component-progress.html" class="menu-item">Progress</a>
              </li>
              <li><a href="component-media-objects.html" class="menu-item">Media Objects</a>
              </li>
              <li><a href="component-scrollable.html" class="menu-item">Scrollable</a>
              </li>
              <li><a href="component-spinners.html" class="menu-item">Spinners</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-box"></i><span data-i18n="" class="menu-title">Extra Components</span></a>
            <ul class="menu-content">
              <li><a href="ex-component-sweet-alerts.html" class="menu-item">Sweet Alerts</a>
              </li>
              <li><a href="ex-component-ratings.html" class="menu-item">Ratings</a>
              </li>
              <li><a href="ex-component-toastr.html" class="menu-item">Toastr</a>
              </li>
              <li><a href="ex-component-noui-slider.html" class="menu-item">NoUI Slider</a>
              </li>
              <li><a href="ex-component-knob.html" class="menu-item">Knob</a>
              </li>
              <li><a href="ex-component-block-ui.html" class="menu-item">Block UI</a>
              </li>
              <li><a href="ex-component-date-time-picker.html" class="menu-item">DateTime Picker</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-edit"></i><span data-i18n="" class="menu-title">Forms</span></a>
            <ul class="menu-content">
              <li><a href="#" class="menu-item">Form Elements</a>
                <ul class="menu-content">
                  <li><a href="form-inputs.html" class="menu-item">Form Inputs</a>
                  </li>
                  <li><a href="form-input-groups.html" class="menu-item">Input Groups</a>
                  </li>
                  <li><a href="form-input-grid.html" class="menu-item">Input Grid</a>
                  </li>
                  <li><a href="form-extended-inputs.html" class="menu-item">Extended Inputs</a>
                  </li>
                  <li><a href="form-checkboxes-radios.html" class="menu-item">Checkboxes &amp; Radios</a>
                  </li>
                  <li><a href="form-switch.html" class="menu-item">Switch</a>
                  </li>
                  <li><a href="form-select2.html" class="menu-item">Select2</a>
                  </li>
                  <li><a href="form-tags-input.html" class="menu-item">Tags Input</a>
                  </li>
                  <li><a href="form-validation.html" class="menu-item">Validation</a>
                  </li>
                </ul>
              </li>
              <li><a href="#" class="menu-item">Form Layouts</a>
                <ul class="menu-content">
                  <li><a href="form-layout-basic.html" class="menu-item">Basic Forms</a>
                  </li>
                  <li><a href="form-layout-horizontal.html" class="menu-item">Horizontal Forms</a>
                  </li>
                  <li><a href="form-layout-hidden-labels.html" class="menu-item">Hidden Labels</a>
                  </li>
                  <li><a href="form-layout-form-actions.html" class="menu-item">Form Actions</a>
                  </li>
                  <li><a href="form-layout-bordered.html" class="menu-item">Bordered</a>
                  </li>
                  <li><a href="form-layout-striped-rows.html" class="menu-item">Striped Rows</a>
                  </li>
                </ul>
              </li>
              <li><a href="form-wizard.html" class="menu-item">Form Wizard</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-grid"></i><span data-i18n="" class="menu-title">Tables</span></a>
            <ul class="menu-content">
              <li><a href="#" class="menu-item">Bootstrap Tables</a>
                <ul class="menu-content">
                  <li><a href="table-basic.html" class="menu-item">Basic Tables</a>
                  </li>
                  <li><a href="table-border.html" class="menu-item">Table Border</a>
                  </li>
                  <li><a href="table-sizing.html" class="menu-item">Table Sizing</a>
                  </li>
                  <li><a href="table-styling.html" class="menu-item">Table Styling</a>
                  </li>
                  <li><a href="table-components.html" class="menu-item">Table Components</a>
                  </li>
                </ul>
              </li>
              <li><a href="#" class="menu-item">DataTables</a>
                <ul class="menu-content">
                  <li><a href="dt-basic-initialization.html" class="menu-item">Basic Initialisation</a>
                  </li>
                  <li><a href="dt-advanced-initialization.html" class="menu-item">Advanced initialisation</a>
                  </li>
                  <li><a href="dt-styling.html" class="menu-item">Styling</a>
                  </li>
                  <li><a href="dt-data-sources.html" class="menu-item">Data Sources</a>
                  </li>
                  <li><a href="dt-api.html" class="menu-item">API</a>
                  </li>
                  <li><a href="#" data-i18n="nav.datatable_extensions.main" class="menu-item">DataTables Ext.</a>
                    <ul class="menu-content">
                      <li><a href="dt-extensions-autofill.html" data-i18n="nav.datatable_extensions.dt_extensions_autofill" class="menu-item">AutoFill</a>
                      </li>
                      <li><a href="#" data-i18n="nav.datatable_extensions.datatable_buttons.main" class="menu-item">Buttons</a>
                        <ul class="menu-content">
                          <li><a href="dt-extensions-buttons-basic.html" data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_basic" class="menu-item">Basic Buttons</a>
                          </li>
                          <li><a href="dt-extensions-buttons-html-5-data-export.html" data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_html_5_data_export" class="menu-item">HTML 5 Data Export</a>
                          </li>
                          <li><a href="dt-extensions-buttons-flash-data-export.html" data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_flash_data_export" class="menu-item">Flash Data Export</a>
                          </li>
                          <li><a href="dt-extensions-buttons-column-visibility.html" data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_column_visibility" class="menu-item">Column Visibility</a>
                          </li>
                          <li><a href="dt-extensions-buttons-print.html" data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_print" class="menu-item">Print</a>
                          </li>
                          <li><a href="dt-extensions-buttons-api.html" data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_api" class="menu-item">API</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="dt-extensions-column-reorder.html" data-i18n="nav.datatable_extensions.dt_extensions_column_reorder" class="menu-item">Column Reorder</a>
                      </li>
                      <li><a href="dt-extensions-fixed-columns.html" data-i18n="nav.datatable_extensions.dt_extensions_fixed_columns" class="menu-item">Fixed Columns</a>
                      </li>
                      <li><a href="dt-extensions-key-table.html" data-i18n="nav.datatable_extensions.dt_extensions_key_table" class="menu-item">Key Table</a>
                      </li>
                      <li><a href="dt-extensions-row-reorder.html" data-i18n="nav.datatable_extensions.dt_extensions_row_reorder" class="menu-item">Row Reorder</a>
                      </li>
                      <li><a href="dt-extensions-select.html" data-i18n="nav.datatable_extensions.dt_extensions_select" class="menu-item">Select</a>
                      </li>
                      <li><a href="dt-extensions-fix-header.html" data-i18n="nav.datatable_extensions.dt_extensions_fix_header" class="menu-item">Fix Header</a>
                      </li>
                      <li><a href="dt-extensions-responsive.html" data-i18n="nav.datatable_extensions.dt_extensions_responsive" class="menu-item">Responsive</a>
                      </li>
                      <li><a href="dt-extensions-column-visibility.html" data-i18n="nav.datatable_extensions.dt_extensions_column_visibility" class="menu-item">Column Visibility</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="table-jsgrid.html" class="menu-item">jsGrid</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-bar-chart-2"></i><span data-i18n="" class="menu-title">Charts</span></a>
            <ul class="menu-content">
              <li><a href="#" class="menu-item">Echarts</a>
                <ul class="menu-content">
                  <li><a href="echarts-line-area-charts.html" class="menu-item">Line &amp; Area charts</a>
                  </li>
                  <li><a href="echarts-bar-column-charts.html" class="menu-item">Bar &amp; Column charts</a>
                  </li>
                  <li><a href="echarts-pie-doughnut-charts.html" class="menu-item">Pie &amp; Doughnut charts</a>
                  </li>
                  <li><a href="echarts-scatter-charts.html" class="menu-item">Scatter charts</a>
                  </li>
                  <li><a href="echarts-radar-chord-charts.html" class="menu-item">Radar &amp; Chord charts</a>
                  </li>
                  <li><a href="echarts-funnel-gauges-charts.html" class="menu-item">Funnel &amp; Gauges charts</a>
                  </li>
                  <li><a href="echarts-combination-charts.html" class="menu-item">Combination charts</a>
                  </li>
                  <li><a href="echarts-advance-charts.html" class="menu-item">Advance charts</a>
                  </li>
                </ul>
              </li>
              <li><a href="#" class="menu-item">Chartjs</a>
                <ul class="menu-content">
                  <li><a href="chartjs-line-charts.html" class="menu-item">Line charts</a>
                  </li>
                  <li><a href="chartjs-bar-charts.html" class="menu-item">Bar charts</a>
                  </li>
                  <li><a href="chartjs-pie-doughnut-charts.html" class="menu-item">Pie &amp; Doughnut charts</a>
                  </li>
                  <li><a href="chartjs-scatter-charts.html" class="menu-item">Scatter charts</a>
                  </li>
                  <li><a href="chartjs-polar-radar-charts.html" class="menu-item">Polar &amp; Radar charts</a>
                  </li>
                  <li><a href="chartjs-advance-charts.html" class="menu-item">Advance charts</a>
                  </li>
                </ul>
              </li>
              <li><a href="morris-charts.html" class="menu-item">Morris Charts</a>
              </li>
              <li><a href="#" class="menu-item">Flot Charts</a>
                <ul class="menu-content">
                  <li><a href="flot-line-charts.html" class="menu-item">Line charts</a>
                  </li>
                  <li><a href="flot-bar-charts.html" class="menu-item">Bar charts</a>
                  </li>
                  <li><a href="flot-pie-charts.html" class="menu-item">Pie charts</a>
                  </li>
                </ul>
              </li>
              <li><a href="#" class="menu-item">Chartist</a>
                <ul class="menu-content">
                  <li><a href="chartist-line-charts.html" class="menu-item">Line charts</a>
                  </li>
                  <li><a href="chartist-bar-charts.html" class="menu-item">Bar charts</a>
                  </li>
                  <li><a href="chartist-pie-charts.html" class="menu-item">Pie charts</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-map"></i><span data-i18n="" class="menu-title">Maps</span></a>
            <ul class="menu-content">
              <li><a href="#" class="menu-item">google Maps</a>
                <ul class="menu-content">
                  <li><a href="gmaps-basic-maps.html" class="menu-item">Maps</a>
                  </li>
                  <li><a href="gmaps-services.html" class="menu-item">Services</a>
                  </li>
                  <li><a href="gmaps-overlays.html" class="menu-item">Overlays</a>
                  </li>
                  <li><a href="gmaps-routes.html" class="menu-item">Routes</a>
                  </li>
                  <li><a href="gmaps-utils.html" class="menu-item">Utils</a>
                  </li>
                </ul>
              </li>
              <li><a href="vector-maps-jvector.html" class="menu-item">jVector Map</a>
              </li>
            </ul>
          </li>
          <li class=" navigation-header"><span>Others</span><i data-toggle="tooltip" data-placement="right" data-original-title="Others" class=" ft-minus"></i>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-align-left"></i><span data-i18n="" class="menu-title">Menu levels</span></a>
            <ul class="menu-content">
              <li><a href="#" class="menu-item">Second level</a>
              </li>
              <li><a href="#" class="menu-item">Second level child</a>
                <ul class="menu-content">
                  <li><a href="#" class="menu-item">Third level</a>
                  </li>
                  <li><a href="#" class="menu-item">Third level child</a>
                    <ul class="menu-content">
                      <li><a href="#" class="menu-item">Fourth level</a>
                      </li>
                      <li><a href="#" class="menu-item">Fourth level</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="changelog.html"><i class="ft-file"></i><span data-i18n="" class="menu-title">Changelog</span><span class="tag tag tag-pill tag-info float-xs-right">1.0</span></a>
          </li>
          <li class="disabled nav-item"><a href="#"><i class="ft-slash"></i><span data-i18n="" class="menu-title">Disabled Menu</span></a>
          </li>
          <li class=" nav-item"><a href="http://support.pixinvent.com/"><i class="ft-life-buoy"></i><span data-i18n="" class="menu-title">Raise Support</span></a>
          </li>
          <li class=" nav-item"><a href="https://pixinvent.com/stack-bootstrap-admin-template/documentation"><i class="ft-folder"></i><span data-i18n="" class="menu-title">Documentation</span></a>
          </li>
        </ul>
      </div>
    </div> -->

    <!-- <div class="app-content content container-fluid"> -->
    <div class="app-content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!--fitness stats-->

<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                <div class="card-block">
                
            <div id="project-info" class="card-block row">
            <hr style="margin-bottom: -65px; border: 2px solid #00c4b3; margin-right: 25px; margin-left: 70px;">

              
            <div class="project-info-count col-lg-1 col-md-1" style="margin-left: 0px;">
               <a onclick="getSummary('1')"><div class="project-info-icon" style="background: <?php if (array_key_exists(0,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?> ; border: 3px solid <?php if (array_key_exists(0,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?>; width: 80px; height: 80px;">
                  <h4 style="margin-top: -12px; color: <?php if (array_key_exists(0,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?>; font-size: 22px">
                  <?php
                        if (array_key_exists(0,$obj->ball_array)){
                            echo $obj->ball_array[0]->ball_number;
                        }
                        else {
                           echo $obj->dashs;
                        }
                  ?>
                  </h4>
                  <div class="project-info-sub-icon" style="background: <?php if (array_key_exists(0,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?>; width: 30px; height: 30px; margin-right: -12px; margin-top: -10px; border: 1px solid <?php if (array_key_exists(0,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?>">
                     <p style="font-size: 18px; color: <?php if (array_key_exists(0,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?> ">
                 1</p>
                  </div>
               </div></a>
            </div>
            

            <div class="project-info-count col-lg-1 col-md-1" style="margin-left: 0px;">
               <a onclick="getSummary2('1')"><div class="project-info-icon" style="background: <?php if (array_key_exists(1,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?> ; border: 3px solid <?php if (array_key_exists(1,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?>; width: 80px; height: 80px;">
                  <h4 style="margin-top: -12px; color: <?php if (array_key_exists(1,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?>; font-size: 22px">
                  <?php
                        if (array_key_exists(1,$obj->ball_array)){
                            echo $obj->ball_array[1]->ball_number;
                        }
                        else {
                           echo $obj->dashs;
                        }
                  ?>
                  </h4>
                  <div class="project-info-sub-icon" style="background: <?php if (array_key_exists(1,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?>; width: 30px; height: 30px; margin-right: -12px; margin-top: -10px; border: 1px solid <?php if (array_key_exists(1,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?>">
                     <p style="font-size: 18px; color: <?php if (array_key_exists(1,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?> ">
                 2</p>
                  </div>
                   </div></a>
            </div>
            
            <div class="project-info-count col-lg-1 col-md-1" style="margin-left: 0px;">
               <a onclick="getSummary3('1')"><div class="project-info-icon" style="background: <?php if (array_key_exists(2,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?> ; border: 3px solid <?php if (array_key_exists(2,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?>; width: 80px; height: 80px;">
                  <h4 style="margin-top: -12px; color: <?php if (array_key_exists(2,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?>; font-size: 22px">
                  <?php
                        if (array_key_exists(2,$obj->ball_array)){
                            echo $obj->ball_array[2]->ball_number;
                        }
                        else {
                           echo $obj->dashs;
                        }
                  ?>
                  </h4>
                  <div class="project-info-sub-icon" style="background: <?php if (array_key_exists(2,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?>; width: 30px; height: 30px; margin-right: -12px; margin-top: -10px; border: 1px solid <?php if (array_key_exists(2,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?>">
                     <p style="font-size: 18px; color: <?php if (array_key_exists(2,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?> ">
                 3</p>
                  </div>
                   </div></a>
            </div>
            
            <div class="project-info-count col-lg-1 col-md-1" style="margin-left: 0px;">
               <a onclick="getSummary4('1')"><div class="project-info-icon" style="background: <?php if (array_key_exists(3,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?> ; border: 3px solid <?php if (array_key_exists(3,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?>; width: 80px; height: 80px;">
                  <h4 style="margin-top: -12px; color: <?php if (array_key_exists(3,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?>; font-size: 22px">
                  <?php
                        if (array_key_exists(3,$obj->ball_array)){
                            echo $obj->ball_array[3]->ball_number;
                        }
                        else {
                           echo $obj->dashs;
                        }
                  ?>
                  </h4>
                  <div class="project-info-sub-icon" style="background: <?php if (array_key_exists(3,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?>; width: 30px; height: 30px; margin-right: -12px; margin-top: -10px; border: 1px solid <?php if (array_key_exists(3,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?>">
                     <p style="font-size: 18px; color: <?php if (array_key_exists(3,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?> ">
                 4</p>
                  </div>
                   </div></a>
            </div>
            

                           <div class="project-info-count col-lg-1 col-md-1" style="margin-left: 0px;">
               <a onclick="getSummary5('1')"><div class="project-info-icon" style="background: <?php if (array_key_exists(4,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?> ; border: 3px solid <?php if (array_key_exists(4,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?>; width: 80px; height: 80px;">
                  <h4 style="margin-top: -12px; color: <?php if (array_key_exists(4,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?>; font-size: 22px">
                  <?php
                        if (array_key_exists(4,$obj->ball_array)){
                            echo $obj->ball_array[4]->ball_number;
                        }
                        else {
                           echo $obj->dashs;
                        }
                  ?>
                  </h4>
                  <div class="project-info-sub-icon" style="background: <?php if (array_key_exists(4,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?>; width: 30px; height: 30px; margin-right: -12px; margin-top: -10px; border: 1px solid <?php if (array_key_exists(4,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?>">
                     <p style="font-size: 18px; color: <?php if (array_key_exists(4,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?> ">
                 5</p>
                  </div>
                   </div></a>
            </div>
            
               
                            <div class="project-info-count col-lg-1 col-md-1" style="margin-left: 0px;">
               <a onclick="getSummary6('1')"><div class="project-info-icon" style="background: <?php if (array_key_exists(5,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?> ; border: 3px solid <?php if (array_key_exists(5,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?>; width: 80px; height: 80px;">
                  <h4 style="margin-top: -12px; color: <?php if (array_key_exists(5,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?>; font-size: 22px">
                  <?php
                        if (array_key_exists(5,$obj->ball_array)){
                            echo $obj->ball_array[5]->ball_number;
                        }
                        else {
                           echo $obj->dashs;
                        }
                  ?>
                  </h4>
                  <div class="project-info-sub-icon" style="background: <?php if (array_key_exists(5,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?>; width: 30px; height: 30px; margin-right: -12px; margin-top: -10px; border: 1px solid <?php if (array_key_exists(5,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?>">
                     <p style="font-size: 18px; color: <?php if (array_key_exists(5,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?> ">
                 6</p>
                  </div>
                   </div></a>
            </div>
            
                
                            <div class="project-info-count col-lg-1 col-md-1" style="margin-left: 0px;">
               <a onclick="getSummary7('1')"><div class="project-info-icon" style="background: <?php if (array_key_exists(6,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?> ; border: 3px solid <?php if (array_key_exists(6,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?>; width: 80px; height: 80px;">
                  <h4 style="margin-top: -12px; color: <?php if (array_key_exists(6,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?>; font-size: 22px">
                  <?php
                        if (array_key_exists(6,$obj->ball_array)){
                            echo $obj->ball_array[6]->ball_number;
                        }
                        else {
                           echo $obj->dashs;
                        }
                  ?>
                  </h4>
                  <div class="project-info-sub-icon" style="background: <?php if (array_key_exists(6,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?>; width: 30px; height: 30px; margin-right: -12px; margin-top: -10px; border: 1px solid <?php if (array_key_exists(6,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?>">
                     <p style="font-size: 18px; color: <?php if (array_key_exists(6,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?> ">
                 7</p>
                  </div>
                   </div></a>
            </div>
            
                
                      <div class="project-info-count col-lg-1 col-md-1" style="margin-left: 0px;">
               <a onclick="getSummary8('1')"><div class="project-info-icon" style="background: <?php if (array_key_exists(7,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?> ; border: 3px solid <?php if (array_key_exists(7,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?>; width: 80px; height: 80px;">
                  <h4 style="margin-top: -12px; color: <?php if (array_key_exists(7,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?>; font-size: 22px">
                  <?php
                        if (array_key_exists(7,$obj->ball_array)){
                            echo $obj->ball_array[7]->ball_number;
                        }
                        else {
                           echo $obj->dashs;
                        }
                  ?>
                  </h4>
                  <div class="project-info-sub-icon" style="background: <?php if (array_key_exists(7,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?>; width: 30px; height: 30px; margin-right: -12px; margin-top: -10px; border: 1px solid <?php if (array_key_exists(7,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?>">
                     <p style="font-size: 18px; color: <?php if (array_key_exists(7,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?> ">
                 8</p>
                  </div>
                   </div></a>
            </div>
            
            
        
           
                                      <div class="project-info-count col-lg-1 col-md-1" style="margin-left: 0px;">
              <a onclick="getSummary9('1')"> <div class="project-info-icon" style="background: <?php if (array_key_exists(8,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?> ; border: 3px solid <?php if (array_key_exists(8,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?>; width: 80px; height: 80px;">
                  <h4 style="margin-top: -12px; color: <?php if (array_key_exists(8,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?>; font-size: 22px">
                  <?php
                        if (array_key_exists(8,$obj->ball_array)){
                            echo $obj->ball_array[8]->ball_number;
                        }
                        else {
                           echo $obj->dashs;
                        }
                  ?>
                  </h4>
                  <div class="project-info-sub-icon" style="background: <?php if (array_key_exists(8,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?>; width: 30px; height: 30px; margin-right: -12px; margin-top: -10px; border: 1px solid <?php if (array_key_exists(8,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?>">
                     <p style="font-size: 18px; color: <?php if (array_key_exists(8,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?> ">
                 9</p>
                  </div>
                  </div></a>
            </div>
            
            
                
                
                                 <div class="project-info-count col-lg-1 col-md-1" style="margin-left: 0px;">
               <a onclick="getSummary10('1')"><div class="project-info-icon" style="background: <?php if (array_key_exists(9,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?> ; border: 3px solid <?php if (array_key_exists(9,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?>; width: 80px; height: 80px;">
                  <h4 style="margin-top: -12px; color: <?php if (array_key_exists(9,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?>; font-size: 22px">
                  <?php
                        if (array_key_exists(9,$obj->ball_array)){
                            echo $obj->ball_array[9]->ball_number;
                        }
                        else {
                           echo $obj->dashs;
                        }
                  ?>
                  </h4>
                  <div class="project-info-sub-icon" style="background: <?php if (array_key_exists(9,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?>; width: 30px; height: 30px; margin-right: -12px; margin-top: -10px; border: 1px solid <?php if (array_key_exists(9,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?>">
                     <p style="font-size: 18px; color: <?php if (array_key_exists(9,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?> ">
                 10</p>
                  </div>
                   </div></a>
            </div>
            
            
            
                                      <div class="project-info-count col-lg-1 col-md-1" style="margin-left: 0px;">
               <a onclick="getSummary11('1')"><div class="project-info-icon" style="background: <?php if (array_key_exists(10,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?> ; border: 3px solid <?php if (array_key_exists(10,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?>; width: 80px; height: 80px;">
                  <h4 style="margin-top: -12px; color: <?php if (array_key_exists(10,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?>; font-size: 22px">
                  <?php
                        if (array_key_exists(10,$obj->ball_array)){
                            echo $obj->ball_array[10]->ball_number;
                        }
                        else {
                           echo $obj->dashs;
                        }
                  ?>
                  </h4>
                  <div class="project-info-sub-icon" style="background: <?php if (array_key_exists(10,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?>; width: 30px; height: 30px; margin-right: -12px; margin-top: -10px; border: 1px solid <?php if (array_key_exists(10,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?>">
                     <p style="font-size: 18px; color: <?php if (array_key_exists(10,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?> ">
                 11</p>
                  </div>
                   </div></a>
            </div>
            
            
            
                                      <div class="project-info-count col-lg-1 col-md-1" style="margin-left: 0px;">
               <a onclick="getSummary12('1')"><div class="project-info-icon" style="background: <?php if (array_key_exists(11,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?> ; border: 3px solid <?php if (array_key_exists(11,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?>; width: 80px; height: 80px;">
                  <h4 style="margin-top: -12px; color: <?php if (array_key_exists(11,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?>; font-size: 22px">
                  <?php
                        if (array_key_exists(11,$obj->ball_array)){
                            echo $obj->ball_array[11]->ball_number;
                        }
                        else {
                           echo $obj->dashs;
                        }
                  ?>
                  </h4>
                  <div class="project-info-sub-icon" style="background: <?php if (array_key_exists(11,$obj->ball_array)){ echo $obj->green;}else {echo $obj->gray;} ?>; width: 30px; height: 30px; margin-right: -12px; margin-top: -10px; border: 1px solid <?php if (array_key_exists(11,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?>">
                     <p style="font-size: 18px; color: <?php if (array_key_exists(11,$obj->ball_array)){ echo $obj->white;}else {echo $obj->black;} ?> ">
                 12</p>
                  </div>
                   </div></a>
            </div>
            
            

         </div>


                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12">
        <div class="card">
                <div class="card-header">
                <h4 class="card-title">إنجاز جهات الوزارة ذات العلاقة</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
            <div class="card-body">
                <div class="card-block" style="font-family: tahoma;">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5 clearfix" onclick="set_data(1);" data-toggle="modal" data-target="#myModal1">
                            <div class="media">
                                <div class="media-left">
                                    <img class="media-object img-xl" src="../../../app-assets/images/logos/housing.jpg" alt="Generic placeholder image">
                                </div>
                                <div class="media-body">
                                    <p>وزارة الإسكان </p>
                                    <progress class="progress progress-sm progress-success mb-1" value="45" max="100"></progress>
                                    <h6 class="text-bold-500 mb-0">المنتهية: <?php echo $obj->task1no; ?>٪  -  المتأخرة: <?php echo $obj->task1done; ?>%</h6>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-3 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5 clearfix" onclick="set_data(1);" data-toggle="modal" data-target="#myModal2">
                           
                            <div class="media">
                                <div class="media-left">
                                    <img class="media-object img-xl" src="../../../app-assets/images/logos/etmam.jpg" alt="Generic placeholder image">
                                </div>
                                <div class="media-body">
                                    <p>إتمام </p>
                                    <progress class="progress progress-sm progress-danger mb-1" value="25" max="100"></progress>
                                    <h6 class="text-bold-500 mb-0">المنتهية: <?php echo $obj->task2no; ?>٪  -  المتأخرة: <?php echo $obj->task2done; ?>%</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5 clearfix" onclick="set_data(1);" data-toggle="modal" data-target="#myModal3">
                            <div class="media">
                                <div class="media-left">
                                    <img class="media-object img-xl" src="../../../app-assets/images/logos/wafi.jpg" alt="Generic placeholder image">
                                </div>
                                <div class="media-body">
                                    <p>وافي </p>
                                    <progress class="progress progress-sm progress-success mb-1" value="80" max="100"></progress>
                                    <h6 class="text-bold-500 mb-0">المنتهية: <?php echo $obj->task3no; ?>٪  -  المتأخرة: <?php echo $obj->task3done; ?>%</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5 clearfix" onclick="set_data(1);" data-toggle="modal" data-target="#myModal4">
                            <div class="media">
                                <div class="media-left">
                                    <img class="media-object img-xl" src="../../../app-assets/images/logos/idle_lands.jpg" alt="Generic placeholder image">
                                </div>
                                <div class="media-body">
                                    <p>الأراضي البيضاء </p>
                                    <progress class="progress progress-sm progress-danger mb-1" value="34" max="100"></progress>
                                   <h6 class="text-bold-500 mb-0">المنتهية: <?php echo $obj->task4no; ?>٪  -  المتأخرة: <?php echo $obj->task4done; ?>%</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--fitness stats-->
<!-- fitness target -->
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5">
                        <div class="my-1 text-xs-center">
                            <div class="card-header mb-2 pt-0">
                                <h3 class="primary">الفلل</h3>
                                <h5 class="font-large-2 text-bold-200" ><?php echo $obj->villas;?></h5>
                            </div>
                            <div class="card-body" style="margin-top: -30px">
                                <input type="text" value="<?php echo $obj->villas/10;?>" class="knob hide-value responsive angle-offset" data-angleOffset="0" data-thickness=".15" data-linecap="round" data-width="130" data-height="130" data-inputColor="#BABFC7" data-readOnly="true" data-fgColor="#00B5B8" data-knob-icon="icon-home">
                                <ul class="list-inline clearfix pt-1 mb-0">
                                    <li class="border-right-grey border-right-lighten-2 pr-2">
                                        <h2 class="grey darken-1 text-bold-400" id="villaD">25%</h2>
                                        <span class="primary"><span class="ft-arrow-up"></span> المستلمة</span>
                                    </li>
                                    <li class="pl-2">
                                        <h2 class="grey darken-1 text-bold-400" id="villaA">75%</h2>
                                        <span class="danger"><span class="ft-arrow-down"></span> غير مستلمة</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5">
                        <div class="my-1 text-xs-center">
                            <div class="card-header mb-2 pt-0">
                                <h3 class="danger">الأراضي</h3>
                                <h5 class="font-large-2 text-bold-200"><?php echo $obj->landing;?></h5>
                            </div>
                            <div class="card-body" style="margin-top: -30px">
                                <input type="text" value="<?php echo $obj->landing/10;?>" class="knob hide-value responsive angle-offset" data-angleOffset="0" data-thickness=".15" data-linecap="round" data-width="130" data-height="130" data-inputColor="#BABFC7" data-readOnly="true" data-fgColor="#FF7588" data-knob-icon="icon-map">
                                <ul class="list-inline clearfix pt-1 mb-0">
                                    <li class="border-right-grey border-right-lighten-2 pr-2">
                                        <h2 class="grey darken-1 text-bold-400" id="landingD">60%</h2>
                                        <span class="primary"><span class="ft-arrow-up"></span> المستلمة</span>
                                    </li>
                                    <li class="pl-2">
                                        <h2 class="grey darken-1 text-bold-400" id="landingA">40%</h2>
                                        <span class="danger"><span class="ft-arrow-down"></span> غير مستلمة</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5">
                        <div class="my-1 text-xs-center">
                            <div class="card-header mb-2 pt-0">
                                <h3 class="warning">البيع على الخارطة</h3>
                                <h5 class="font-large-2 text-bold-200"><?php echo $obj->mapsale;?></h5>
                            </div>
                            <div class="card-body" style="margin-top: -30px">
                                <input type="text" value="<?php echo $obj->mapsale/10;?>" class="knob hide-value responsive angle-offset" data-angleOffset="0" data-thickness=".15" data-linecap="round" data-width="130" data-height="130" data-inputColor="#BABFC7" data-readOnly="true" data-fgColor="#FFA87D" data-knob-icon="icon-pointer">
                                <ul class="list-inline clearfix pt-1 mb-0">
                                    <li class="border-right-grey border-right-lighten-2 pr-2">
                                        <h2 class="grey darken-1 text-bold-400" id="mapsaleD">81%</h2>
                                        <span class="primary"><span class="ft-arrow-up"></span> المستلمة</span>
                                    </li>
                                    <li class="pl-2">
                                        <h2 class="grey darken-1 text-bold-400" id="mapsaleA">19%</h2>
                                        <span class="danger"><span class="ft-arrow-down"></span> غير مستلمة</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12">
                        <div class="my-1 text-xs-center">
                            <div class="card-header mb-2 pt-0">
                                <h3 class="success">الصندوق العقاري</h3>
                                <h5 class="font-large-2 text-bold-200"><?php echo $obj->loan;?></h5>
                            </div>
                            <div class="card-body" style="margin-top: -30px">
                                <input type="text" value="<?php echo $obj->loan/10;?>" class="knob hide-value responsive angle-offset" data-angleOffset="0" data-thickness=".15" data-linecap="round" data-width="130" data-height="130" data-inputColor="#BABFC7" data-readOnly="true" data-fgColor="#16D39A" data-knob-icon="icon-layers">
                                <ul class="list-inline clearfix pt-1 mb-0">
                                    <li class="border-right-grey border-right-lighten-2 pr-2">
                                        <h2 class="grey darken-1 text-bold-400" id="loanD">35%</h2>
                                        <span class="primary"><span class="ft-arrow-up"></span> المستلمة</span>
                                    </li>
                                    <li class="pl-2">
                                        <h2 class="grey darken-1 text-bold-400" id="loanA">65%</h2>
                                        <span class="danger"><span class="ft-arrow-down"></span> غير مستلمة</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ fitness target -->

    <!-- <div class="app-content content container-fluid"> -->

<div class="row">
    <div class="col-xs-12">
        <div class="card">
                <div class="card-header">
                <h4 class="card-title">إنجاز الجهات الخارجية</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
              </div>
            <div class="card-body">
                <div class="card-block" style="font-family: tahoma;">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5 clearfix" onclick="set_data(1);" data-toggle="modal" data-target="#myModal5">
                            <div class="media">
                                <div class="media-left">
                                    <img class="media-object img-xl" src="../../../app-assets/images/logos/moj.jpg" alt="Generic placeholder image">
                                </div>
                                <div class="media-body">
                                    <p>وزارة العدل </p>
                                    <progress class="progress progress-sm progress-success mb-1" value="45" max="100"></progress>
                                    <h6 class="text-bold-500 mb-0">المنتهية: <?php echo $obj->task5no; ?>٪  -  المتأخرة: <?php echo $obj->task5done; ?>%</h6>
                                </div>
                            </div>
                        </div>
                       <div class="col-xl-3 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5 clearfix" onclick="set_data(1);" data-toggle="modal" data-target="#myModal6">
                            <div class="media">
                                <div class="media-left">
                                    <img class="media-object img-xl" src="../../../app-assets/images/logos/momra.jpg" alt="Generic placeholder image">
                                </div>
                                <div class="media-body">
                                    <p>وزارة الشؤون البلدية والقروية </p>
                                    <progress class="progress progress-sm progress-danger mb-1" value="25" max="100"></progress>
                                   <h6 class="text-bold-500 mb-0">المنتهية: <?php echo $obj->task6no; ?>٪  -  المتأخرة: <?php echo $obj->task6done; ?>%</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5 clearfix" onclick="set_data(1);" data-toggle="modal" data-target="#myModal7">
                            <div class="media">
                                <div class="media-left">
                                    <img class="media-object img-xl" src="../../../app-assets/images/logos/mof.jpg" alt="Generic placeholder image">
                                </div>
                                <div class="media-body">
                                    <p>مصلحة أملاك الدولة </p>
                                    <progress class="progress progress-sm progress-success mb-1" value="80" max="100"></progress>
                                    <h6 class="text-bold-500 mb-0">المنتهية: <?php echo $obj->task7no; ?>٪  -  المتأخرة: <?php echo $obj->task7done; ?>%</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5 clearfix" onclick="set_data(1);" data-toggle="modal" data-target="#myModal8">
                            <div class="media">
                                <div class="media-left">
                                    <img class="media-object img-xl" src="../../../app-assets/images/logos/saudi-logo.jpg" alt="Generic placeholder image">
                                </div>
                                <div class="media-body">
                                    <p>بقية الجهات </p>
                                    <progress class="progress progress-sm progress-danger mb-1" value="34" max="100"></progress>
                                    <h6 class="text-bold-500 mb-0">المنتهية: <?php echo $obj->task8no; ?>٪  -  المتأخرة: <?php echo $obj->task8done; ?>%</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- <div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-large-1">شارت تخصيص الفلل والأراضي</h3>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                <div class="card-block">
                    <div id="basic-column" class="height-400 echart-container"></div>
                </div>
            </div>
        </div>
    </div>
</div> -->


<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title font-large-1">شارت المخصص والمستلم من المنتجات</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                <div class="card-block">
                    <div id="stacked-clustered-column" class="height-400 echart-container"></div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="row">

        <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header no-border-bottom">
                <h4 class="card-title">آخر المعاملات</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                <div id="daily-activity" class="table-responsive height-450">
                    <table class="table table-hover mb-0" style="font-family: tahoma">
                        <thead>
                            <tr>
                                <th>الأيام</th>
                                <th>المهمة</th>
                                <th>الجهة</th>
                                <th>الحالة</th>
                            </tr>
                        </thead>
                        <?php $icount = count($obj->tasklatest);
                            for($i=0;$i <= $icount;$i++){?>
                        <tbody>
                           <tr>
                                <td class="text-truncate"><?php echo $obj->task1latest[$i]->period;?></td>
                               <?php if($obj->task1latest[$i]->task == 1){?>
                                <td class="text-truncate">مخططات</td>
                               <?php }elseif($obj->task1latest[$i]->task == 2){?>
                                <td class="text-truncate">منتجات</td>
                               <?php }elseif($obj->task1latest[$i]->task == 3){?>
                                <td class="text-truncate">بنوك</td>
                                <?php }elseif($obj->task1latest[$i]->task == 4){?>
                                <td class="text-truncate">الوزاره</td>
                                 <?php }elseif($obj->task1latest[$i]->task == 5){?>
                               
                                <td class="text-truncate">اخرى</td>
                                <?php }?>
                                <?php if($obj->task1latest[$i]->org_id == 1){?>
                                <td class="text-truncate">وزارة الاسكان</td>
                               <?php }elseif($obj->task1latest[$i]->org_id == 2){?>
                                <td class="text-truncate">اتمام</td>
                               <?php }elseif($obj->task1latest[$i]->org_id == 3){?>
                                <td class="text-truncate">وافي</td>
                                <?php }elseif($obj->task1latest[$i]->org_id == 4){?>
                                <td class="text-truncate">إدارة الأراضي والممتلكات</td>
                                <?php }elseif($obj->task1latest[$i]->org_id == 5){?>
                                <td class="text-truncate">وزارة العدل</td>
                               <?php }elseif($obj->task1latest[$i]->org_id == 6){?>
                                <td class="text-truncate">وزارة الشؤون البلدية والقروية</td>
                                <?php }elseif($obj->task1latest[$i]->org_id == 7){?>
                                <td class="text-truncate">مصلحة أملاك الدولة</td>
                                <?php }elseif($obj->task1latest[$i]->org_id == 8){?>
                                <td class="text-truncate">اخرى</td>
                                <?php }?>
                                
                               
                                <?php if($obj->task1latest[$i]->done_notDone == 1){?>
                                <td class="text-truncate"><span class="tag tag-default tag-success">تمت</span></td>
                               <?php }elseif($obj->task1latest[$i]->done_notDone == 2){?>
                                <td class="text-truncate"><span class="tag tag-default tag-danger">لم تتم</span></td>
                                <?php }?>
                            </tr>
                           

                        </tbody>
                        <?php }?>
                    </table>
                </div>
            </div>
        </div>
    </div>

        <!-- Timeline Chart -->
        <div class="col-xl-6 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">أهم معوقات التسليم</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                        <div id="timeline" class="height-400 echart-container"></div>
                    </div>
                </div>
            </div>
        </div>

</div>


<div class="row">

        <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header no-border-bottom">
                <h4 class="card-title">خريطة المناطق </h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
            <div id="mapsvgg" width="100%" height="500px"></div>
           

            </div>
        </div>
    </div>

        <!-- Timeline Chart -->

    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">جدول التخصيص</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                <div class="card-block card-dashboard">
                    <div class="table-responsive">
                        <table class="table" style="font-family: tahoma;">
                            <thead>
                                <tr>
                                    <th>الدفعة</th>
                                    <th colspan="2" style="text-align: center;">الفلل</th>
                                    <th colspan="2">الأراضي</th>
                                    <th colspan="2">بيع الخارطة</th>
                                    <th colspan="2">القروض</th>
                                </tr>
                                <tr>
                                    <th>#</th>
                                    <th>مخصص</th>
                                    <th>مسلم</th>
                                    <th>مخصص</th>
                                    <th>مسلم</th>
                                    <th>مخصص</th>
                                    <th>مسلم</th>
                                    <th>مخصص</th>
                                    <th>مسلم</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <tr>
                                    <th scope="row">1</th>
                                    <td><?php echo $obj->villa_array[0]->allocated_no;?></td>
                                    <td><?php echo $obj->villa_array[0]->deliverd_no;?></td>
                                    <td><?php echo $obj->landing_array[0]->allocated_no;?></td>
                                    <td><?php echo $obj->landing_array[0]->deliverd_no ;?></td>
                                    <td><?php echo $obj->mapsale_array[0]->allocated_no;?></td>
                                    <td><?php echo $obj->mapsale_array[0]->deliverd_no ;?></td>
                                    <td><?php echo $obj->loan_array[0]->loans_coun;?></td>
                                    <td><?php echo $obj->loan_array[0]->loand_approved;?></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                   <td><?php echo $obj->villa_array[1]->allocated_no;?></td>
                                    <td><?php echo $obj->villa_array[1]->deliverd_no;?></td>
                                    <td><?php echo $obj->landing_array[1]->allocated_no;?></td>
                                    <td><?php echo $obj->landing_array[1]->deliverd_no;?></td>
                                    <td><?php echo $obj->mapsale_array[1]->allocated_no;?></td>
                                    <td><?php echo $obj->mapsale_array[1]->deliverd_no;?></td>
                                    <td><?php echo $obj->loan_array[1]->loans_coun;?></td>
                                    <td><?php echo $obj->loan_array[1]->loand_approved;?></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>1,200</td>
                                    <td>200</td>
                                    <td>1,200</td>
                                    <td>200</td>
                                    <td>1,200</td>
                                    <td>200</td>
                                    <td>1,200</td>
                                    <td>200</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>1,200</td>
                                    <td>200</td>
                                    <td>1,200</td>
                                    <td>200</td>
                                    <td>1,200</td>
                                    <td>200</td>
                                    <td>1,200</td>
                                    <td>200</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>1,200</td>
                                    <td>200</td>
                                    <td>1,200</td>
                                    <td>200</td>
                                    <td>1,200</td>
                                    <td>200</td>
                                    <td>1,200</td>
                                    <td>200</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>1,200</td>
                                    <td>200</td>
                                    <td>1,200</td>
                                    <td>200</td>
                                    <td>1,200</td>
                                    <td>200</td>
                                    <td>1,200</td>
                                    <td>200</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>----</td>
                                    <td>----</td>
                                    <td>----</td>
                                    <td>----</td>
                                    <td>----</td>
                                    <td>----</td>
                                    <td>----</td>
                                    <td>----</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>----</td>
                                    <td>----</td>
                                    <td>----</td>
                                    <td>----</td>
                                    <td>----</td>
                                    <td>----</td>
                                    <td>----</td>
                                    <td>----</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>----</td>
                                    <td>----</td>
                                    <td>----</td>
                                    <td>----</td>
                                    <td>----</td>
                                    <td>----</td>
                                    <td>----</td>
                                    <td>----</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

      <div class="col-xl-12">
        <div class="card">
            <div class="card-header no-border-bottom">
                <h4 class="card-title"> الملفات</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                <div id="daily-activity" class="table-responsive ">
                    <table class="table table-hover mb-0" style="font-family: tahoma">
                        <thead>
                            <tr>
                            
                                <th>المدينه</th>
                                <th>المطور</th>
                                <th>المشروع</th>
                                <th>نوع الوحده</th>
                                <th>عدد الوحدات التقريبي</th>
                                <th>ملف المشروع</th>
                                <th>ملف المطور</th>
                                <th> رخصة التسويق</th>
                                <th> صك الارض</th>
                          
                            
                            </tr>
                        </thead>
                        <?php $icount = count($obj->todo);
                            for($i=0;$i <= $icount;$i++){?>
                        <tbody>
                           <tr>
                                
                                <td class="text-truncate"><?php echo $obj->todo[$i]->sa_city ;?></td>
                                <td class="text-truncate"><?php echo $obj->todo[$i]->dev;?></td>
                                <td class="text-truncate"><?php echo $obj->todo[$i]->project;?></td>
                                <td class="text-truncate"><?php echo $obj->todo[$i]->unite_type;?></td>
                                <td class="text-truncate"><?php echo $obj->todo[$i]->unite_no;?></td>
                                <td class="text-truncate"><?php echo $obj->todo[$i]->project_file;?></td>
                                <td class="text-truncate"><?php echo $obj->todo[$i]->dev_file;?></td>
                                <td class="text-truncate"><?php echo $obj->todo[$i]->selling_file;?></td>
                                <td class="text-truncate"><?php echo $obj->todo[$i]->instrument_file;?></td>
                               
                                
                            </tr>
                        </tbody>
                        <?php }?>
                    </table>
                </div>
            </div>
        </div>
    </div>


  <div class="row">
    <div class="col-md-9" style="margin-right: 150px">
          <div class="card">
              <div class="card-header">
                  <h2 class="card-title" id="horz-layout-icons">ملاحظات</h2>
                  <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                      <ul class="list-inline mb-0">
                          <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                          <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                          <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                          <li><a data-action="close"><i class="ft-x"></i></a></li>
                      </ul>
                  </div>
              </div>
              <div class="card-body collapse in">
                  <div class="card-block">

                      <form class="form form-horizontal">
                        <div class="form-body">
  

                <div class="form-group row">
                  <label class="col-md-3 label-control" for="timesheetinput7">الملاحظات</label>
                  <div class="col-md-9">
                    <div class="position-relative has-icon-left">
                                    <textarea id="timesheetinput7" rows="5" class="form-control" name="notes" placeholder="اكتب الملاحظة هنا"></textarea>
                                    <div class="form-control-position">
                                        <i class="ft-file"></i>
                                    </div>
                                  </div>
                              </div>
                </div>
              </div>

                          <div class="form-actions right">
                              <button type="submit" class="btn btn-primary">
                                  <i class="fa fa-check-square-o"></i> إرسال الملاحظة
                              </button>
                          </div>
                      </form>

                  </div>
              </div>
          </div>
      </div>
  </div>




</div>




<!-- activity charts -->

<!--/ activity charts -->
<!-- friends & weather charts -->
<!-- <div class="row match-height">
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-block">
                    <h4 class="card-title">Daily Diet</h4>
                    <p class="card-text">Some quick example text to build on the card.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <span class="tag tag-default tag-pill bg-primary float-xs-right">4</span> Protein Milk
                    </li>
                    <li class="list-group-item">
                        <span class="tag tag-default tag-pill bg-info float-xs-right">2</span> oz Water
                    </li>
                    <li class="list-group-item">
                        <span class="tag tag-default tag-pill bg-danger float-xs-right">8</span> Vegetable Juice
                    </li>
                    <li class="list-group-item">
                        <span class="tag tag-default tag-pill bg-warning float-xs-right">1</span> Sugar Free Jello-O
                    </li>
                    <li class="list-group-item">
                        <span class="tag tag-default tag-pill bg-success float-xs-right">3</span> Protein Meal
                    </li>
                </ul>
                <div class="card-block">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-12 col-xs-12">
        <div class="card no-border box-shadow-0">
            <div class="card-body collapse in">
                <div class="weather-date position-relative">
                    <div class="date-info position-absolute bg-success bg-lighten-1 white p-1 text-xs-center">
                        <span class="date block">14</span>
                        <span class="month">Nov</span>
                    </div>
                </div>
                <div class="card-block bg-success bg-lighten-4">
                    <ul class="list-inline text-xs-right">
                        <li><a data-action="reload"><i class="ft-rotate-cw font-medium-4 success"></i></a></li>
                    </ul>
                    <div class="animated-weather-icons text-xs-center">
                        <svg version="1.1" id="wind1" class="climacon climacon_wind climacon-success climacon-darken-2 height-200" viewBox="15 15 70 70">
                            <g class="climacon_iconWrap climacon_iconWrap-wind">
                                <g class="climacon_wrapperComponent climacon_componentWrap-wind">
                                    <path class="climacon_component climacon_component-stroke climacon_component-wind climacon_component-wind_curl" d="M65.999,52L65.999,52h-3c-1.104,0-2-0.895-2-1.999c0-1.104,0.896-2,2-2h3c1.104,0,2-0.896,2-1.999c0-1.105-0.896-2-2-2s-2-0.896-2-2s0.896-2,2-2c0.138,0,0.271,0.014,0.401,0.041c3.121,0.211,5.597,2.783,5.597,5.959C71.997,49.314,69.312,52,65.999,52z" />
                                    <path class="climacon_component climacon_component-stroke climacon_component-wind" d="M55.999,48.001h-2h-6.998H34.002c-1.104,0-1.999,0.896-1.999,2c0,1.104,0.895,1.999,1.999,1.999h2h3.999h3h4h3h3.998h2c3.313,0,6,2.688,6,6c0,3.176-2.476,5.748-5.597,5.959C56.271,63.986,56.139,64,55.999,64c-1.104,0-2-0.896-2-2c0-1.105,0.896-2,2-2s2-0.896,2-2s-0.896-2-2-2h-2h-3.998h-3h-4h-3h-3.999h-2c-3.313,0-5.999-2.686-5.999-5.999c0-3.175,2.475-5.747,5.596-5.959c0.131-0.026,0.266-0.04,0.403-0.04l0,0h12.999h6.998h2c1.104,0,2-0.896,2-2s-0.896-2-2-2s-2-0.895-2-2c0-1.104,0.896-2,2-2c0.14,0,0.272,0.015,0.403,0.041c3.121,0.211,5.597,2.783,5.597,5.959C61.999,45.314,59.312,48.001,55.999,48.001z" />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="weather-details text-xs-center">
                        <span class="pt-2 block success darken-2">Windy</span>
                        <span class="font-medium-4 text-bold-500 success darken-4">Beijing, China</span>
                    </div>
                </div>
                <div class="card-footer bg-success bg-darken-3 py-3 text-xs-center no-border">
                    <div class="row">
                        <div class="col-xs-4 text-xs-center display-table-cell">
                            <i class="me-wind font-large-1 white lighten-3 valign-middle"></i> <span class="white valign-middle">2MPH</span>
                        </div>
                        <div class="col-xs-4 text-xs-center display-table-cell">
                            <i class="me-sun2 font-large-1 white lighten-3 valign-middle"></i> <span class="white valign-middle">2%</span>
                        </div>
                        <div class="col-xs-4 text-xs-center display-table-cell">
                            <i class="me-thermometer font-large-1 white lighten-3 valign-middle"></i> <span class="white valign-middle">13.0&deg;</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Friends</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div id="friends-activity" class="list-group height-400 position-relative">
                    <a href="#" class="list-group-item list-group-item-action media no-border">
                        <div class="media-left">
                            <img class="media-object avatar avatar-sm rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-7.png" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="list-group-item-heading">Kristopher Candy <span class="font-medium-4 float-xs-right">1,0215</span></h5>
                            <p class="list-group-item-text"><span class="tag tag-success">Running</span><span class="tag tag-warning ml-1">Cycling</span></p>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action media no-border">
                        <div class="media-left">
                            <img class="media-object avatar avatar-sm rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-8.png" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="list-group-item-heading">Lawrence Fowler <span class="font-medium-4 float-xs-right">2,0215</span></h5>
                            <p class="list-group-item-text"><span class="tag tag-danger">Dancing</span> <span class="tag tag-primary ml-1">Fitness</span></p>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action media no-border">
                        <div class="media-left">
                            <img class="media-object avatar avatar-sm rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-9.png" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="list-group-item-heading">Linda Olson <span class="font-medium-4 float-xs-right">1,112</span></h5>
                            <p class="list-group-item-text"><span class="tag tag-success">Running</span> <span class="tag tag-warning ml-1">Cycling</span> <span class="tag bg-grey ml-1">Other</span></p>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action media no-border">
                        <div class="media-left">
                            <img class="media-object avatar avatar-sm rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-10.png" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="list-group-item-heading">Roy Clark <span class="font-medium-4 float-xs-right">2,815</span></h5>
                            <p class="list-group-item-text"><span class="tag tag-warning">Fitness</span> <span class="tag tag-danger ml-1">Dancing</span></p>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action media no-border">
                        <div class="media-left">
                            <img class="media-object avatar avatar-sm rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-11.png" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="list-group-item-heading">Tammy Gonzales <span class="font-medium-4 float-xs-right">3,226</span></h5>
                            <p class="list-group-item-text"><span class="tag tag-danger">Dancing</span> <span class="tag tag-success ml-1">Running</span></p>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action media no-border">
                        <div class="media-left">
                            <img class="media-object avatar avatar-sm rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-12.png" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="list-group-item-heading">Justin Hawkins <span class="font-medium-4 float-xs-right">4,564</span></h5>
                            <p class="list-group-item-text"><span class="tag tag-success">Running</span> <span class="tag tag-primary ml-1">Fitness</span></p>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action media no-border">
                        <div class="media-left">
                            <img class="media-object avatar avatar-sm rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-10.png" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="list-group-item-heading">Roy Clark <span class="font-medium-4 float-xs-right">2,815</span></h5>
                            <p class="list-group-item-text"><span class="tag tag-warning">Fitness</span> <span class="tag tag-danger ml-1">Dancing</span></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- friends & weather charts -->
<!-- Running Routes & Daily Activities  -->
<!-- <div class="row">
    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header no-border-bottom">
                <h4 class="card-title">Running Routes</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                <div class="card-block">
                    <div id="routes" class="height-300"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header no-border-bottom">
                <h4 class="card-title">Daily Activity</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                <div id="daily-activity" class="table-responsive height-350">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>
                                    <input type="checkbox" id="icheck-input-all" class="icheck-activity">
                                </th>
                                <th>Time</th>
                                <th>Activity</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-truncate">
                                    <input type="checkbox" id="icheck-input-1" class="icheck-activity" checked>
                                </td>
                                <td class="text-truncate">5.00 A.M</td>
                                <td class="text-truncate">Bricks Walking</td>
                                <td class="text-truncate"><span class="tag tag-default tag-success">Done</span></td>
                            </tr>
                            <tr>
                                <td class="text-truncate">
                                    <input type="checkbox" id="icheck-input-2" class="icheck-activity" checked>
                                </td>
                                <td class="text-truncate">5.30 A.M</td>
                                <td class="text-truncate">Morning Exercise</td>
                                <td class="text-truncate"><span class="tag tag-default tag-success">Done</span></td>
                            </tr>
                            <tr>
                                <td class="text-truncate">
                                    <input type="checkbox" id="icheck-input-3" class="icheck-activity">
                                </td>
                                <td class="text-truncate">6.30 A.M</td>
                                <td class="text-truncate">Yoga</td>
                                <td class="text-truncate"><span class="tag tag-default tag-danger">Missed</span></td>
                            </tr>
                            <tr>
                                <td class="text-truncate">
                                    <input type="checkbox" id="icheck-input-4" class="icheck-activity" checked>
                                </td>
                                <td class="text-truncate">7.00 A.M</td>
                                <td class="text-truncate">Gym</td>
                                <td class="text-truncate"><span class="tag tag-default tag-success">Done</span></td>
                            </tr>
                            <tr>
                                <td class="text-truncate">
                                    <input type="checkbox" id="icheck-input-5" class="icheck-activity" checked>
                                </td>
                                <td class="text-truncate">8.00 A.M</td>
                                <td class="text-truncate">Steam Bath</td>
                                <td class="text-truncate"><span class="tag tag-default tag-success">Done</span></td>
                            </tr>
                            <tr>
                                <td class="text-truncate">
                                    <input type="checkbox" id="icheck-input-6" class="icheck-activity">
                                </td>
                                <td class="text-truncate">9.00 A.M</td>
                                <td class="text-truncate">Meditation</td>
                                <td class="text-truncate"><span class="tag tag-default tag-danger">Missed</span></td>
                            </tr>
                            <tr>
                                <td class="text-truncate">
                                    <input type="checkbox" id="icheck-input-7" class="icheck-activity">
                                </td>
                                <td class="text-truncate">8.00 P.M</td>
                                <td class="text-truncate">Bricks Walking</td>
                                <td class="text-truncate"><span class="tag tag-default tag-warning">Delayed</span></td>
                            </tr>
                            <tr>
                                <td class="text-truncate">
                                    <input type="checkbox" id="icheck-input-8" class="icheck-activity">
                                </td>
                                <td class="text-truncate">9.00 P.M</td>
                                <td class="text-truncate">Exercise</td>
                                <td class="text-truncate"><span class="tag tag-default tag-warning">Delayed</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!--/ Running Routes & Daily Activities  -->
<!-- fitness info & twitter, facebook -->
<!-- <div class="row">
    <div class="col-xl-8 col-lg-12 col-md-12">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div id="carousel-example" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example" data-slide-to="1"></li>
                                <li data-target="#carousel-example" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img src="../../../app-assets/images/pages/fitness-slide-1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img src="../../../app-assets/images/pages/fitness-slide-2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img src="../../../app-assets/images/pages/fitness-slide-3.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example" role="button" data-slide="prev">
                                <span class="icon-prev" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example" role="button" data-slide="next">
                                <span class="icon-next" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="card-block">
                            <h5 class="card-title">Health News &amp; Fitness Advice</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                        <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                            <span class="float-xs-left">2 days ago</span>
                            <span class="tags float-xs-right">
                                <span class="tag tag-pill tag-primary">Branding</span>
                            <span class="tag tag-pill tag-danger">Design</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="card profile-card-with-cover">
                    <div class="card-body">
                        <div class="card-img-top img-fluid bg-cover height-200" style="background: url('../../../app-assets/images/pages/fitness-profile.jpg') 0 40%;"></div>
                        <div class="card-profile-image">
                            <img src="../../../app-assets/images/portrait/small/avatar-s-8.png" class="rounded-circle img-border box-shadow-1" alt="Card image">
                        </div>
                        <div class="profile-card-with-cover-content text-xs-center">
                            <div class="my-2">
                                <h4 class="card-title">Susan Garrett</h4>
                                <ul class="list-inline clearfix pt-2">
                                    <li class="pr-2">
                                        <h2 class="block">-2.05 <span class="font-small-3 text-muted">KG</span></h2> Body Fat</li>
                                    <li class="pr-2">
                                        <h2 class="block">52 <span class="font-small-3 text-muted">KG</span></h2> Target</li>
                                    <li>
                                        <h2 class="block">-2.1 <span class="font-small-3 text-muted">KG</span></h2> Weight</li>
                                </ul>
                            </div>
                            <div class="card-block">
                                <a href="#" class="btn btn-social btn-min-width pr-1 mb-1 btn-linkedin"><span class="ft-plus"></span> <span class="pl-1">Follow</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12 col-md-12">
        <div class="row">
            <div class="col-xl-12 col-lg-6 col-md-12">
                <div class="card bg-info white">
                    <div class="card-body p-2">
                        <div class="card-block">
                            <div class="text-xs-center mb-1">
                                <i class="fa fa-twitter font-large-3"></i>
                            </div>
                            <div class="tweet-slider">
                                <ul class="text-xs-center">
                                    <li>Congratulations to Rob Jones in accounting for winning our <span class="yellow">#NFL</span> football pool!</li>
                                    <li>Contests are a great thing to partner on. Partnerships immediately <span class="yellow">#DOUBLE</span> the reach.</li>
                                    <li>Puns, humor, and quotes are great content on <span class="yellow">#Twitter</span>. Find some related to your business.</li>
                                    <li>Are there <span class="yellow">#common-sense</span> facts related to your business? Combine them with a great photo.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-6 col-md-12">
                <div class="card bg-success white">
                    <div class="card-body p-2">
                        <div class="card-block">
                            <div class="text-xs-center mb-1">
                                <i class="fa fa-facebook font-large-3"></i>
                            </div>
                            <div class="fb-post-slider">
                                <ul class="text-xs-center">
                                    <li>Congratulations to Rob Jones in accounting for winning our #NFL football pool!</li>
                                    <li>Contests are a great thing to partner on. Partnerships immediately #DOUBLE the reach.</li>
                                    <li>Puns, humor, and quotes are great content on #Twitter. Find some related to your business.</li>
                                    <li>Are there #common-sense facts related to your business? Combine them with a great photo.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!--/ fitness info & twitter, facebook -->

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->




    <!-- BEGIN VENDOR JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyBDkKetQwosod2SZ7ZGCpxuJdxY3kxo5Po" type="text/javascript"></script>
    <script src="../../../app-assets/vendors/js/charts/gmaps.min.js" type="text/javascript"></script>
    <script src="../../../app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
    <script src="../../../app-assets/vendors/js/extensions/jquery.knob.min.js" type="text/javascript"></script>
    <script src="../../../app-assets/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
    <script src="../../../app-assets/vendors/js/charts/morris.min.js" type="text/javascript"></script>
    <script src="../../../app-assets/vendors/js/charts/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="../../../app-assets/vendors/js/extensions/unslider-min.js" type="text/javascript"></script>
    <script src="../../../app-assets/vendors/js/charts/echarts/echarts.js" type="text/javascript"></script>
    <script src="../../../app-assets/js/scripts/charts/echarts/bar-column/basic-column.js" type="text/javascript"></script>
    <script src="../../../app-assets/vendors/js/charts/jvector/jquery-jvectormap-saudi-lcc.js" type="text/javascript"></script>
<!--    <script src="../../../app-assets/js/scripts/charts/echarts/pie-doughnut/timeline.js" type="text/javascript"></script>-->




<script>
    /*=========================================================================================
    File Name: stacked-clustered-column.js
    Description: echarts stacked clustered column chart
    ----------------------------------------------------------------------------------------
    Item Name: Stack - Responsive Admin Theme
    Version: 1.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

// Stacked clustered column chart
// ------------------------------

$(window).on("load", function(){

    // Set paths
    // ------------------------------

    require.config({
        paths: {
            echarts: '../../../app-assets/vendors/js/charts/echarts'
        }
    });


    // Configuration
    // ------------------------------

    require(
        [
            'echarts',
            'echarts/chart/bar',
            'echarts/chart/line'
        ],


        // Charts setup
        function (ec) {
            // Initialize chart
            // ------------------------------
            var myChart = ec.init(document.getElementById('stacked-clustered-column'));

            // Chart Options
            // ------------------------------
            chartOptions = {

                // Setup grid
                grid: {
                    x: 40,
                    x2: 20,
                    y: 70,
                    y2: 30
                },

                // Add tooltip
                tooltip: {
                    trigger: 'axis'
                },

                // Add legend
                legend: {
                    data: [
                        'القروض المخصصة','الفلل المخصصة','الأراضي المخصصة','',
                        'القروض المستلمة','الفلل المستلمة','الأراضي المستلمة'
                    ]
                },

                // Enable drag recalculate
                calculable: true,

                // Horizontal axis
                xAxis: [{
                    type : 'category',
                    data : ['1الدفعة ','2الدفعة ','3الدفعة ','4الدفعة ','5الدفعة ','6الدفعة ','7الدفعة ','8الدفعة ','9الدفعة ','10الدفعة','11الدفعة','12الدفعة']
                    
//                      data : ['الدفعة 1','الدفعة 2','الدفعة 3','الدفعة 4','الدفعة 5','الدفعة 6','الدفعة 7','الدفعة 8','الدفعة 9','الدفعة 10','الدفعة 11','الدفعة 12']
                },
                {
                    type : 'category',
                    axisLine: {show:false},
                    axisTick: {show:false},
                    axisLabel: {show:false},
                    splitArea: {show:true},
                    splitLine: {show:false},
                    data : ['الدفعة 1','الدفعة 2','الدفعة 3','الدفعة 4','الدفعة 5','الدفعة 6','الدفعة 7','الدفعة 8','الدفعة 9','الدفعة 10','الدفعة 11','الدفعة 12']
                    
//                    data : ['الدفعة 1','الدفعة 2','الدفعة 3','الدفعة 4','الدفعة 5','الدفعة 6','الدفعة 7','الدفعة 8','الدفعة 9','الدفعة 10','الدفعة 11','الدفعة 12']
                }
                ],

                // Vertical axis
                yAxis: [{
                    type : 'value',
                    axisLabel:{formatter:'{value}'}
                }],

                // Add series
                series : [
                    {
                        name:'القروض المستلمة',
                        type:'bar',
                        itemStyle: {normal: {color:'rgba(22,211,154,1)', label:{show:true,textStyle:{color:'#007905'}}}},
                        data:[<?php echo $obj->ball1loan;?>,<?php echo $obj->ball2loan;?>,<?php echo $obj->ball3loan;?>,<?php echo $obj->ball4loan;?>,<?php echo $obj->ball5loan;?>,<?php echo $obj->ball6loan;?>,<?php echo $obj->ball7loan;?>,<?php echo $obj->ball8loan;?>,<?php echo $obj->ball9loan;?>,<?php echo $obj->ball10loan;?>,<?php echo $obj->ball11loan;?>,<?php echo $obj->ball12loan;?>]
                    },
                    {
                        name:'الفلل المستلمة',
                        type:'bar',
                        itemStyle: {normal: {color:'rgba(45,206,227,1)', label:{show:true,textStyle:{color:'#27727B'}}}},
                        data:[<?php echo $obj->ball1villa; ?>,<?php echo $obj->ball2villa; ?>,<?php echo $obj->ball3villa; ?>,<?php echo $obj->ball4villa; ?>,<?php echo $obj->ball5villa; ?>,<?php echo $obj->ball6villa; ?>,<?php echo $obj->ball7villa; ?>,<?php echo $obj->ball8villa; ?>,<?php echo $obj->ball9villa; ?>,<?php echo $obj->ball10villa; ?>,<?php echo $obj->ball11villa; ?>,<?php echo $obj->ball12villa; ?>]
                    },
                    {
                        name:'الأراضي المستلمة',
                        type:'bar',
                        itemStyle: {normal: {color:'rgba(249,142,118,1)', label:{show:true,textStyle:{color:'#d35806'}}}},
                        data:[<?php echo $obj->ball1landing;?>,<?php echo $obj->ball2landing;?>,<?php echo $obj->ball3landing;?>,<?php echo $obj->ball4landing;?>,<?php echo $obj->ball5landing;?>,<?php echo $obj->ball6landing;?>,<?php echo $obj->ball7landing;?>,<?php echo $obj->ball8landing;?>,<?php echo $obj->ball9landing;?>,<?php echo $obj->ball10landing;?>,<?php echo $obj->ball11landing;?>,<?php echo $obj->ball12landing;?>]
                    },
                    {
                        name:'القروض المخصصة',
                        type:'bar',
                        xAxisIndex:1,
                        itemStyle: {normal: {color:'rgba(22,211,154,0.7)', label:{show:true,formatter:function(p){return p.value > 0 ? (p.value +'\n'):'';}}}},
                        data:[<?php echo $obj->$ballallo1villa;?>,<?php echo $obj->$ballallo2villa;?>,<?php echo $obj->$ballallo3villa;?>,<?php echo $obj->$ballallo4villa;?>,<?php echo $obj->$ballallo5villa;?>,<?php echo $obj->$ballallo6villa;?>,<?php echo $obj->$ballallo7villa;?>,<?php echo $obj->$ballallo8villa;?>,<?php echo $obj->$ballallo9villa;?>,<?php echo $obj->$ballallo10villa;?>,<?php echo $obj->$ballallo11villa;?>,<?php echo $obj->$ballallo12villa;?>]
                    },
                    {
                        name:'الفلل المخصصة',
                        type:'bar',
                        xAxisIndex:1,
                        itemStyle: {normal: {color:'rgba(45,206,227,0.7)', label:{show:true}}},
                        data:[<?php echo $obj->$ballallo1villa;?>,<?php echo $obj->$ballallo2villa;?>,<?php echo $obj->$ballallo3villa;?>,<?php echo $obj->$ballallo4villa;?>,<?php echo $obj->$ballallo5villa;?>,<?php echo $obj->$ballallo6villa;?>,<?php echo $obj->$ballallo7villa;?>,<?php echo $obj->$ballallo8villa;?>,<?php echo $obj->$ballallo9villa;?>,<?php echo $obj->$ballallo10villa;?>,<?php echo $obj->$ballallo11villa;?>,<?php echo $obj->$ballallo12villa;?>]
                    },
                    {
                        name:'الأراضي المخصصة',
                        type:'bar',
                        xAxisIndex:1,
                        itemStyle: {normal: {color:'rgba(249,142,118,0.7)', label:{show:true,formatter:function(p){return p.value > 0 ? (p.value +'+'):'';}}}},
                        data:[<?php echo $obj->$ballallo1landing;?>,<?php echo $obj->$ballallo2landing;?>,<?php echo $obj->$ballallo3landing;?>,<?php echo $obj->$ballallo4landing;?>,<?php echo $obj->$ballallo5landing;?>,<?php echo $obj->$ballallo6landing;?>,<?php echo $obj->$ballallo7landing;?>,<?php echo $obj->$ballallo8landing;?>,<?php echo $obj->$ballallo9landing;?>,<?php echo $obj->$ballallo10landing;?>,<?php echo $obj->$ballallo11landing;?>,<?php echo $obj->$ballallo12landing;?>]
                    }
                ]
            };

            // Apply options
            // ------------------------------

            myChart.setOption(chartOptions);


            // Resize chart
            // ------------------------------

            $(function () {

                // Resize chart on menu width change and window resize
                $(window).on('resize', resize);
                $(".menu-toggle").on('click', resize);

                // Resize function
                function resize() {
                    setTimeout(function() {

                        // Resize chart
                        myChart.resize();
                    }, 200);
                }
            });
        }
    );
});
</script>

<script>
/*=========================================================================================
    File Name: timeline.js
    Description: echarts timeline chart
    ----------------------------------------------------------------------------------------
    Item Name: Stack - Responsive Admin Theme
    Version: 1.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

// Timeline chart
// ------------------------------

$(window).on("load", function(){

    // Set paths
    // ------------------------------

    require.config({
        paths: {
            echarts: '../../../app-assets/vendors/js/charts/echarts'
        }
    });


    // Configuration
    // ------------------------------

    require(
        [
            'echarts',
            'echarts/chart/pie',
            'echarts/chart/funnel'
        ],


        // Charts setup
        function (ec) {
            // Initialize chart
            // ------------------------------
            var myChart = ec.init(document.getElementById('timeline'));

            var idx = 1;

            // Chart Options
            // ------------------------------
            chartOptions = {

                // Add timeline
                timeline: {
                    x: 10,
                    x2: 10,
                    data: [
                                
                        '2017-01-15', '2017-02-15', '2017-03-15', '2017-04-15', '2017-05-15',
                        { name:'2017-06-15', symbol: 'emptyStar2', symbolSize: 8 },
                        '2017-07-15', '2017-08-15', '2017-09-15', '2017-10-15', '2017-11-15',
                        { name:'2017-12-15', symbol: 'star2', symbolSize: 8 }
                    ],
                    label: {
                        formatter: function(s) {
                            return s.slice(0, 7);
                        }
                    },
                    autoPlay: true,
                    playInterval: 3000
                },

                // Set options
                options: [
                    {

                        // Add title
                        title: {
                            text: 'معوقات التسليم',
                            subtext: 'أهم معوقات تسليم المنتاجات',
                            x: 'center'
                        },

                        // Add tooltip
                        tooltip: {
                            trigger: 'item',
                            formatter: "{a} <br/>{b}: {c} ({d}%)"
                        },

                        // Add legend
                        legend: {
                            x: 'left',
                            orient: 'vertical',
                            data: ['المخططات','المنتجات','الوزارة','البنوك','أخرى']
                        },

                        // Add custom colors
                        color: ['#00A5A8', '#626E82', '#FF7D4D','#FF4558', '#16D39A'],

                        // Display toolbox
                        toolbox: {
                            show: true,
                            orient: 'vertical',
                            feature: {
                                mark: {
                                    show: false,
                                    title: {
                                        mark: 'Markline switch',
                                        markUndo: 'Undo markline',
                                        markClear: 'Clear markline'
                                    }
                                },
                                dataView: {
                                    show: false,
                                    readOnly: false,
                                    title: 'View data',
                                    lang: ['View chart data', 'Close', 'Update']
                                },
                                magicType: {
                                    show: true,
                                    title: {
                                        pie: 'Switch to pies',
                                        funnel: 'Switch to funnel',
                                    },
                                    type: ['pie', 'funnel'],
                                    option: {
                                        funnel: {
                                            x: '25%',
                                            width: '50%',
                                            funnelAlign: 'left',
                                            max: 1700
                                        }
                                    }
                                },
                                restore: {
                                    show: true,
                                    title: 'Restore'
                                },
                                saveAsImage: {
                                    show: true,
                                    title: 'Same as image',
                                    lang: ['Save']
                                }
                            }
                        },

                        // Add series
                        series: [{
                            name: 'Browser',
                            type: 'pie',
                            center: ['50%', '50%'],
                            radius: '60%',
                            data: [
                                {value: <?php echo $obj->ball1bio;?> , name: 'المخططات'},
                                {value: <?php echo $obj->ball2bio;?>, name: 'المنتجات'},
                                {value: <?php echo $obj->ball3bio;?>, name: 'الوزارة'},
                                {value: <?php echo $obj->ball4bio;?>, name: 'البنوك'},
                                {value: <?php echo $obj->ball5bio;?>, name: 'أخرى'}
                            ]
                        }]
                    },

                    {
                        series: [{
                            name: 'Browser',
                            type: 'pie',
                            data: [
                               {value: <?php echo $obj->ball6bio;?> , name: 'المخططات'},
                                {value: <?php echo $obj->ball7bio;?>, name: 'المنتجات'},
                                {value: <?php echo $obj->ball8bio;?>, name: 'الوزارة'},
                                {value: <?php echo $obj->ball9bio;?>, name: 'البنوك'},
                                {value: <?php echo $obj->ball10bio;?>, name: 'أخرى'}
                            ]
                        }]
                    },
                    {
                        series: [{
                            name: 'Browser',
                            type: 'pie',
                            data: [
                               {value: <?php echo $obj->ball11bio;?> , name: 'المخططات'},
                                {value: <?php echo $obj->ball12bio;?>, name: 'المنتجات'},
                                {value: <?php echo $obj->ball13bio;?>, name: 'الوزارة'},
                                {value: <?php echo $obj->ball14bio;?>, name: 'البنوك'},
                                {value: <?php echo $obj->ball15bio;?>, name: 'أخرى'}
                            ]
                        }]
                    },
                    {
                        series: [{
                            name: 'Browser',
                            type: 'pie',
                            data: [
                               {value: <?php echo $obj->ball16bio;?> , name: 'المخططات'},
                                {value: <?php echo $obj->ball17bio;?>, name: 'المنتجات'},
                                {value: <?php echo $obj->ball18bio;?>, name: 'الوزارة'},
                                {value: <?php echo $obj->ball19bio;?>, name: 'البنوك'},
                                {value: <?php echo $obj->ball20bio;?>, name: 'أخرى'}
                            ]
                        }]
                    },
                    {
                        series: [{
                            name: 'Browser',
                            type: 'pie',
                            data: [
                               {value: <?php echo $obj->ball21bio;?> , name: 'المخططات'},
                                {value: <?php echo $obj->ball22bio;?>, name: 'المنتجات'},
                                {value: <?php echo $obj->ball23bio;?>, name: 'الوزارة'},
                                {value: <?php echo $obj->ball24bio;?>, name: 'البنوك'},
                                {value: <?php echo $obj->ball25bio;?>, name: 'أخرى'}
                            ]
                        }]
                    },
                    {
                        series: [{
                            name: 'Browser',
                            type: 'pie',
                            data: [
                                {value: <?php echo $obj->ball26bio;?> , name: 'المخططات'},
                                {value: <?php echo $obj->ball27bio;?>, name: 'المنتجات'},
                                {value: <?php echo $obj->ball28bio;?>, name: 'الوزارة'},
                                {value: <?php echo $obj->ball29bio;?>, name: 'البنوك'},
                                {value: <?php echo $obj->ball30bio;?>, name: 'أخرى'}
                            ]
                        }]
                    },
                    {
                        series: [{
                            name: 'Browser',
                            type: 'pie',
                            data: [
                                {value: <?php echo $obj->ball31bio;?> , name: 'المخططات'},
                                {value: <?php echo $obj->ball32bio;?>, name: 'المنتجات'},
                                {value: <?php echo $obj->ball33bio;?>, name: 'الوزارة'},
                                {value: <?php echo $obj->ball34bio;?>, name: 'البنوك'},
                                {value: <?php echo $obj->ball35bio;?>, name: 'أخرى'}
                            ]
                        }]
                    },
                    {
                        series: [{
                            name: 'Browser',
                            type: 'pie',
                            data: [
                                {value: <?php echo $obj->ball36bio;?> , name: 'المخططات'},
                                {value: <?php echo $obj->ball37bio;?>, name: 'المنتجات'},
                                {value: <?php echo $obj->ball38bio;?>, name: 'الوزارة'},
                                {value: <?php echo $obj->ball39bio;?>, name: 'البنوك'},
                                {value: <?php echo $obj->ball40bio;?>, name: 'أخرى'}
                            ]
                        }]
                    },
                    {
                        series: [{
                            name: 'Browser',
                            type: 'pie',
                            data: [
                                {value: <?php echo $obj->ball41bio;?> , name: 'المخططات'},
                                {value: <?php echo $obj->ball42bio;?>, name: 'المنتجات'},
                                {value: <?php echo $obj->ball43bio;?>, name: 'الوزارة'},
                                {value: <?php echo $obj->ball44bio;?>, name: 'البنوك'},
                                {value: <?php echo $obj->ball45bio;?>, name: 'أخرى'}
                            ]
                        }]
                    },
                    {
                        series: [{
                            name: 'Browser',
                            type: 'pie',
                            data: [
                                {value: <?php echo $obj->ball46bio;?> , name: 'المخططات'},
                                {value: <?php echo $obj->ball47bio;?>, name: 'المنتجات'},
                                {value: <?php echo $obj->ball48bio;?>, name: 'الوزارة'},
                                {value: <?php echo $obj->ball49bio;?>, name: 'البنوك'},
                                {value: <?php echo $obj->ball50bio;?>, name: 'أخرى'}
                            ]
                        }]
                    },
                    {
                        series: [{
                            name: 'Browser',
                            type: 'pie',
                            data: [
                                {value: <?php echo $obj->ball51bio;?> , name: 'المخططات'},
                                {value: <?php echo $obj->ball52bio;?>, name: 'المنتجات'},
                                {value: <?php echo $obj->ball53bio;?>, name: 'الوزارة'},
                                {value: <?php echo $obj->ball54bio;?>, name: 'البنوك'},
                                {value: <?php echo $obj->ball55bio;?>, name: 'أخرى'}
                            ]
                        }]
                    },
                    {
                        series: [{
                            name: 'Browser',
                            type: 'pie',
                            data: [
                                {value: <?php echo $obj->ball56bio;?> , name: 'المخططات'},
                                {value: <?php echo $obj->ball57bio;?>, name: 'المنتجات'},
                                {value: <?php echo $obj->ball58bio;?>, name: 'الوزارة'},
                                {value: <?php echo $obj->ball59bio;?>, name: 'البنوك'},
                                {value: <?php echo $obj->ball60bio;?>, name: 'أخرى'}
                            ]
                        }]
                    }
                ]
            };

            // Apply options
            // ------------------------------

            myChart.setOption(chartOptions);


            // Resize chart
            // ------------------------------

            $(function () {

                // Resize chart on menu width change and window resize
                $(window).on('resize', resize);
                $(".menu-toggle").on('click', resize);

                // Resize function
                function resize() {
                    setTimeout(function() {

                        // Resize chart
                        myChart.resize();
                    }, 200);
                }
            });
        }
    );
});        
        
</script>
    
    <link href="../../../assets/css/mapsvg.css" rel="stylesheet">




    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN STACK JS-->
    <script src="../../../app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="../../../app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END STACK JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../../../app-assets/js/scripts/pages/dashboard-fitness.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
  <script src="../../../assets/js/jquery.js"></script>
<script src="../../../assets/js/jquery.mousewheel.min.js"></script>
<script src="../../../assets/js/mapsvg.min.js"></script>
</html>
