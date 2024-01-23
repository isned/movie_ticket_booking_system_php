<?php
require_once('movietableController.php');
require_once("movietable.php");
$us=new movietableController();

$res=$us->comingSoon();
$rows = $res->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $row) {
   echo"<a href='' class='movie-item'>
   <img src='$row[movieImg]' alt=''>
   <div class='movie-item-content'>
       <div class='movie-item-title'>
       $row[movieTitle]
       </div>
       <div class='movie-infos'>
           
           <div class='movie-info'>
               <i class='bx bxs-time'></i>
               <span>$row[movieDuration]</span>
           </div>
           <div class='movie-info'>
               <span>$row[movieRelDate]</span>
           </div>
          
       </div>
   </div>
</a>";
}

?>