<?php
 if(isset($_POST['btnSubmit'])){
   // taking input to variables
   $teamName = $_POST['teamName'];
   $teamEmail = $_POST['teamEmail'];
   $teamcategory = $_POST['teamcategory'];
   $teamProjectDetails = $_POST["teamProjectDetails"];
   $teamMemberNo = $_POST['teamMemberNo'];
   $teamInstituteName = $_POST["teamInstituteName"];
   $teamCityName = $_POST["teamCityName"];
   $teamAccomodation = $_POST["teamAccomodation"];
   $memberNames = array();
   $memberCNICs = array();
   $memberPhones = array();
   
   for ($i=0; $i < $teamMemberNo; $i++) { 
     array_push($memberNames, $_POST['memberName'.$i]);
     array_push($memberCNICs, $_POST['memberCNIC'.$i]);
     array_push($memberPhones, $_POST['memberPhone'.$i]);
    }
    
    
    // // incomplete form validation
    function errAlert($msg) {
      echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }
    if(empty($teamName)){
      errAlert("You have not entered team name in form. Registration Failed");
      exit; 
    }
    if(empty($teamEmail)){
      errAlert("You have not entered team Email in form. Registration Failed");
      exit; 
    }
    if(empty($teamcategory)){
      errAlert("You have not selected team category in form. Registration Failed");
      exit;
    }
    if(empty($teamMemberNo)){
      errAlert("You have not selected number of team members in form. Registration Failed");
      exit;
    }
    if(empty($teamInstituteName)){
      errAlert("You have not entered your institute name in form. Registration Failed");
      exit;
    }
    if(empty($teamCityName)){
      errAlert("You have not entered your city name in form. Registration Failed");
      exit;
    }
    
    for ($i=0; $i < 3; $i++) { 
      if($teamMemberNo == $i + 1){
        $chr = array("first", "second", "third");
        if(empty($memberNames[$i]) || empty($memberCNICs[$i]) || empty($memberPhones[$i])){
          errAlert("Please input data for " . $chr[$i] . " team member. Registration Failed");
          exit;
        }
      }
    }
    
    // conntection
    $host = '127.0.0.1';
    $dbname = 'db_comppec19';
    $username = 'root';
    $password = '';
    $conn = null;
    try {
      $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
      // echo "Connected to $dbname at $host successfully.";
    } catch (PDOException $pe) {
      die("Could not connect to the database $dbname :" . $pe->getMessage());
      exit;
    }
    
    $sql0 = "SELECT team_id FROM tbl_team WHERE team_Email = '$teamEmail'";
    $teamid = $conn->query($sql0)->fetch();
    if(isset($teamid['team_id'])){
      errAlert("team already registered");
      exit;
    }
    
    $sql = "INSERT INTO tbl_team (team_name, team_Email, team_category, team_projectDetail, no_of_members, team_istitute, team_city, team_accomodation) VALUES ('$teamName','$teamEmail',$teamcategory,'$teamProjectDetails',$teamMemberNo, '$teamInstituteName', '$teamCityName', $teamAccomodation)";
    if(!$conn->query($sql)){
      errAlert("Inserting team sql query NOT successful");
      exit;
    }
    
    $sql1 = "SELECT team_id FROM tbl_team WHERE team_name = '$teamName' and team_Email = '$teamEmail'";
    $teamid = $conn->query($sql1)->fetch();
    if(empty($teamid)){
      errAlert ("team id is empty");
      exit;
    }
    //while ($teamid = $value->fetch()) {
      //   echo $teamid['team_id'] ."hahah";
      //}
      $team_id = $teamid['team_id'];
      for ($i=0; $i < $teamMemberNo; $i++) { 
        $sql2 = "INSERT INTO tbl_member (member_name, member_CNIC, member_phone, team_id) VALUES ('$memberNames[$i]','$memberCNICs[$i]','$memberPhones[$i]', $team_id)";
        if(!$conn->query($sql2)){
          errAlert("Inserting Members sql2 query NOT successful");
          exit;
        }
      }
      
      // echo "Registration SUCCESSFULL";
      
      
      
      //pdf challan data
      $F_challanNo = date('mYd') . $team_id;
      $F_date = date("Y-m-d");
      $F_leaderName = $memberNames[0];
      $F_projectId = $team_id;
      $F_projectTitle = $teamName;
      $F_regFee = "1000Rs";
      $F_BankDetails = "here is details of bank TITLE AND NUMBER";
      $F_BankTitle = "bank title";
      $F_AccountNo = "account no";
      // echo("challan no: $F_challanNo, 
      // date: $F_date,
      // leader name: $F_leaderName,
      // project id: $F_projectId,
      // project title: $F_projectTitle,
      // regfee: $F_regFee,
      // bank details: $F_BankDetails");

      include('fpdf.php');
      
      class PDF extends FPDF
      {
        // Page header
        function Header()
        {
          $this->SetFont('Arial','B',15);
          $this->Cell(15);
          $this->Cell(40,10,'CommpecCopy',0,0);
          $this->Cell(65);
          $this->Cell(40,10,'BankCopy',0,0);
          $this->Cell(55);
          $this->Cell(40,10,'StudentCopy',0,0);
          $this->Image('img/iot.png',10,10,10);
          $this->Image('img/iot.png',70,10,10);
          $this->Image('img/iot.png',110,10,10);
          $this->Image('img/iot.png',170,10,10);
          $this->Image('img/iot.png',210,10,10);
          $this->Image('img/iot.png',270,10,10);
          $this->Ln(10);
        }
        
        // Page footer
        function Footer()
        {
          // Position at 1.5 cm from bottom
          $this->SetY(-15);
          // Arial italic 8
          $this->SetFont('Arial','I',8);
          // Page number
          $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
        }
      }
      
      $pdf=new PDF('L', 'mm', 'A4');
      $pdf->AddPage();
      $pdf->SetFont('Arial','B',13);
      $pdf->Rect(3, 5, 95, 65, 'D');
      $pdf->Rect(3, 70, 95, 10, 'D');
      $pdf->Rect(3, 80, 95, 30, 'D');
      $pdf->Rect(101, 5, 95, 65, 'D');
      $pdf->Rect(101, 70, 95, 10, 'D');
      $pdf->Rect(101, 80, 95, 30, 'D');
      $pdf->Rect(200, 5, 95, 65, 'D');
      $pdf->Rect(200, 70, 95, 10, 'D');
      $pdf->Rect(200, 80, 95, 30, 'D');
      $pdf->Cell(100,10,"Challanno:{$F_challanNo}",0,0);
      $pdf->Cell(100,10,"Challanno:{$F_challanNo}",0,0);
      $pdf->Cell(100,10,"Challanno:{$F_challanNo}",0,1);
      $pdf->Cell(100,10,"Date:{$F_date}",0,0);
      $pdf->Cell(100,10,"Date:{$F_date}",0,0);
      $pdf->Cell(100,10,"Date:{$F_date}",0,1);
      $pdf->Cell(100,10,"Leadername:{$F_leaderName}",0,0);
      $pdf->Cell(100,10,"Leadername:{$F_leaderName}",0,0);
      $pdf->Cell(100,10,"Leadername:{$F_leaderName}",0,1);
      $pdf->Cell(100,10,"ProjectId:{$F_projectId}",0,0);
      $pdf->Cell(100,10,"ProjectId:{$F_projectId}",0,0);
      $pdf->Cell(100,10,"ProjectId:{$F_projectId}",0,1);
      $pdf->Cell(100,10,"ProjectTitle:{$F_projectTitle}",0,0);
      $pdf->Cell(100,10,"ProjectTitle:{$F_projectTitle}",0,0);
      $pdf->Cell(100,10,"ProjectTitle:{$F_projectTitle}",0,1);
      $pdf->Cell(100,10,"RegistrationFEE:         Rs1000",0,0);
      $pdf->Cell(100,10,"RegistrationFEE:         Rs1000",0,0);
      $pdf->Cell(100,10,"RegistrationFEE:         Rs1000",0,1);
      $pdf->Cell(100,10,"BankInfo:{}",0,0);
      $pdf->Cell(100,10,"BankInfo:{}",0,0);
      $pdf->Cell(100,10,"BankInfo:{}",0,1);
      $pdf->Cell(100,10,"Title:{$F_BankTitle}",0,0);
      $pdf->Cell(100,10,"Title:{$F_BankTitle}",0,0);
      $pdf->Cell(100,10,"Title:{$F_BankTitle}",0,1);
      $pdf->Cell(100,10,"AccountNo:{$F_AccountNo}",0,0);
      $pdf->Cell(100,10,"AccountNo:{$F_AccountNo}",0,0);
      $pdf->Cell(100,10,"AccountNo:{$F_AccountNo}",0,1);
      $pdf->Output();            
  }
  else{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
         <!-- Theme Developers: Hashir Shoaib, ZAIN UL ABAIDIN -->
         <!-- Backend Developer: Saad Naeem-->
         <!-- Theme Graphics designer: Moiz Mehmood -->
         <!-- Contact: hashirshoaeb@gmail.com -->
         <!-- Theme Copyrights: © Department of Computer and Software Engineering NUST Collage of Electrical and Mechanical Engineering  -->
    <title>COMPPEC</title>
    <link rel="shortcut icon" href="img/logo.png" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=swidth, initial-scale=1" />
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i" rel="stylesheet">
  </head>

  <body>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
      integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
      integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
      crossorigin="anonymous"
    ></script>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#Home">COMPPEC'19</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="#Home"
            >Home <span class="sr-only">(current)</span></a
          >
          <a class="nav-item nav-link" href="#Categories">Categories</a>
          <a class="nav-item nav-link" href="#Prizes">Prizes</a>
          <a class="nav-item nav-link" href="./Schedule.html#Schedule">Schedule</a>
          <a class="nav-item nav-link" href="./Schedule.html#Symposium">Symposium</a>
          <a class="nav-item nav-link" href="#Home">Register</a>
          <a class="nav-item nav-link" href="#Contact">Contact</a>
        </div>
      </div>
    </nav>
    <!-- Navbar -->
    <!-- Home -->
    <div style="background : #343434;" class=" jumbotron jumbotron-fluid">
      <div class=" container text-center">
        <div>
          <img src="img/CLogo.png" class=" img-fluid"></img>
        </div>
        <div>
          <span style="font-size: 2em; color: white;">
            <i class="fas fa-minus"></i>
          </span>
        </div>
          <div>
              <button type="button" class=" btn btn-default btn-outline-light btn-lg" data-toggle="modal" data-target="#btnRegisterModal">Registration opening soon</button>             
          </div>
      </div>
    </div>
    <!-- Home -->
    <!-- About -->
    <div style="background :white" class=" jumbotron jumbotron-fluid">
      <div class=" container text-center">
        <h1 style="color: #343434;" class=" display-4">ABOUT COMPPEC </h1>
        <div>
          <span style="font-size: 2em; color: #00adb4;">
            <i class="fas fa-minus"></i>
          </span>
        </div>
        <div class="row justify-content-center">
          <p style = "color: #848188; "class=" col-md-10">
            Computer Projects Exhibition and Competition is an ultimate, the most prestigious computers and technological event of Pakistan. Annually hosted by the Department of Computer Engineering NUST for the past two decades it has been providing an exceptionally sublime stage for the youth to model their talents in multitudinous fields of the World of Computers, presenting them with inestimable exposure and experience.
          </p>
        </div>
      </div>
    </div>
    <!-- About -->
    <!-- Categories -->
    <div id="Categories" style="background : #343434;" class=" jumbotron jumbotron-fluid">
      <div class=" container text-center text-light">
        <div>
          <h1 class=" display-4">CATEGORIES</h1>
        </div>
        <div>
            <span style="font-size: 2em; color: #f7b500;">
                <i class="fas fa-minus"></i>
            </span>
        </div>
        <div class=" row justify-content-center">
          <div class=" col-md-3">
            <img style="width: 18rem;" class=" img-fluid mb-5" src="img/EM.png"></img>
          </div>
          <div class=" col-md-3">
            <img style="width: 18rem;" class=" img-fluid mb-5" src="img/AR.png"></img>
          </div>
          <div class=" col-md-3">
            <img style="width: 18rem;" class=" img-fluid mb-5" src="img/iot.png"></img>
          </div>
        </div>
        <div class=" row justify-content-center m-0">
          <div class=" col-md-3">
            <img style="width: 18rem;" class=" img-fluid mb-5" src="img/Software.png"></img>
          </div>
          <div class=" col-md-3">
            <img style="width: 18rem;" class=" img-fluid mb-5" src="img/EAP.png"></img>
          </div>
        </div>
        </div>
      </div>
    <!-- Categoies -->
    <!-- Prizes -->
    <div id="Prizes" style="background : white;" class=" jumbotron jumbotron-fluid">
        <div class=" container text-center">
          <div>
            <h1 style="color: #343434;" class=" display-4">PRIZES</h1>
          </div>
          <div>
              <span style="font-size: 2em; color: #00adb4;">
                  <i class="fas fa-minus"></i>
              </span>
          </div>
          <div>
            <img class=" img-fluid" src="img/CPrizes.png"></img>
          </div>
        </div>
      </div>
    <!-- Prizes -->
    <!-- Our Team -->
    <div style="background : #343434;" class=" jumbotron jumbotron-fluid">
        <div class=" container-fluid text-center text-light">
            <div>
              <h1 class=" display-4">MEET OUR TEAM</h1>
            </div>
            <div>
                <span style="font-size: 2em; color: #f7b500;">
                    <i class="fas fa-minus"></i>
                </span>
            </div>
            <div>
              <div class=" row justify-content-center">
                <div class="" style="width: 18rem;">
                  <img style="max-width: 200px;max-height: 200px;" src="img/DrShoab.png" class="card-img-top rounded-circle align-self-center" alt="asdf">
                  <div class="card-body">
                    <h3 class="card-title display-5">DR. SHOAB AHMED KHAN</h3>
                    <p class="card-text">Chief Organizer</p>                  
                  </div>                  
                </div>
                <div class="" style="width: 18rem;">
                  <img style="max-width: 200px;max-height: 200px;" src="img/DrSajjid.png" class="card-img-top rounded-circle align-self-center" alt="asdf">
                  <div class="card-body">
                    <h3 class="card-title display-5">DR. SAJID GUL KHAWAJA</h3>
                    <p class="card-text">Organizer</p>                  
                  </div>
                </div>
                <div class="" style="width: 18rem;">
                  <img style="max-width: 200px;max-height: 200px;" src="img/AliSaeed.png" class="card-img-top rounded-circle align-self-center" alt="asdf">
                  <div class="card-body">
                    <h3 class="card-title display-5">ALI SAEED</h3>
                    <p class="card-text">Director COMPPEC</p>                  
                  </div>                  
                </div>
                <div class="" style="width: 18rem;">
                  <img style="max-width: 200px;max-height: 200px;" src="img/DrUsman.png" class="card-img-top rounded-circle align-self-center" alt="asdf">
                  <div class="card-body">
                    <h3 class="card-title display-5">DR. MUHAMMAD USMAN AKRAM</h3>
                    <p class="card-text">Director Symposium</p>                  
                  </div>
                </div>
              </div>
              <div id="demo" class="collapse row justify-content-center mt-0">
                <div class="" style="width: 18rem;">
                  <img style="max-width: 200px;max-height: 200px;" src="img/ZainHaider.png" class="card-img-top rounded-circle align-self-center" alt="asdf">
                  <div class="card-body">
                    <h3 class="card-title display-5">President</h3>
                    <p class="card-text">Student body</p>                  
                  </div>                  
                </div>
                <div class="" style="width: 18rem;">
                  <img style="max-width: 200px;max-height: 200px;" src="img/Muhammad Hamza.png" class="card-img-top rounded-circle align-self-center" alt="asdf">
                  <div class="card-body">
                    <h3 class="card-title display-5">Vice President</h3>
                    <p class="card-text">Student body</p>                  
                  </div>                  
                </div>
              </div>
              <div>
                  <a href="#demo"  data-toggle="collapse">
                    <span style="font-size: 2em; color: #f7b500;">
                      <i class="fas fa-chevron-circle-down"></i>
                    </span>
                  </a>
              </div>
            </div>
    </div>
    </div>
    <!-- Our Team -->
    <!-- Our Sponsors -->
    <div style="background : white;" class=" jumbotron jumbotron-fluid">
      <div  class=" container text-center">
        <div>
          <h1 class=" display-4">OUR SPONSORS</h1>
        </div>
        <div>
          <span style="font-size: 2em; color: #00adb4;">
            <i class="fas fa-minus"></i>
          </span>
        </div>
      
      <div class=" row justify-content-center">
        <div class=" col-md-3">
          <a href="">
              <img style="width: 18rem;align-content: center;width: 170px;
                height: 150px;" class=" img-fluid mb-5" src="img/pastic.png"></img>
          </a>
        </div>
        <div class=" col-md-3">
          <a href="">
              <img style="width: 18rem;" class=" img-fluid mb-5" src="img/HRPL.png"></img>
          </a>
        </div>
        <div class=" col-md-3">
          <a href="">    
              <img style="width: 18rem;align-content: center;" class=" img-fluid mb-5" src="img/RWR.png"></img>
          </a>
        </div>
        <div class=" col-md-3">
            <a href="">    
                <img style="width: 18rem;align-content: center;"
                 class=" img-fluid mb-5" src="img/MM.jpg"></img>
            </a>
        </div>
        <div class=" col-md-3">
          <a href="">    
              <img style="width: 18rem; align-content: center;"
               class=" img-fluid mb-1" src="img/GR.png"></img>
          </a>
        </div>
        <div class=" col-md-3">
          <a href="">    
              <img style="width: 18rem; align-content: center; padding-top: 60px;"
               class=" img-fluid mt-5" src="img/PS.png"></img>
          </a>
        </div>
      </div> 
    </div>
  </div>
    <!-- Our Sponsors -->
    <!-- Footer -->
    <div id="Contact" style="background : #f5f5f5;" class=" jumbotron jumbotron-fluid mb-0">
      <div class=" container">
        <div class=" text-center">
          <h1 style="color: #343434;" class=" display-4">CONTACT US</h1>
        </div>
        <div class=" text-center">
          <span style="font-size: 2em; color: #00adb4;">
            <i class="fas fa-minus"></i>
          </span>
        </div>
        <div class=" row">
          <div class=" col-lg-4">
            <div class="card-body">
              <h3 class="card-title display-5">Zain Haider Nemati</h3>
              <p class="card-text text-muted">President Student body</p>
              <p>
                <span style="font-size: 2em; color: black;">
                  <i class="fas fa-phone-square fa-xs"></i>
                </span>
                <a style="text-decoration: none;" class=" text-dark" href="tel:+(92)323-536-4441"> +(92)323-536-4441</a>
              </p>
              <p>
                <span style="font-size: 2em; color: black;">
                  <i class="fas fa-envelope fa-xs"></i>
                </span>
                <a style="text-decoration: none;" class=" text-dark" href="mailto:zhnemati@gmail.com"> zhnemati@gmail.com</a>
              </p>                
            </div>                  
          </div>
          <div class=" col-lg-4">
            <div class="card-body">
              <h3 class="card-title display-5">Muhammad Hamza</h3>
              <p class="card-text text-muted">Vice President Student body</p>
              <p>
                <span style="font-size: 2em; color: black;">
                  <i class="fas fa-phone-square fa-xs"></i>
                </span>
                <a style="text-decoration: none;" class=" text-dark" href="tel:+(92)334-861-3201">+(92)334-861-3201</a>
              </p>
              <p>
                <span style="font-size: 2em; color: black;">
                  <i class="fas fa-envelope fa-xs"></i>
                </span>
                <a style="text-decoration: none;" class=" text-dark" href="mailto:muhammad.hamza37@ce.ceme.edu.pk"> muhammad.hamza37@ce.ceme.edu.pk</a>
              </p>                
            </div>                  
          </div>  
          <div class=" col-lg-4">
            <div>
                <img style="width: 18rem;" class=" img-fluid" src="img/FooterLogo.png"></img>
            </div>
            <hr/>
            <a style="text-decoration: none;" href="https://www.youtube.com/channel/UCg0uw4JIpyO_2iAFM96HNOQ" target="_blank">  
              <span style="font-size: 2em; color: #262b2e;">
                <i class="fab fa-youtube"></i>
              </span>
            </a>
            <a style="text-decoration: none;" href="https://www.facebook.com/COMPPEC" target="_blank"> 
              <span style="font-size: 2em; color: #262b2e;">
                <i class="fab fa-facebook-square"></i>
              </span>
            </a>
            <a style="text-decoration: none;" href="https://www.instagram.com/comppec19/" target="_blank"> 
              <span style="font-size: 2em; color: #262b2e;">
                <i class="fab fa-instagram"></i>
              </span>
            </a>
            <a style="text-decoration: none;" href="https://www.twitter.com" target="_blank"> 
              <span style="font-size: 2em; color: #262b2e;">
                <i class="fab fa-twitter"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <footer style="background-color: #f5f5f5;" class=" mt-auto py-3 text-center">
      <strong>&copy; 2019 </strong> Department of Computer and Software Engineering NUST Collage of Electrical and Mechanical Engineering 
    </footer>
    <!-- Footer -->

    <form method="post" action="">
      <!-- Button trigger modal -->
      <!-- <button
        type="button"
        class="btn btn-primary"
        data-toggle="modal"
        data-target="#btnRegisterModal"
      >
        Register
      </button> -->

      <!-- Modal -->
      <div
        class="modal fade"
        id="btnRegisterModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="firstModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="firstModalLabel">
                REGISTRATION FORM
              </h5>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            
                <div class=" form-group">
                  <label for="inputTeamName">Project Title</label>
                  <input
                    type="text"
                    name="teamName"
                    class="form-control"
                    id="inputTeamName"
                    placeholder="Water level indecator"
                  />
                </div>
                <div class="form-group">
                  <label for="inputTeamEmail">Email address</label>
                  <input 
                    type="email" 
                    name="teamEmail"
                    class="form-control" 
                    id="inputTeamEmail"
                    placeholder="name@example.com"
                  />
                </div>
                <div class="form-group">
                  <label for="controlCategory">Category</label>
                  <select name="teamcategory" class="form-control" id="controlCategory">
                    <option value="1">ELECTROMECHANICAL SYSTEM</option>
                    <option value="2">AR/VR & GAMING</option>
                    <option value="3">IOT & DIGITAL SYSTEM</option>
                    <option value="4">SOFTWARE SYSTEM</option>
                    <option value="5">EARLY AGE PROGRAMMING</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="inputProjectDetails">Describe your project</label>
                    <textarea 
                      class="form-control" 
                      name="teamProjectDetails"
                      id="inputProjectDetails" 
                    >
                    </textarea>
                  </div>
                <div class=" form-group">
                  <label> Team Members</label>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="teamMemberNo"
                      id="inlineRadio1"
                      value="1"
                      checked
                    />
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="teamMemberNo"
                      id="inlineRadio2"
                      value="2"
                    />
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="teamMemberNo"
                      id="inlineRadio3"
                      value="3"
                    />
                    <label class="form-check-label" for="inlineRadio3">3</label>
                  </div>
                </div>
                <div class=" form-group">
                  <label for="inputInstituteName">Institute </label>
                  <input
                    type="text"
                    name="teamInstituteName"
                    class="form-control"
                    id="inputInstituteName"
                    placeholder="NUST"
                  />
                </div>
                <div class=" form-group">
                  <label for="inputCityName">City </label>
                  <input
                    type="text"
                    name="teamCityName"
                    class="form-control"
                    id="inputCityName"
                    placeholder="Islamabad"
                  />
                </div>
                <div class=" form-group">
                  <label> Need Accomodation</label>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="teamAccomodation"
                      id="Radio1"
                      value="0"
                      checked
                    />
                    <label class="form-check-label" for="Radio1">NO</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="teamAccomodation"
                      id="Radio2"
                      value="1"
                    />
                    <label class="form-check-label" for="Radio2">YES</label>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-secondary"
                data-dismiss="modal"
              >
                Close
              </button>
              <button
                type="button"
                class="btn btn-primary"
                data-dismiss="modal"
                data-toggle="modal"
                data-target="#btnRegisterModal2"
              >
                Next
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Button trigger modal -->
      <!-- <button
        type="button"
        class="btn btn-primary"
        data-toggle="modal"
        data-target="#btnRegisterModal2"
      >
        Launch demo modal 2
      </button> -->

      <!-- Modal -->
      <div
        class="modal fade"
        id="btnRegisterModal2"
        tabindex="-1"
        role="dialog"
        aria-labelledby="secondModalLabel"
        aria-hidden="true"
      >
        <div
          class="modal-dialog modal-dialog-scrollable modal-lg"
          role="document"
        >
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="secondModalLabel">
                REGISTRATION FORM
              </h5>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
           
              <div class="modal-body">
                <div class=" row">
                  <?php $member = array("Leader's name", "2nd Member Name", "3rd Member Name"); ?>
                  <?php for ($i=0; $i < 3; $i++) { ?>
                  <div class=" col-md-4">
                    <div class="form-group">
                      <label for="inputMemberName"><?php echo($member[$i]); ?></label>
                      <input
                        type="text"
                        class="form-control"
                        name="memberName<?php echo $i;?>"
                        id="inputMemberName"
                        placeholder="Name"
                      />
                    </div>
                    <div class="form-group">
                      <label for="inputCNIC">CNIC</label>
                      <input
                        type="text"
                        class="form-control"
                        name="memberCNIC<?php echo $i;?>"
                        id="inputCNIC"
                        placeholder="00000-0000000-0"
                      />
                    </div>
                    <div class="form-group">
                      <label for="inputPhoneNumber">Phone Number</label>
                      <input
                        type="text"
                        class="form-control"
                        name="memberPhone<?php echo $i;?>"
                        id="inputPhoneNumber"
                        placeholder="0000-0000000"
                      />
                    </div>
                  </div>
                  <?php } ?>
                </div>
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-secondary"
                  data-dismiss="modal"
                >
                  Close
                </button>
                <button
                  name="btnSubmit"
                  type="submit"
                  class="btn btn-primary"
                  value="submit"
                >
                  Submit
                </button>
              </div>
         
          </div>
        </div>
      </div>
    </form>
  </body>
</html>
<?php
 }
?>