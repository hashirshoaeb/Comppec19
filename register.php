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
        background: #343434;       
      } 
    .ball {
        position: absolute;
        border-radius: 100%;
        opacity: 0.7;
        z-index: -1;
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
      function callmembersValidation() {
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
      }
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        "use strict";
        window.addEventListener(
          "load",
          function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName("needs-validation");
            console.log("mai ider hoon");
            callmembersValidation();
            document
              .getElementById("teamNumber")
              .addEventListener("click", function(event) {
                callmembersValidation();
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
         $nextWeek = time() + (5 * 24 * 60 * 60);
         $F_date = date("Y-m-d", $nextWeek);
         $mailSub = "COMPPEC"; 
        $message = '<html>
<body>
  <table>
    <tr>
     <td>Thankyou for registering at COMPPEC 19.We will see you on 19th April,2019 Inshaa Allah. Enjoy the exhibition and goodluck for the competition</td>
    </tr>
    <tr></tr>
    <tr></tr>
    <tr>
      <td>1.The Registration fee (Rs 1000 for Project or Rs 200 for Early Age Programming) is to be submitted in the following bank account:</td>
    </tr>
	<tr>
      <td>Account Title: Comdt College of E&ME</td>
    </tr>
	<tr>
      <td>A/c No. 3001523067</td>
    </tr>
	<tr>
      <td>Br code: 0640</td>
    </tr>
	<tr>
      <td>Banker: NBP, EME College Br</td>
    </tr>
	<tr>
      <td>2.Due date for the submission of fee is '.$F_date.'</td>
    </tr>
	<tr>
      <td>3. Please send a picture of the payment slip to admin@comppec.com for completion of registeration</td>
    </tr>
  <tr>
      <td>Regards</td>
  </tr>
  <tr></tr>
  <tr></tr>
  <tr></tr>
  <tr>
    <td>Team COMPPEC 2019</td>
  </tr>
    </table>
</body>
</html>
';
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
    <script>
      // Some random colors
      const colors = [ "#08adb4","#f6b519", "#ffffff"];
      
      const numBalls = 100;
      const balls = [];
      
      for (let i = 0; i < numBalls; i++) {
        let ball = document.createElement("div");
        ball.classList.add("ball");
        ball.style.background = colors[Math.floor(Math.random() * colors.length)];
        ball.style.left = `${Math.floor(Math.random() * 100)}vw`;
        ball.style.top = `${Math.floor(Math.random() * 100)}vh`;
        ball.style.transform = `scale(${Math.random()})`;
        ball.style.width = `${Math.random()}em`;
        ball.style.height = ball.style.width;
        
        balls.push(ball);
        document.body.append(ball);
      }
      
      // Keyframes
      balls.forEach((el, i, ra) => {
        let to = {
          x: Math.random() * (i % 2 === 0 ? (Math.random() * (-20-(0)) + (0)) : (Math.random() * (0-(20)) + (20))),
          y: Math.random() * (Math.random() * (20-(-20)) + (-20))
        };
        
        let anim = el.animate(
          [
            { transform: "translate(0, 0)" },
            { transform: `translate(${to.x}rem, ${to.y}rem)` }
          ],
          {
            duration: (Math.random() + 1) * 2000, // random duration
            direction: "alternate",
            fill: "both",
            iterations: Infinity,
            easing: "ease-in-out"
          }
          );
        });
        
    </script>
  </body>
</html>
