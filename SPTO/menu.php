<?php session_start(); ?>
<div class="menu">
    <ul class="list_menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php?quanly=course">Course</a></li>
            <li><a href="index.php?quanly=aboutus">About us</a></li>
            <li><a>User</a>
                <ul class="sub_menu">
                <?php 
                    if (isset($_SESSION['username']) && $_SESSION['username']){
                    echo "<a href='index.php?quanly=user'>".'<li> Profile '.$_SESSION['username'].'!</a></li>'."<br/>";
                ?>
                    <li><a href="index.php?quanly=logout">Log out</a></li>
                <?php
                    }
                    else{
                ?>
                    <li><a href="index.php?quanly=login">Log in</a></li>
                    <li><a href="index.php?quanly=signup">Sign up</a></li>
                <?php
                    }
                ?>
                </ul>
            </li>
    </ul>
</div>