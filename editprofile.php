<?php
    include('connect.php');
    $username=$_SESSION['username'];
    $id=$_SESSION['id'];
    if(isset($_POST['sbm'])){ 
	    $password = addslashes($_POST['password']);
        $email = addslashes($_POST['email']);
        $sex = addslashes($_POST['sex']); 
        $password = md5($password);
        if($id=="admin")
        {
            $sql = "UPDATE admin SET username = '$username', password = '$password', email = '$email' , sex = '$sex' WHERE username='$username'";
        }
        else{
            $sql = "UPDATE member SET username = '$username', password = '$password', email = '$email' , sex = '$sex' WHERE username='$username'";
        }
        $query = mysqli_query($conn, $sql);
    header('location: index.php?quanly=user');
    }
?>
<div class="edit">
    <a href="index.php?quanly=user">&larr;&ensp; Back to Profile</a>
    <h2>Edit profile</h2> 
    <form method="POST" enctype="multipart/form-data">
                Username: 
                <?php
                    echo ' '.$_SESSION['username'];
                ?>
                <br>
                New password &nbsp;<input type = "password" name = "password" placeholder = "********" required/>
                <br>
                New email &emsp;&emsp;<input type = "text" name = "email" placeholder = "abc@xyz.com" required/>
                <br>
                Re-enter sex &emsp;&nbsp;<select name="sex">
                            <option value=""></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                </select>
                <br><br>
    <input type="submit" name="sbm" value="Edit">
</form>
</div>