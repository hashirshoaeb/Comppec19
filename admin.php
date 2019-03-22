<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css">
</head>

<body>
    <form method="post" action="">
        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" name="inputPassword" class="form-control" id="inputPassword" />
          <label for="inputPassword">Teamid</label>
            <input type="number" name="inputteamid" class="form-control" id="inputteamid" />
		</div>
        <button name="btnSubmit" type="submit" class="btn btn-primary" value="submit">
            Submit
        </button>
    </form>
</body>

</html>

<?php
if(isset($_POST['btnSubmit'])){
    $password = $_POST['inputPassword'];
    $teamid = $_POST['inputteamid'];
    $var = 1;
    echo "You entered $password";
    // if($password != "Allahis1"){
    //     echo "wrong username or password";
    //     exit;
    // }
    // echo "WELCOME ";
    $host = 'localhost';
    $dbname = 'comppec_19';
    $username = 'comppec_c2010';
    $password = '03wAdl}~G{Bf';
    $conn = null;
    // $host = '127.0.0.1';
    // $dbname = 'db_comppec19';
    // $username = 'root';
    // $password = '';
    // $conn = null;
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        echo "Connected to $dbname at $host successfully.";
    } catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
        exit;
    }
    
    $sql1 = "SELECT * FROM tbl_team LEFT JOIN tbl_member ON tbl_team.team_id = tbl_member.team_id";
    $value = $conn->query($sql1);
	$exception="select * from tbl_team  where team_id='$teamid'";
    $num=$con->query($exception)->rowcount();
    if($num==1){
	$query="update tbl_team set team_payment='$var' where team_id='$teamid'";
    $q2=$conn->query($query);
	}else{
		$message = "Teamid does not exist Please try the Valid One";
     echo "<script type='text/javascript'>alert('$message');</script>";  
	}
    if(empty($value)){
        echo "team id is empty";
        exit;
    }
?>
<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Team id</th>
            <th scope="col">Project Title</th>
            <th scope="col">Team Email</th>
            <th scope="col">Category</th>
            <th scope="col">Member Name</th>
            <th scope="col">Member CNIC</th>
            <th scope="col">Member Phone</th>
            <th scope="col">Hostel</th>
            <th scope="col">Payment</th>
            <th scope="col">Pay btn</th>
        </tr>
    </thead>
    <tbody>
        <?php
    $i = 1;
    $categoryname = array("", "ELECTROMECHANICAL SYSTEM",
    "AR/VR & GAMING",
    "IOT & DIGITAL SYSTEM",
    "SOFTWARE SYSTEM",
    "EARLY AGE PROGRAMMING");
    while ($data = $value->fetch()) {
        ?>
        <tr>
            <th scope="row"><?php echo $i++; ?></th>
            <td><?php echo $data['team_id']; ?></td>
            <td><?php echo $data['team_name']; ?></td>
            <td><?php echo $data['team_Email']; ?></td>
            <td><?php echo $categoryname[$data['team_category']]; ?></td>          
            <td><?php echo $data['member_name']; ?></td>
            <td><?php echo $data['member_CNIC']; ?></td>
            <td><?php echo $data['member_phone']; ?></td>
            <td><?php echo $data['team_accomodation']; ?></td>
            <td><?php echo $data['team_payment']; ?></td>
            <td><button id="<?php echo $data['team_id']; ?>">Paid?</button></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<?php
}
?>
