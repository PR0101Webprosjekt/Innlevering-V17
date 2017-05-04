<html>
<head>
  <link rel="stylesheet" href="../../css/menubar.css">
  <link rel="stylesheet" href="../../css/filter_menu.css">
<style>

body {background-color: white;}

#container_main{
  position: absolute;
    top: 0%;
    left: 0%;
    width:100%;
    height: 100%
}

#menubar_container {
  position: absolute;
    top: 0%;
    left: 0%;
    width:100%;
    height: 170px;
    margin: 0;


}

#btttnrow_container {
    left: 65%;
    top: 85%;
    margin: 0;


}

        #imgmap {
            position: absolute;
            top: 10%;
            left: 0%;
            width: 100%;
            height: 90%;

          }
          #kartet {
              position: absolute;
              top: 0%;
              left: 0%;
              width: 100%;
              height: 100%;
            }

            <?php
            $servername = "martinwahlberg.no.mysql";
            $username = "martinwahlberg_no_westerdals_";
            $password = "westerdals123";
            $dbname = "martinwahlberg_no_westerdals_";

          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
          }

          $sql = "SELECT css_pososv FROM sted";
          $result = $conn->query($sql);
          $css_pososv = array();
          $i = 0;
          if ($result->num_rows > 0) {
               // output data of each row
               while($row = $result->fetch_assoc()) {
                   $css_pososv[$i] = $row["css_pososv"];
                   $i++;
               }
          } else {
               echo "0 results";
          }
          $conn->close();
          $arrlength = count($css_pososv);
          for($x = 0; $x < $arrlength; $x++) {
              echo $css_pososv[$x];

          }
          ?>
            #poired{
              position: absolute;
              height: 100%;
              width: 50%;
            }

</style>

</head>

<body>

  <div id="container_main">

  <div id="imgmap">
    <img id="kartet" src="../../img/18049879_10154249201006923_140799690_o.png"/>
    </div>

    <?php
    $servername = "martinwahlberg.no.mysql";
    $username = "martinwahlberg_no_westerdals_";
    $password = "westerdals123";
    $dbname = "martinwahlberg_no_westerdals_";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT html FROM sted";
    $result = $conn->query($sql);
    $css_pososv = array();
    $i = 0;
    if ($result->num_rows > 0) {
       // output data of each row
       while($row = $result->fetch_assoc()) {
           $css_pososv[$i] = $row["html"];
           $i++;
       }
    } else {
       echo "0 results";
    }
    $conn->close();
    $arrlength = count($css_pososv);
    for($x = 0; $x < $arrlength; $x++) {
      echo $css_pososv[$x];

    }
    ?>

  <div id="btttnrow_container">

  <a href="#FilterParty">
  <div id="prtybutton_container">
  <img src="../../img/icons/ol.png" id="Prtybutton_icn"/>
  </div>
  </a>

  <a href="#FilterLeseSteder">
  <div id="stdybutton_container">
  <img src="../../img/icons/les.png" id="stdybutton_icn"/>
  </div>
  </a>

  <a href="#FilterSpise">
  <div id="eatybutton_container">
  <img src="../../img/icons/burger.png" id="eatybutton_icn"/>
  </div>
  </a>


  <a href="#FilterTrening">
  <div id="sprtybutton_container">
  <img src="../../img/icons/tren.png" id="sprtybutton_icn"/>
  </div>
  </a>

  </div>
  </div>
  <div id="menubar_container">

    <a href="#Barer">
    <div id="Bar_menu_element_bg">
      <h3 id="Menu_text">BARER</h3>
      <div id="Bar_menu_element_line">
      </div>
    </div>
    <div id="Hjem_menu_logo_bar_box">
      <img id="Hjem_menu_logo_wht" src="../../img/logo_menubar/w_logo_wht.png"/>
    <img id="Hjem_menu_logo_bar" src="../../img/logo_menubar/w_logo_prpl.png"/>
    </div>
  </a>

   <a href="#Restaurant">
    <div id="Restaurant_menu_element_bg">
      <h3 id="Menu_text">RESTAURANTER</h3>
      <div id="Restaurant_menu_element_line">
      </div>
    </div>
    <div id="Hjem_menu_logo_rest_box">
      <img id="Hjem_menu_logo_wht" src="../../img/logo_menubar/w_logo_wht.png"/>
    <img id="Hjem_menu_logo_rest" src="../../img/logo_menubar/w_logo_ble.png"/>
    </div>
  </a>

    <a href="#Hjem">
    <div id="Hjem_menu_element_bg"></div>
    <div id="Hjem_menu_element_extend">
      <div id="Hjem_Trapes_Farge"></div>
      <div id="Hjem_Trapes_Hvit"></div>
      <div id="Hjem_Linje_Hoyre"></div>
      <div id="Hjem_Linje_Venstre"></div>
    </div>
    <div id="Hjem_menu_element_border"></div>
    <div id="Hjem_menu_logo_box">
      <img id="Hjem_menu_logo" src="../../img/logo_menubar/w_logo.png"/>
    </div>
  </a>

    <a href="#Studere">
    <div id="Studere_menu_element_bg">
      <h3 id="Menu_text">STUDERE</h3>
      <div id="Studere_menu_element_line">
      </div>
    </div>
    <div id="Hjem_menu_logo_stud_box">
      <img id="Hjem_menu_logo_wht" src="../../img/logo_menubar/w_logo_wht.png"/>
    <img id="Hjem_menu_logo_stud" src="../../img/logo_menubar/w_logo_ylw.png"/>
    </div>
  </a>

  <div id="Sok_menu_element_bg">
    <div id="search-box-wrapper">
        <input type="text" placeholder="Hvor vil du?" id="search-box-input">
        <input id="search-box-button" type="image" src="../../img/icons/search.png" />
    </div>
    <div id="Sok_menu_element_line"></div>
  </div>
  <div id="Hjem_menu_logo_sok_box">
    <img id="Hjem_menu_logo_wht" src="../../img/logo_menubar/w_logo_wht.png"/>
  <img id="Hjem_menu_logo_sok" src="../../img/logo_menubar/w_logo_grn.png"/>
  </div>

  </div>
</div>
</body>
</html>
