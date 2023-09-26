<?php
    include('connect.php');
    $username=$_SESSION['username'];
    $id=$_SESSION['id'];
    if($id=="admin")
    {
        $query = mysqli_query($conn,"SELECT username,password,email,sex FROM admin WHERE username='$username'");
    }
    else{
        $query = mysqli_query($conn,"SELECT username,password,email,sex FROM Member WHERE username='$username'");
    }
    $row = mysqli_fetch_array($query);
    $password = $row['password'];
    $email = $row['email'];
    $sex = $row['sex'];
?>
<div class="user">
    <h1>Profile</h1>
    <p>&emsp;&emsp;&emsp;&ensp;&nbsp;Username: &emsp;
        <?php
            echo ' '.$_SESSION['username'];
        ?>
    </p>
    <p><a href="index.php?quanly=editprofile">
        <img src="Img/But.png"></a>Password:  &nbsp;&emsp;
        <?php
            echo ' '.'********';
        ?>
    </p>
    <p><a href="index.php?quanly=editprofile">
        <img src="Img/But.png"></a>Email: &emsp;&emsp;&emsp;
        <?php
            echo ' '.$email;
        ?>
    </p>
    <p><a href="index.php?quanly=editprofile">
        <img src="Img/But.png"></a>Sex: &emsp;&emsp;&emsp;&emsp;
        <?php
            echo ' '.$sex;
        ?>
    </p>
    <?php
    if($id=="member")
    {
    ?> 
        <a href="index.php?quanly=update">
        <input type = "button" name = "ud" value = "   My course  "/>
        </a>
    <?php
    }
    else{
    ?>
        <a href="index.php?quanly=updatead">
        <input type = "button" name = "ud" value = "&emsp;Manage course&emsp;"/>
        </a>
        <a href="index.php?quanly=managemb">
        <input type = "button" name = "ud" value = "   Manage member  "/>
        </a>
    <?php
    }
    ?>
</div>
