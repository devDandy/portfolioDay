<?php
 include "loadData.php";
$q = $_REQUEST["q"];
  if ($q == "GD 1") {
    echo "<img class='picture' id ='modalPhoto' width='200px'
            src='assets/img/dpd-photos/GD-1.jpg'/><br>";

    echo "<div class='col-lg-6 col-12'>";
    echo "<div id='modalText'>";
  //echo "<h1>" .  $arrayGD[14]['bio_first_name'] . " ". $arrayGD[14]['bio_last_name'] . "</h1>";
//echo "<h1>" .  $arrayGD[15]['bio_first_name'] . " ". $arrayGD[15]['bio_last_name'] . "</h1>";

    echo "<h1>" .  $arrayGD[6]['bio_first_name'] . " ". $arrayGD[6]['bio_last_name'] . "</h1>";
    echo "<h2>" . $arrayGD[6]['bio_program'] . " ". $arrayGD[6]['bio_second_program']."</h2>";
    echo "<h3>" . $arrayGD[6]['bio_login_email'] . "</h3>";
    echo "<h4>" . $arrayGD[6]['bio_email'] . "</h4>";
    echo "<h3>" . $arrayGD[6]['bio_website_address'] . "</h3>";
    echo "<h4>" . $arrayGD[6]['bio_second_web'] . "</h4>";
    echo "<h4>" . $arrayGD[6]['bio_linkedIn'] . "</h4>";
    echo "<h4>" . $arrayGD[6]['bio_hometown'] . "</h4>";
    echo "<p>" . $arrayGD[6]['bio_career_goals'] . "</p>";
    echo "<h3>" . $arrayGD[6]['bio_three_words'] . "</h3>";
    echo "</div></div>";
  }
  if ($q == "GD 2") {
    echo "<img class='picture' id ='modalGD 2' width='200px'
            src='assets/img/dpd-photos/GD-2.jpg'/>";
            echo "<div class='col-lg-6 col-12'>";
            echo "<div id='modalText'>";
  }

  if ($q == "GD 3") {
    echo "<img class='picture' id ='modalGD 3' width='200px'
            src='assets/img/dpd-photos/GD-3.jpg'/>";
            echo "<div class='col-lg-6 col-12'>";
            echo "<div id='modalText'>";
  }
  if ($q == "GD 4") {
    echo "<img class='picture' id ='modalGD 4' width='200px'
            src='assets/img/dpd-photos/GD-4.jpg'/>";
            echo "<div class='col-lg-6 col-12'>";
            echo "<div id='modalText'>";
    echo "<h1>" .  $arrayGD[0]['bio_first_name'] . " ". $arrayGD[0]['bio_last_name'] . "</h1>";
    echo "<h2>" . $arrayGD[0]['bio_program'] . " ". $arrayGD[0]['bio_second_program']."</h2>";
    echo "<h3>" . $arrayGD[0]['bio_login_email'] . "</h3>";
    echo "<h4>" . $arrayGD[0]['bio_email'] . "</h4>";
    echo "<h3>" . $arrayGD[0]['bio_website_address'] . "</h3>";
    echo "<h4>" . $arrayGD[0]['bio_second_web'] . "</h4>";
    echo "<h4>" . $arrayGD[0]['bio_linkedIn'] . "</h4>";
    echo "<h4>" . $arrayGD[0]['bio_hometown'] . "</h4>";
    echo "<p>" . $arrayGD[0]['bio_career_goals'] . "</p>";
    echo "<h3>" . $arrayGD[0]['bio_three_words'] . "</h3>";
    echo "</div></div>";
  }
  if ($q == "GD 5") {
    echo "<img class='picture' id ='modalGD 5' width='200px'
            src='assets/img/dpd-photos/GD-5.jpg'/>";
            echo "<div class='col-lg-6 col-12'>";
            echo "<div id='modalText'>";
            echo "<h1>" .  $arrayGD[12]['bio_first_name'] . " ". $arrayGD[12]['bio_last_name'] . "</h1>";
            echo "<h2>" . $arrayGD[12]['bio_program'] . " ". $arrayGD[12]['bio_second_program']."</h2>";
            echo "<h3>" . $arrayGD[12]['bio_login_email'] . "</h3>";
            echo "<h4>" . $arrayGD[12]['bio_email'] . "</h4>";
            echo "<h3>" . $arrayGD[12]['bio_website_address'] . "</h3>";
            echo "<h4>" . $arrayGD[12]['bio_second_web'] . "</h4>";
            echo "<h4>" . $arrayGD[12]['bio_linkedIn'] . "</h4>";
            echo "<h4>" . $arrayGD[12]['bio_hometown'] . "</h4>";
            echo "<p>" . $arrayGD[12]['bio_career_goals'] . "</p>";
            echo "<h3>" . $arrayGD[12]['bio_three_words'] . "</h3>";
            echo "</div></div>";
  }
  if ($q == "GD 6") {
    echo "<img class='picture' id ='modalGD 6' width='200px'
            src='assets/img/dpd-photos/GD-6.jpg'/>";
            echo "<div class='col-lg-6 col-12'>";
            echo "<div id='modalText'>";
  }
  if ($q == "GD 7") {
    echo "<img class='picture' id ='modalGD 7' width='200px'
            src='assets/img/dpd-photos/GD-7.jpg'/>";
            echo "<div class='col-lg-6 col-12'>";
            echo "<div id='modalText'>";

  }
  if ($q == "GD 8") {
    echo "<img class='picture' id ='modalGD 8' width='200px'
            src='assets/img/dpd-photos/GD-8.jpg'/>";
            echo "<div class='col-lg-6 col-12'>";
            echo "<div id='modalText'>";

    echo "<h1>" .  $arrayGD[13]['bio_first_name'] . " ". $arrayGD[13]['bio_last_name'] . "</h1>";
    echo "<h2>" . $arrayGD[13]['bio_program'] . " ". $arrayGD[13]['bio_second_program']."</h2>";
    echo "<h3>" . $arrayGD[13]['bio_login_email'] . "</h3>";
    echo "<h4>" . $arrayGD[13]['bio_email'] . "</h4>";
    echo "<h3>" . $arrayGD[13]['bio_website_address'] . "</h3>";
    echo "<h4>" . $arrayGD[13]['bio_second_web'] . "</h4>";
    echo "<h4>" . $arrayGD[13]['bio_linkedIn'] . "</h4>";
    echo "<h4>" . $arrayGD[13]['bio_hometown'] . "</h4>";
    echo "<p>" . $arrayGD[13]['bio_career_goals'] . "</p>";
    echo "<h3>" . $arrayGD[13]['bio_three_words'] . "</h3>";
    echo "</div></div>";
  }
  if ($q == "GD 9") {
    echo "<img class='picture' id ='modalGD 9' width='200px'
            src='assets/img/dpd-photos/GD-9.jpg'/>";
            echo "<div class='col-lg-6 col-12'>";
            echo "<div id='modalText'>";
            echo "<h1>" .  $arrayGD[16]['bio_first_name'] . " ". $arrayGD[16]['bio_last_name'] . "</h1>";
            echo "<h2>" . $arrayGD[16]['bio_program'] . " ". $arrayGD[16]['bio_second_program']."</h2>";
            echo "<h3>" . $arrayGD[16]['bio_login_email'] . "</h3>";
            echo "<h4>" . $arrayGD[16]['bio_email'] . "</h4>";
            echo "<h3>" . $arrayGD[16]['bio_website_address'] . "</h3>";
            echo "<h4>" . $arrayGD[16]['bio_second_web'] . "</h4>";
            echo "<h4>" . $arrayGD[16]['bio_linkedIn'] . "</h4>";
            echo "<h4>" . $arrayGD[16]['bio_hometown'] . "</h4>";
            echo "<p>" . $arrayGD[16]['bio_career_goals'] . "</p>";
            echo "<h3>" . $arrayGD[16]['bio_three_words'] . "</h3>";
            echo "</div></div>";
  }
  if ($q == "GD 10") {
    echo "<img class='picture' id ='modalGD 10' width='200px'
            src='assets/img/dpd-photos/GD-10.jpg'/>";
            echo "<div class='col-lg-6 col-12'>";
            echo "<div id='modalText'>";
  }
  if ($q == "GD 11") {
    echo "<img class='picture' id ='modalGD 11' width='200px'
            src='assets/img/dpd-photos/GD-11.jpg'/>";
            echo "<div class='col-lg-6 col-12'>";
            echo "<div id='modalText'>";
            echo "<h1>" .  $arrayGD[9]['bio_first_name'] . " ". $arrayGD[9]['bio_last_name'] . "</h1>";
            echo "<h2>" . $arrayGD[9]['bio_program'] . " ". $arrayGD[9]['bio_second_program']."</h2>";
            echo "<h3>" . $arrayGD[9]['bio_login_email'] . "</h3>";
            echo "<h4>" . $arrayGD[9]['bio_email'] . "</h4>";
            echo "<h3>" . $arrayGD[9]['bio_website_address'] . "</h3>";
            echo "<h4>" . $arrayGD[9]['bio_second_web'] . "</h4>";
            echo "<h4>" . $arrayGD[9]['bio_linkedIn'] . "</h4>";
            echo "<h4>" . $arrayGD[9]['bio_hometown'] . "</h4>";
            echo "<p>" . $arrayGD[9]['bio_career_goals'] . "</p>";
            echo "<h3>" . $arrayGD[9]['bio_three_words'] . "</h3>";
            echo "</div></div>";
  }
  if ($q == "GD 12") {
    echo "<img class='picture' id ='modalGD 12' width='200px'
            src='assets/img/dpd-photos/GD-12.jpg'/>";
            echo "<div class='col-lg-6 col-12'>";
            echo "<div id='modalText'>";
            echo "<h1>" .  $arrayGD[8]['bio_first_name'] . " ". $arrayGD[8]['bio_last_name'] . "</h1>";
            echo "<h2>" . $arrayGD[8]['bio_program'] . " ". $arrayGD[8]['bio_second_program']."</h2>";
            echo "<h3>" . $arrayGD[8]['bio_login_email'] . "</h3>";
            echo "<h4>" . $arrayGD[8]['bio_email'] . "</h4>";
            echo "<h3>" . $arrayGD[8]['bio_website_address'] . "</h3>";
            echo "<h4>" . $arrayGD[8]['bio_second_web'] . "</h4>";
            echo "<h4>" . $arrayGD[8]['bio_linkedIn'] . "</h4>";
            echo "<h4>" . $arrayGD[8]['bio_hometown'] . "</h4>";
            echo "<p>" . $arrayGD[8]['bio_career_goals'] . "</p>";
            echo "<h3>" . $arrayGD[8]['bio_three_words'] . "</h3>";
            echo "</div></div>";
  }
  if ($q == "GD 13") {
    echo "<img class='picture' id ='modalGD 13' width='200px'
            src='assets/img/dpd-photos/GD-13.jpg'/>";
            echo "<div class='col-lg-6 col-12'>";
            echo "<div id='modalText'>";
            echo "<h1>" .  $arrayGD[11]['bio_first_name'] . " ". $arrayGD[11]['bio_last_name'] . "</h1>";
            echo "<h2>" . $arrayGD[11]['bio_program'] . " ". $arrayGD[11]['bio_second_program']."</h2>";
            echo "<h3>" . $arrayGD[11]['bio_login_email'] . "</h3>";
            echo "<h4>" . $arrayGD[11]['bio_email'] . "</h4>";
            echo "<h3>" . $arrayGD[11]['bio_website_address'] . "</h3>";
            echo "<h4>" . $arrayGD[11]['bio_second_web'] . "</h4>";
            echo "<h4>" . $arrayGD[11]['bio_linkedIn'] . "</h4>";
            echo "<h4>" . $arrayGD[11]['bio_hometown'] . "</h4>";
            echo "<p>" . $arrayGD[11]['bio_career_goals'] . "</p>";
            echo "<h3>" . $arrayGD[11]['bio_three_words'] . "</h3>";
            echo "</div></div>";
  }
  if ($q == "GD 14") {
    echo "<img class='picture' id ='modalGD 14' width='200px'
            src='assets/img/dpd-photos/GD-14.jpg'/>";
            echo "<div class='col-lg-6 col-12'>";
            echo "<div id='modalText'>";
  }
  if ($q == "GD 15") {
    echo "<img class='picture' id ='modalGD 15' width='200px'
            src='assets/img/dpd-photos/GD-15.jpg'/>";
            echo "<div class='col-lg-6 col-12'>";
            echo "<div id='modalText'>";
echo "<h1>" .  $arrayGD[4]['bio_first_name'] . " ". $arrayGD[4]['bio_last_name'] . "</h1>";
echo "<h2>" . $arrayGD[4]['bio_program'] . " ". $arrayGD[4]['bio_second_program']."</h2>";
echo "<h3>" . $arrayGD[4]['bio_login_email'] . "</h3>";
echo "<h4>" . $arrayGD[4]['bio_email'] . "</h4>";
echo "<h3>" . $arrayGD[4]['bio_website_address'] . "</h3>";
echo "<h4>" . $arrayGD[4]['bio_second_web'] . "</h4>";
echo "<h4>" . $arrayGD[4]['bio_linkedIn'] . "</h4>";
echo "<h4>" . $arrayGD[4]['bio_hometown'] . "</h4>";
echo "<p>" . $arrayGD[4]['bio_career_goals'] . "</p>";
echo "<h3>" . $arrayGD[4]['bio_three_words'] . "</h3>";
echo "</div></div>";
  }
  if ($q == "GD 16") {
    echo "<img class='picture' id ='modalGD 16' width='200px'
            src='assets/img/dpd-photos/GD-16.jpg'/>";
            echo "<div class='col-lg-6 col-12'>";
            echo "<div id='modalText'>";
  }
  if ($q == "GD 17") {
    echo "<img class='picture' id ='modalGD 17' width='200px'
            src='assets/img/dpd-photos/GD-17.jpg'/>";
            echo "<div class='col-lg-6 col-12'>";
            echo "<div id='modalText'>";
      echo "<h1>" .  $arrayGD[10]['bio_first_name'] . " ". $arrayGD[10]['bio_last_name'] . "</h1>";
      echo "<h2>" . $arrayGD[10]['bio_program'] . " ". $arrayGD[10]['bio_second_program']."</h2>";
      echo "<h3>" . $arrayGD[10]['bio_login_email'] . "</h3>";
      echo "<h4>" . $arrayGD[10]['bio_email'] . "</h4>";
      echo "<h3>" . $arrayGD[10]['bio_website_address'] . "</h3>";
      echo "<h4>" . $arrayGD[10]['bio_second_web'] . "</h4>";
      echo "<h4>" . $arrayGD[10]['bio_linkedIn'] . "</h4>";
      echo "<h4>" . $arrayGD[10]['bio_hometown'] . "</h4>";
      echo "<p>" . $arrayGD[10]['bio_career_goals'] . "</p>";
      echo "<h3>" . $arrayGD[10]['bio_three_words'] . "</h3>";
      echo "</div></div>";
  }
  if ($q == "GD 18") {
    echo "<img class='picture' id ='modalGD 18' width='200px'
            src='assets/img/dpd-photos/GD-18.jpg'/>";
            echo "<div class='col-lg-6 col-12'>";
            echo "<div id='modalText'>";
            echo "<h1>" .  $arrayGD[5]['bio_first_name'] . " ". $arrayGD[5]['bio_last_name'] . "</h1>";
            echo "<h2>" . $arrayGD[5]['bio_program'] . " ". $arrayGD[5]['bio_second_program']."</h2>";
            echo "<h3>" . $arrayGD[5]['bio_login_email'] . "</h3>";
            echo "<h4>" . $arrayGD[5]['bio_email'] . "</h4>";
            echo "<h3>" . $arrayGD[5]['bio_website_address'] . "</h3>";
            echo "<h4>" . $arrayGD[5]['bio_second_web'] . "</h4>";
            echo "<h4>" . $arrayGD[5]['bio_linkedIn'] . "</h4>";
            echo "<h4>" . $arrayGD[5]['bio_hometown'] . "</h4>";
            echo "<p>" . $arrayGD[5]['bio_career_goals'] . "</p>";
            echo "<h3>" . $arrayGD[5]['bio_three_words'] . "</h3>";
            echo "</div></div>";
  }
  if ($q == "GD 19") {
    echo "<img class='picture' id ='modalGD 19' width='200px'
            src='assets/img/dpd-photos/GD-19.jpg'/>";
            echo "<div class='col-lg-6 col-12'>";
            echo "<div id='modalText'>";
    echo "<h1>" .  $arrayGD[1]['bio_first_name'] . " ". $arrayGD[1]['bio_last_name'] . "</h1>";
    echo "<h2>" . $arrayGD[1]['bio_program'] . " ". $arrayGD[1]['bio_second_program']."</h2>";
    echo "<h3>" . $arrayGD[1]['bio_login_email'] . "</h3>";
    echo "<h4>" . $arrayGD[1]['bio_email'] . "</h4>";
    echo "<h3>" . $arrayGD[1]['bio_website_address'] . "</h3>";
    echo "<h4>" . $arrayGD[1]['bio_second_web'] . "</h4>";
    echo "<h4>" . $arrayGD[1]['bio_linkedIn'] . "</h4>";
    echo "<h4>" . $arrayGD[1]['bio_hometown'] . "</h4>";
    echo "<p>" . $arrayGD[1]['bio_career_goals'] . "</p>";
    echo "<h3>" . $arrayGD[1]['bio_three_words'] . "</h3>";
    echo "</div></div>";
  }
  if ($q == "GD 20") {
    echo "<img class='picture' id ='modalGD 20' width='200px'
            src='assets/img/dpd-photos/GD-20.jpg'/>";
            echo "<div class='col-lg-6 col-12'>";
            echo "<div id='modalText'>";
  }
  if ($q == "GD 21") {
    echo "<img class='picture' id ='modalGD 21' width='200px'
            src='assets/img/dpd-photos/GD-21.jpg'/>";
            echo "<div class='col-lg-6 col-12'>";
            echo "<div id='modalText'>";
  }
  if ($q == "GD 22") {
    echo "<img class='picture' id ='modalGD 22' width='200px'
            src='assets/img/dpd-photos/GD-22.jpg'/>";
            echo "<div class='col-lg-6 col-12'>";
            echo "<div id='modalText'>";
    echo "<h1>" .  $arrayGD[2]['bio_first_name'] . " ". $arrayGD[2]['bio_last_name'] . "</h1>";
    echo "<h2>" . $arrayGD[2]['bio_program'] . " ". $arrayGD[2]['bio_second_program']."</h2>";
    echo "<h3>" . $arrayGD[2]['bio_login_email'] . "</h3>";
    echo "<h4>" . $arrayGD[2]['bio_email'] . "</h4>";
    echo "<h3>" . $arrayGD[2]['bio_website_address'] . "</h3>";
    echo "<h4>" . $arrayGD[2]['bio_second_web'] . "</h4>";
    echo "<h4>" . $arrayGD[2]['bio_linkedIn'] . "</h4>";
    echo "<h4>" . $arrayGD[2]['bio_hometown'] . "</h4>";
    echo "<p>" . $arrayGD[2]['bio_career_goals'] . "</p>";
    echo "<h3>" . $arrayGD[2]['bio_three_words'] . "</h3>";
    echo "</div></div>";
  }
  if ($q == "GD 23") {
    echo "<img class='picture' id ='modalGD 23' width='200px'
            src='assets/img/dpd-photos/GD-23.jpg'/>";
            echo "<div class='col-lg-6 col-12'>";
            echo "<div id='modalText'>";
    echo "<h1>" .  $arrayGD[3]['bio_first_name'] . " ". $arrayGD[3]['bio_last_name'] . "</h1>";
    echo "<h2>" . $arrayGD[3]['bio_program'] . " ". $arrayGD[3]['bio_second_program']."</h2>";
    echo "<h3>" . $arrayGD[3]['bio_login_email'] . "</h3>";
    echo "<h4>" . $arrayGD[3]['bio_email'] . "</h4>";
    echo "<h3>" . $arrayGD[3]['bio_website_address'] . "</h3>";
    echo "<h4>" . $arrayGD[3]['bio_second_web'] . "</h4>";
    echo "<h4>" . $arrayGD[3]['bio_linkedIn'] . "</h4>";
    echo "<h4>" . $arrayGD[3]['bio_hometown'] . "</h4>";
    echo "<p>" . $arrayGD[3]['bio_career_goals'] . "</p>";
    echo "<h3>" . $arrayGD[3]['bio_three_words'] . "</h3>";
    echo "</div></div>";
  }
  if ($q == "GD 24") {
    echo "<img class='picture' id ='modalGD 24' width='200px'
            src='assets/img/dpd-photos/GD-24.jpg'/>";
            echo "<div class='col-lg-6 col-12'>";
            echo "<div id='modalText'>";
            echo "<h1>" .  $arrayGD[17]['bio_first_name'] . " ". $arrayGD[17]['bio_last_name'] . "</h1>";
            echo "<h2>" . $arrayGD[17]['bio_program'] . " ". $arrayGD[17]['bio_second_program']."</h2>";
            echo "<h3>" . $arrayGD[17]['bio_login_email'] . "</h3>";
            echo "<h4>" . $arrayGD[17]['bio_email'] . "</h4>";
            echo "<h3>" . $arrayGD[17]['bio_website_address'] . "</h3>";
            echo "<h4>" . $arrayGD[17]['bio_second_web'] . "</h4>";
            echo "<h4>" . $arrayGD[17]['bio_linkedIn'] . "</h4>";
            echo "<h4>" . $arrayGD[17]['bio_hometown'] . "</h4>";
            echo "<p>" . $arrayGD[17]['bio_career_goals'] . "</p>";
            echo "<h3>" . $arrayGD[17]['bio_three_words'] . "</h3>";
            echo "</div></div>";
  }



 ?>
