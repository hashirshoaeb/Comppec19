<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:400,400i"
      rel="stylesheet"
    />
    <style>
    body {
        background: #262b2e;       
      }
      #canvas {
        position: absolute;
        overflow: hidden;
        top: 0;
        left: 0;
        width: 100%;
        height: auto;
        z-index: -1;
      }
      #canvasbg {
        position: absolute;
        overflow: hidden;
        bottom: 0;
        left: 0;
        width: 100%;
        height: auto;
        z-index: -1;
      }
      #canvasbg {
        z-index: -10;
        -webkit-filter: blur(3px);
        -moz-filter: blur(3px);
        -o-filter: blur(3px);
        filter: blur(3px);
        opacity: 0.6;
      }  
    </style>
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
      <a class="navbar-brand" href="./index.php#Home">COMPPEC'19</a>
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
          <a class="nav-item nav-link active" href="./index.php#Home"
            >Home <span class="sr-only">(current)</span></a
          >
          <a class="nav-item nav-link" href="./index.php#Categories">Categories</a>
          <a class="nav-item nav-link" href="./index.php#Prizes">Prizes</a>
          <a class="nav-item nav-link" href="./Schedule.html#Schedule">Schedule</a>
          <a class="nav-item nav-link" href="./Schedule.html#Symposium">Symposium</a>
          <a class="nav-item nav-link" href="./register.php">Register</a>
          <a class="nav-item nav-link" href="./index.php#Contact">Contact</a>
        </div>
      </div>
    </nav>
    <!-- Navbar -->
    <div class=" container mt-5 mb-5">
      <div class=" card">
        <div class=" card-header">Registration Form</div>
        <div class=" card-body">
          <!-- form start -->
          <form class="needs-validation" novalidate action="" method="post">
            <!-- project title -->
            <div class=" form-group">
              <label for="inputTeamName">Project Title</label>
              <input
                type="text"
                name="teamName"
                class="form-control"
                id="inputTeamName"
                placeholder="Iot based Smart helmet"
                required
              />
              <div class="invalid-feedback">
                Please enter valid information
              </div>
            </div>
            <!-- email -->
            <div class="form-group">
              <label for="inputTeamEmail">Email address</label>
              <input
                type="email"
                name="teamEmail"
                class="form-control"
                id="inputTeamEmail"
                placeholder="name@example.com"
                required
              />
              <div class="invalid-feedback">
                Please enter valid information
              </div>
            </div>
            <!-- category -->
            <div class="form-group">
              <label for="controlCategory">Category</label>
              <select
                name="teamcategory"
                class="form-control"
                id="controlCategory"
              >
                <option value="1">ELECTROMECHANICAL SYSTEM</option>
                <option value="2">AR/VR & GAMING</option>
                <option value="3">IOT & DIGITAL SYSTEM</option>
                <option value="4">SOFTWARE SYSTEM</option>
                <option value="5">EARLY AGE PROGRAMMING</option>
              </select>
            </div>
            <!-- project discreption -->
            <div class="form-group">
              <label for="inputProjectDetails">Describe your project</label>
              <textarea
                class="form-control"
                name="teamProjectDetails"
                id="inputProjectDetails"
                required
              ></textarea>
              <div class="invalid-feedback">
                Please enter valid information
              </div>
            </div>
            <!-- team number -->
            <div id="teamNumber" class=" form-group">
              <label> Team Members</label>
              <div class="form-check form-check-inline">
                <input
                  class="form-check-input"
                  type="radio"
                  name="teamMemberNo"
                  id="inlineRadio1"
                  value="1"
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
                  checked
                />
                <label class="form-check-label" for="inlineRadio3">3</label>
              </div>
            </div>
            <!-- institute -->
            <div class=" form-group">
              <label for="inputInstituteName">Institute </label>
              <input
                type="text"
                name="teamInstituteName"
                class="form-control"
                id="inputInstituteName"
                placeholder="NUST"
                required
              />
              <div class="invalid-feedback">
                Please enter valid information
              </div>
            </div>
            <!-- city -->
            <div class=" form-group">
              <label for="inputCityName">City </label>
              <input
                type="text"
                name="teamCityName"
                class="form-control"
                id="inputCityName"
                placeholder="Islamabad"
                required
              />
              <div class="invalid-feedback">
                Please enter valid information
              </div>
            </div>
            <!-- need accomodation -->
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
            <!-- members info -->
            <hr class=" m-5" />
            <div class=" row">
              <?php $member = array("Leader's name", "2nd Member Name", "3rd Member Name"); ?>
              <?php for ($i=0; $i < 3; $i++) { ?>
              <div class=" col-md-4">
                <div class="form-group">
                  <label for="inputMemberName<?php echo $i;?>"
                    ><?php echo($member[$i]); ?></label
                  >
                  <input
                    type="text"
                    class="form-control"
                    name="memberName<?php echo $i;?>"
                    id="inputMemberName<?php echo $i;?>"
                    placeholder="Name"
                  />
                </div>
                <div class="form-group">
                  <label for="inputCNIC<?php echo $i;?>">CNIC</label>
                  <input
                    type="text"
                    class="form-control"
                    name="memberCNIC<?php echo $i;?>"
                    id="inputCNIC<?php echo $i;?>"
                    placeholder="00000-0000000-0"
                  />
                </div>
                <div class="form-group">
                  <label for="inputPhoneNumber<?php echo $i;?>"
                    >Phone Number</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    name="memberPhone<?php echo $i;?>"
                    id="inputPhoneNumber<?php echo $i;?>"
                    placeholder="0000-0000000"
                  />
                </div>
              </div>
              <?php } ?>
            </div>
            <button
              name="btnSubmit"
              type="submit"
              class="btn btn-primary"
              value="submit"
            >
              Submit
            </button>
          </form>
        </div>
      </div>
    </div>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        "use strict";
        window.addEventListener(
          "load",
          function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName("needs-validation");

            document
              .getElementById("teamNumber")
              .addEventListener("click", function(event) {
                var members = document.getElementsByName("teamMemberNo");
                var memberNo = 1;
                for (let i = 0; i < members.length; i++) {
                  if (members[i].checked) {
                    memberNo = members[i].value;
                  }
                }
                for (let i = 0; i < memberNo; i++) {
                  let concdata = "inputMemberName" + i;
                  document
                    .getElementById(concdata)
                    .setAttribute("required", "");
                  document.getElementById(concdata).disabled = false;
                  concdata = "inputCNIC" + i;
                  document
                    .getElementById(concdata)
                    .setAttribute("required", "");
                  document.getElementById(concdata).disabled = false;
                  concdata = "inputPhoneNumber" + i;
                  document
                    .getElementById(concdata)
                    .setAttribute("required", "");
                  document.getElementById(concdata).disabled = false;
                }
                for (let i = 2; i >= memberNo; i--) {
                  let concdata = "inputMemberName" + i;
                  document.getElementById(concdata).removeAttribute("required");
                  document.getElementById(concdata).disabled = true;
                  concdata = "inputCNIC" + i;
                  document.getElementById(concdata).removeAttribute("required");
                  document.getElementById(concdata).disabled = true;
                  concdata = "inputPhoneNumber" + i;
                  document.getElementById(concdata).removeAttribute("required");
                  document.getElementById(concdata).disabled = true;
                }
              });
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener(
                "submit",
                function(event) {
                  if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                  }
                  form.classList.add("was-validated");
                },
                false
              );
            });
          },
          false
        );
      })();
    </script>
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
        //  echo '<script type="text/javascript">alert("' . $msg . '")</script>';
        echo '<div class=" alert alert-danger display-3 text-center">"' . $msg . '"</div>';
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
       
       // connection
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
             $sql3 = "DELETE FROM tbl_team WHERE team_Email ='$teamEmail'";
             exit;
           }
         }         
         // echo "Registration SUCCESSFULL";
         echo '<div class=" alert alert-success display-3 text-center">Registration SUCCESSFULL</div>';
         
         
         //pdf challan data
        //  $F_challanNo = date('mYd') . $team_id;
        //  $nextWeek = time() + (7 * 24 * 60 * 60);
        //  $F_date = date("Y-m-d", $nextWeek);
        //  $F_leaderName = $memberNames[0];
        //  $F_projectId = $team_id;
        //  $F_projectTitle = $teamName;
        //  $F_regFee = "1000 Rs";
        //  if ($teamcategory == 5){ // early age programming
        //    $F_regFee = "200 Rs";
        //  }
        //  $F_BankDetails = "here is details of bank TITLE AND NUMBER";
        //  $F_BankTitle = "Emerging Technical Lab";
        //  $F_AccountNo = " 0000044348";
         // echo("challan no: $F_challanNo, 
         // date: $F_date,
         // leader name: $F_leaderName,
         // project id: $F_projectId,
         // project title: $F_projectTitle,
         // regfee: $F_regFee,
         // bank details: $F_BankDetails");
   
         // include('fpdf.php');
         
         // class PDF extends FPDF
         // {
         //   // Page header
         //   function Header()
         //   {
         //     $this->SetFont('Arial','B',15);
         //     $this->Cell(15);
         //     $this->Cell(40,10,'CommpecCopy',0,0);
         //     $this->Cell(65);
         //     $this->Cell(40,10,'BankCopy',0,0);
         //     $this->Cell(55);
         //     $this->Cell(40,10,'StudentCopy',0,0);
         //     $this->Image('img/NUST_Vector.png',10,10,10);
         //     $this->Image('img/FooterLogo.png',70,10,10);
         //     $this->Image('img/NUST_Vector.png',110,10,10);
         //     $this->Image('img/FooterLogo.png',170,10,10);
         //     $this->Image('img/NUST_Vector.png',210,10,10);
         //     $this->Image('img/FooterLogo.png',270,10,10);
         //     $this->Ln(10);
         //   }
           
         //   // Page footer
         //   function Footer()
         //   {
         //     // Position at 1.5 cm from bottom
         //     $this->SetY(-15);
         //     // Arial italic 8
         //     $this->SetFont('Arial','I',8);
         //     // Page number
         //     $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
         //   }
         // }
         
         // $pdf=new PDF('L', 'mm', 'A4');
         // $pdf->AddPage();
         // $pdf->SetFont('Arial','B',13);
         // $pdf->Rect(3, 5, 95, 65, 'D');
         // $pdf->Rect(3, 70, 95, 10, 'D');
         // $pdf->Rect(3, 80, 95, 30, 'D');
         // $pdf->Rect(101, 5, 95, 65, 'D');
         // $pdf->Rect(101, 70, 95, 10, 'D');
         // $pdf->Rect(101, 80, 95, 30, 'D');
         // $pdf->Rect(200, 5, 95, 65, 'D');
         // $pdf->Rect(200, 70, 95, 10, 'D');
         // $pdf->Rect(200, 80, 95, 30, 'D');
         // $pdf->Cell(100,10,"Challanno: {$F_challanNo}",0,0);
         // $pdf->Cell(100,10,"Challanno: {$F_challanNo}",0,0);
         // $pdf->Cell(100,10,"Challanno: {$F_challanNo}",0,1);
         // $pdf->Cell(100,10,"Date: {$F_date}",0,0);
         // $pdf->Cell(100,10,"Date: {$F_date}",0,0);
         // $pdf->Cell(100,10,"Date: {$F_date}",0,1);
         // $pdf->Cell(100,10,"Leadername: {$F_leaderName}",0,0);
         // $pdf->Cell(100,10,"Leadername: {$F_leaderName}",0,0);
         // $pdf->Cell(100,10,"Leadername: {$F_leaderName}",0,1);
         // $pdf->Cell(100,10,"ProjectId: {$F_projectId}",0,0);
         // $pdf->Cell(100,10,"ProjectId: {$F_projectId}",0,0);
         // $pdf->Cell(100,10,"ProjectId: {$F_projectId}",0,1);
         // $pdf->Cell(100,10,"ProjectTitle: {$F_projectTitle}",0,0);
         // $pdf->Cell(100,10,"ProjectTitle: {$F_projectTitle}",0,0);
         // $pdf->Cell(100,10,"ProjectTitle: {$F_projectTitle}",0,1);
         // $pdf->Cell(100,10,"RegistrationFEE:         {$F_regFee}",0,0);
         // $pdf->Cell(100,10,"RegistrationFEE:         {$F_regFee}",0,0);
         // $pdf->Cell(100,10,"RegistrationFEE:         {$F_regFee}",0,1);
         // $pdf->Cell(100,10,"BankInfo:",0,0);
         // $pdf->Cell(100,10,"BankInfo:",0,0);
         // $pdf->Cell(100,10,"BankInfo:",0,1);
         // $pdf->Cell(100,10,"Title: {$F_BankTitle}",0,0);
         // $pdf->Cell(100,10,"Title: {$F_BankTitle}",0,0);
         // $pdf->Cell(100,10,"Title: {$F_BankTitle}",0,1);
         // $pdf->Cell(100,10,"AccountNo: {$F_AccountNo}",0,0);
         // $pdf->Cell(100,10,"AccountNo: {$F_AccountNo}",0,0);
         // $pdf->Cell(100,10,"AccountNo: {$F_AccountNo}",0,1);
         // $doc = $pdf->Output('S'); 
         $mailSub = "COMPPEC"; 
         $mailMsg1 = "Thankyou for registering at COMPPEC'19. We will see you on 19th April, 2019 Inshaa Allah. Enjoy the exhibition and goodluck for the competition \n".
         "1. The Registration fee is to be submitted in the following bank account: \n".
         "Account Title: Comdt College of E&ME \n".
         "A/c No. 3001523067\n".
         "Br code: 0640\n".
         "Banker: NBP, EME College Br\n".
         "2. Due date for the submission of fee is (+5 days of registration). \n".
         "3. Please send a picture of the payment slip to admin@comppec.com for completion of registeration.\n";
         require 'mailAttachments/PHPMailerAutoload.php';
         $mail = new PHPMailer();
         $mail ->IsSmtp();
         $mail ->SMTPDebug = 0;
         $mail ->SMTPAuth = true;
         $mail ->SMTPSecure = 'ssl';
         $mail ->Host = "mail.comppec.com";
         $mail ->Port = 465; // or 587
         $mail ->IsHTML(true);
         $mail ->Username = "admin@comppec.com";
         $mail ->Password = "Xj362Iw3kb";
         $mail ->SetFrom("admin@comppec.com");
         $mailto = "$teamEmail";
         $mail ->Subject = $mailSub;
         $mail ->Body = "$mailMsg1";     
         $mail ->AddAddress($mailto);
         // $mail->AddStringAttachment($doc, 'doc.pdf', 'base64', 'application/pdf');
         // $mail->Send();
         if(!$mail->Send()) {
          //  echo 'Message could not be sent.';
           echo '<div class=" alert alert-danger display-3 text-center">Mail could not be sent.</div>';
          //  echo 'Mailer Error: ' . $mail->ErrorInfo;
           exit;
        }        
        echo '<div class=" alert alert-info display-5 text-center">Message has been sent, check your mail.</div>';       
    }   
    ?>
    <footer style="background-color: #f5f5f5;" class=" mt-auto py-3 text-center">
      <strong>&copy; 2019 </strong> Department of Computer and Software Engineering NUST Collage of Electrical and Mechanical Engineering 
    </footer>
    <canvas id="canvas" width="1950px" height="800px"></canvas>
    <canvas id="canvasbg" width="1950px" height="800px"></canvas>
    <script>
      // min and max radius, radius threshold and percentage of filled circles
      var radMin = 5,
      radMax = 125,
      filledCircle = 60, //percentage of filled circles
      concentricCircle = 30, //percentage of concentric circles
      radThreshold = 25; //IFF special, over this radius concentric, otherwise filled
      
      //min and max speed to move
      var speedMin = 0.3,
      speedMax = 2.5;
      
      //max reachable opacity for every circle and blur effect
      var maxOpacity = 0.6;
      
      //default palette choice
      var colors = ["8,173,180", "246,181,25", "255,255,255"],
      bgColors = ["8,173,180", "246,181,25", "255,255,255"],
      circleBorder = 10,
      backgroundLine = bgColors[0];
      var backgroundMlt = 0.85;
      
      //min distance for links
      var linkDist = Math.min(canvas.width, canvas.height) / 2.4,
      lineBorder = 2.5;
      
      //most importantly: number of overall circles and arrays containing them
      var maxCircles = 12,
      points = [],
      pointsBack = [];
      
      //populating the screen
      for (var i = 0; i < maxCircles * 2; i++) points.push(new Circle());
      for (var i = 0; i < maxCircles; i++) pointsBack.push(new Circle(true));
      
      //experimental vars
      var circleExp = 1,
      circleExpMax = 1.003,
      circleExpMin = 0.997,
      circleExpSp = 0.00004,
      circlePulse = false;
      
      //circle class
      function Circle(background) {
        //if background, it has different rules
        this.background = background || false;
        this.x = randRange(-canvas.width / 2, canvas.width / 2);
        this.y = randRange(-canvas.height / 2, canvas.height / 2);
        this.radius = background
        ? hyperRange(radMin, radMax) * backgroundMlt
        : hyperRange(radMin, radMax);
        this.filled =
        this.radius < radThreshold
        ? randint(0, 100) > filledCircle
        ? false
        : "full"
        : randint(0, 100) > concentricCircle
        ? false
        : "concentric";
        this.color = background
        ? bgColors[randint(0, bgColors.length - 1)]
        : colors[randint(0, colors.length - 1)];
        this.borderColor = background
        ? bgColors[randint(0, bgColors.length - 1)]
        : colors[randint(0, colors.length - 1)];
        this.opacity = 0.05;
        this.speed = background
        ? randRange(speedMin, speedMax) / backgroundMlt
        : randRange(speedMin, speedMax); // * (radMin / this.radius);
        this.speedAngle = Math.random() * 2 * Math.PI;
        this.speedx = Math.cos(this.speedAngle) * this.speed;
        this.speedy = Math.sin(this.speedAngle) * this.speed;
        var spacex = Math.abs(
          (this.x -
          (this.speedx < 0 ? -1 : 1) * (canvas.width / 2 + this.radius)) /
          this.speedx
          ),
          spacey = Math.abs(
            (this.y -
            (this.speedy < 0 ? -1 : 1) *
            (canvas.height / 2 + this.radius)) /
            this.speedy
            );
            this.ttl = Math.min(spacex, spacey);
      }
      Circle.prototype.init = function() {
        Circle.call(this, this.background);
      };
      
      //support functions
      //generate random int a<=x<=b
      function randint(a, b) {
        return Math.floor(Math.random() * (b - a + 1) + a);
      }
      //generate random float
      function randRange(a, b) {
        return Math.random() * (b - a) + a;
      }
      //generate random float more likely to be close to a
      function hyperRange(a, b) {
        return Math.random() * Math.random() * Math.random() * (b - a) + a;
      }
      
      //rendering function
      function drawCircle(ctx, circle) {
        //circle.radius *= circleExp;
        var radius = circle.background
        ? (circle.radius *= circleExp)
        : (circle.radius /= circleExp);
        ctx.beginPath();
        ctx.arc(
          circle.x,
          circle.y,
          radius * circleExp,
          0,
          2 * Math.PI,
          false
        );
        ctx.lineWidth = Math.max(
          1,
          (circleBorder * (radMin - circle.radius)) / (radMin - radMax)
        );
        ctx.strokeStyle = [
          "rgba(",
          circle.borderColor,
          ",",
          circle.opacity,
          ")"
        ].join("");
        if (circle.filled == "full") {
          ctx.fillStyle = [          
            "rgba(",
            circle.borderColor,
            ",",
            circle.background ? circle.opacity * 0.8 : circle.opacity,
            ")"
          ].join("");
          ctx.fill();
          ctx.lineWidth = 0;
          ctx.strokeStyle = ["rgba(", circle.borderColor, ",", 0, ")"].join(
            ""
            );
        }
        ctx.stroke();
        if (circle.filled == "concentric") {
          ctx.beginPath();
          ctx.arc(circle.x, circle.y, radius / 2, 0, 2 * Math.PI, false);
          ctx.lineWidth = Math.max(
            1,
            (circleBorder * (radMin - circle.radius)) / (radMin - radMax)
            );
            ctx.strokeStyle = [
              "rgba(",
              circle.color,
              ",",
              circle.opacity,
              ")"
            ].join("");
            ctx.stroke();
        }
        circle.x += circle.speedx;
        circle.y += circle.speedy;
        if (circle.opacity < (circle.background ? maxOpacity : 1))
        circle.opacity += 0.01;
        circle.ttl--;
      }
      
      //initializing function
      function init() {
        window.requestAnimationFrame(draw);
      }
      
      //rendering function
      function draw() {
        if (circlePulse) {
          if (circleExp < circleExpMin || circleExp > circleExpMax)
          circleExpSp *= -1;
          circleExp += circleExpSp;
        }
        var ctxfr = document.getElementById("canvas").getContext("2d");
        var ctxbg = document.getElementById("canvasbg").getContext("2d");
        
        ctxfr.globalCompositeOperation = "destination-over";
        ctxfr.clearRect(0, 0, canvas.width, canvas.height); // clear canvas
        ctxbg.globalCompositeOperation = "destination-over";
        ctxbg.clearRect(0, 0, canvas.width, canvas.height); // clear canvas
        
        ctxfr.save();
        ctxfr.translate(canvas.width / 2, canvas.height / 2);
        ctxbg.save();
        ctxbg.translate(canvas.width / 2, canvas.height / 2);
        
        //function to render each single circle, its connections and to manage its out of boundaries replacement
        function renderPoints(ctx, arr) {
          for (var i = 0; i < arr.length; i++) {
            var circle = arr[i];
            //checking if out of boundaries
            if (circle.ttl < 0) {
            }
            var xEscape = canvas.width / 2 + circle.radius,
            yEscape = canvas.height / 2 + circle.radius;
            if (circle.ttl < -20) arr[i].init(arr[i].background);
            //if (Math.abs(circle.y) > yEscape || Math.abs(circle.x) > xEscape) arr[i].init(arr[i].background);
            drawCircle(ctx, circle);
          }
          for (var i = 0; i < arr.length - 1; i++) {
            for (var j = i + 1; j < arr.length; j++) {
              var deltax = arr[i].x - arr[j].x;
              var deltay = arr[i].y - arr[j].y;
              var dist = Math.pow(
                Math.pow(deltax, 2) + Math.pow(deltay, 2),
                0.5
              );
              //if the circles are overlapping, no laser connecting them
              if (dist <= arr[i].radius + arr[j].radius) continue;
              //otherwise we connect them only if the dist is < linkDist
              if (dist < linkDist) {               
                var xi =
                (arr[i].x < arr[j].x ? 1 : -1) *
                Math.abs((arr[i].radius * deltax) / dist);
                var yi =
                (arr[i].y < arr[j].y ? 1 : -1) *
                Math.abs((arr[i].radius * deltay) / dist);
                var xj =
                (arr[i].x < arr[j].x ? -1 : 1) *
                Math.abs((arr[j].radius * deltax) / dist);
                var yj =
                (arr[i].y < arr[j].y ? -1 : 1) *
                Math.abs((arr[j].radius * deltay) / dist);
                ctx.beginPath();
                ctx.moveTo(arr[i].x + xi, arr[i].y + yi);
                ctx.lineTo(arr[j].x + xj, arr[j].y + yj);
                var samecolor = arr[i].color == arr[j].color;
                ctx.strokeStyle = [
                  "rgba(",
                  arr[i].borderColor,
                  ",",
                  Math.min(arr[i].opacity, arr[j].opacity) *
                  ((linkDist - dist) / linkDist),
                  ")"
                ].join("");
                ctx.lineWidth =
                (arr[i].background
                ? lineBorder * backgroundMlt
                : lineBorder) *
                ((linkDist - dist) / linkDist); //*((linkDist-dist)/linkDist);
                ctx.stroke();
              }
            }
          }
        }
        
        var startTime = Date.now();
        renderPoints(ctxfr, points);
        renderPoints(ctxbg, pointsBack);
        deltaT = Date.now() - startTime;
        
        ctxfr.restore();
        ctxbg.restore();
        
        window.requestAnimationFrame(draw);
      }
      
      init();
      
      /*Credits and aknowledgements:
      Original Idea and Design by Luca Luzzatti
      
      Optimizing tips from Benjamin Kästner
      General tips from Salvatore Previti*/
      
    </script>
  </body>
</html>
