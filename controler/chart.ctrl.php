
 <?php

 $dataPoints = array();
 //Best practice is to create a separate file for handling connection to database
 try{
      // Creating a new connection.
     // Replace your-hostname, your-db, your-username, your-password according to your database
     $link = new \PDO(   'mysql:host=soysauceduck99.ddns.net;dbname=scale', //'mysql:host=localhost;dbname=canvasjs_db;charset=utf8mb4',
                         'admincave', //'root',
                         'cave', //'',
                         array(
                             \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                             \PDO::ATTR_PERSISTENT => false
                         )
                     );

     $handle = $link->prepare('select ID, visitor_day from visitors_table');
     $handle->execute();
     $result = $handle->fetchAll(\PDO::FETCH_OBJ);

     foreach($result as $row){
         array_push($dataPoints, array("ID"=> $row->x, "visitor_day"=> $row->y));
     }
   $link = null;
 }
 catch(\PDOException $ex){
     print($ex->getMessage());
 }

 ?>
 <!DOCTYPE HTML>
 <html>
 <head>
 <script>
 window.onload = function () {

 var chart = new CanvasJS.Chart("chartContainer", {
   animationEnabled: true,
   exportEnabled: true,
   theme: "light1", // "light1", "light2", "dark1", "dark2"
   title:{
     text: "PHP Column Chart from Database"
   },
   data: [{
     type: "column", //change type to bar, line, area, pie, etc
     dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
   }]
 });
 chart.render();

 }
 </script>
 </head>
 <body>
 <div id="chartContainer" style="height: 370px; width: 100%;"></div>
 <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
 </body>
 </html>