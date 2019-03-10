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
        <div class=" form-group">
            <label for="inputUsername">Username</label>
            <input type="text" name="inputUsername" class="form-control" id="inputUsername" placeholder="Username" />
        </div>
        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" name="inputPassword" class="form-control" id="inputPassword" />
        </div>
        <button name="btnSubmit" type="submit" class="btn btn-primary" value="submit">
            Submit
        </button>
    </form>
</body>

</html>

<?php
if(isset($_POST['btnSubmit'])){
    $username = $_POST['inputUsername'];
    $password = $_POST['inputPassword'];
    echo "You entered $username and $password";

    // if($username != "Mohammad" or $password != "Allahis1"){
    //     echo "wrong username or password";
    //     exit;
    // }
    // echo "WELCOME ";
    $host = '127.0.0.1';
    $dbname = 'db_comppec19';
    $username = 'root';
    $password = '';
    $conn = null;
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        echo "Connected to $dbname at $host successfully.";
    } catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
        exit;
    }
    
    $sql1 = "SELECT * FROM tbl_team LEFT JOIN tbl_member ON tbl_team.team_id = tbl_member.team_id";
    $value = $conn->query($sql1);
    if(empty($value)){
        echo "team id is empty";
        exit;
    }
?>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Team id</th>
            <th scope="col">Project Title</th>
            <th scope="col">Team Email</th>
            <th scope="col">Member Name</th>
            <th scope="col">Member CNIC</th>
            <th scope="col">Member Phone</th>
        </tr>
    </thead>
    <tbody>
        <?php
    $i = 1;
    while ($data = $value->fetch()) {
        ?>
        <tr>
            <th scope="row"><?php echo $i++; ?></th>
            <td><?php echo $data['team_id']; ?></td>
            <td><?php echo $data['team_name']; ?></td>
            <td><?php echo $data['team_Email']; ?></td>
            <td><?php echo $data['member_name']; ?></td>
            <td><?php echo $data['member_CNIC']; ?></td>
            <td><?php echo $data['member_phone']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<?php
}
?>