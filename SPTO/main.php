<div id="main">
        <?php
            include("sidebar.php");
         ?>
        <div class="maincontent">
            <?php
            if(isset($_GET['quanly'])){
                switch($_GET['quanly']){
                    case 'course':
                        require_once 'course.php';
                        break;
                    case 'aboutus':
                        require_once 'aboutus.php';
                        break;
                    case 'user':
                        require_once 'user.php';
                        break; 
                    case 'login':
                        require_once 'login.php';
                        break;
                    case 'signup':
                        require_once 'signup.php';
                        break;
                    case 'logout':
                        require_once 'logout.php';
                        break;
                    case 'comment':
                        require_once 'comment.php';
                        break;  
                    case 'update':
                        require_once 'update.php';
                        break; 
                    case 'edit':
                        require_once 'edit.php';
                        break; 
                    case 'delete':
                        require_once 'delete.php';
                        break;
                    case 'add':
                        require_once 'add.php';
                        break;
                    case 'content':
                        require_once 'content.php';
                        break;  
                    case 'detail':
                        require_once 'detail.php';
                        break;  
                    case 'search':
                        require_once 'search.php';
                        break;  
                    case 'loginad':
                        require_once 'loginad.php';
                        break; 
                    case 'signupad':
                        require_once 'signupad.php';
                        break;
                    case 'signupmb':
                        require_once 'signupmb.php';
                        break;
                    case 'loginmb':
                        require_once 'loginmb.php';
                        break;
                    case 'editprofile':
                        require_once 'editprofile.php';
                        break;
                    case 'updatead':
                        require_once 'updatead.php';
                        break;
                    case 'managemb':
                        require_once 'managemb.php';
                        break;
                    case 'deletemb':
                        require_once 'deletemb.php';
                        break;
                    default:
                        require_once 'mainindex.php';
                        require_once 'intro.php';
                        break;
                }
            }else{
                require_once 'mainindex.php';
                require_once 'intro.php';
            }
            ?>
        </div>
</div>