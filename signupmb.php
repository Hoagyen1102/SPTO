<div class=edit>
<a href="index.php?quanly=signup">&larr;&ensp; Back to sign up permission page</a>
</div>
<div class="signup">
<form action='index.php?quanly=signupmb' method='POST'>
        <eenter>
        <h2>&emsp;&nbsp;Signing up as a member</h2>
                <img src="Img/avas.png" alt="iconavatar">
                <br>
                Username <input type = "text" name = "username" placeholder = "abc" required/>
                <br>
                Password &nbsp;<input type = "password" name = "password" placeholder = "********" required/>
                <br>
                Email &emsp;&emsp;<input type = "text" name = "email" placeholder = "abc@xyz.com" required/>
                <br>
                Sex &emsp;&emsp;&emsp;<select name="sex">
                            <option value=""></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                </select>
                <br><br>
                <input type = "submit" name="signup" value = "Sign up"/>
                <br>
                Already have an account? <a href='index.php?quanly=loginmb' tittle='login'>Log in ➝ </a> 
</form>
</div>
<?php
	header('Content-Type: text/html; charset=UTF-8');
 
	if (isset($_POST['signup'])) 
	{
	    include('connect.php');
	     
	    //Lấy dữ liệu nhập vào
	    $username = addslashes($_POST['username']);
	    $password = addslashes($_POST['password']);
        $email   = addslashes($_POST['email']);
        $sex   = addslashes($_POST['sex']);      
        // Mã khóa mật khẩu
        $password = md5($password);
        
        //Kiểm tra tên đăng nhập này đã có người dùng chưa
        if (mysqli_num_rows(mysqli_query($conn,"SELECT username FROM Member WHERE username='$username'")) > 0){
            ?>
            <script>
            alert("This username already has a user. Please enter another username!");
            </script>
            <?php
            exit;
        }
    
        //Kiểm tra email có đúng định dạng hay không
        if (!preg_match("/[_a-z0-9-]*@[a-z0-9-]*(\.[a-z]{2,4})$/", $email))
        {
            ?>
            <script>
            alert("Email is invalid, please check again!");
            </script>
            <?php
        }
    
        if (mysqli_num_rows(mysqli_query($conn,"SELECT email FROM Member WHERE email='$email'")) > 0){
            ?>
            <script>
            alert("This email already has a user. Please enter another email!");
            </script>
            <?php
            exit;
        }
        
              
        //Lưu thông tin thành viên vào bảng
        $addmember = mysqli_query($conn,"
            INSERT INTO Member(username,password,email,sex)
            VALUES (
                '{$username}',
                '{$password}',
                '{$email}',
                '{$sex}'
            )");
	    //Lưu tên đăng nhập
        $_SESSION['username'] = $username;
	    header("location: /SPTO/index.php?quanly=loginmb");
		exit;
}
?>