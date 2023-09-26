<?php
    include('connect.php');
    $id = $_GET['c_id'];
    $sql="SELECT * FROM course inner join programming_language on course.p_id = programming_language.p_id where c_id = $id";
    $query = mysqli_query($conn, $sql);
    $sql_cmt = "SELECT * FROM comment where comment.c_id = $id";
    $query_cmt = mysqli_query($conn, $sql_cmt);

    if(isset($_POST['sbm'])){
        $username = $_SESSION['username'];
        $comment = addslashes($_POST['comment']);
        $c_id = addslashes($id);

        $sql_acm = "INSERT INTO comment (username, c_id, comment)
                VALUES ( '$username',$c_id,'$comment')";
        $query_acm = mysqli_query($conn, $sql_acm);
        header('refresh:1');
    }
?>  
<div class="content">
        <?php
            while($row = mysqli_fetch_assoc($query))
            {
        ?>
            <div class="content_img">
            <a href="index.php?quanly=course">&larr;&ensp; Back to Course</a>
            <img src="img/<?php echo $row['image']; ?>">
            </div>
            <div class="lesson_details">
            <p class="lesson_title"><?php echo $row['c_name']; ?></p>
            <p><b>Programming language: </b><?php echo $row['p_language']; ?></p>
            <p><b>Author: </b><?php echo $row['author']; ?></p>
            <p><b>Content: </b></p>
            </div>
            <div class="clear"></div>
            <div class="sub_content">
            <p><?php echo nl2br($row['description']); ?></p>
            <?php
                $click = $row['click'] + 1;
                $c_id = $row['c_id'];
                $query_cl = mysqli_query($conn, "UPDATE course SET click = $click WHERE c_id = $c_id");
            ?>
            </div>
        <?php
            }
        ?>
    <div class="comment">
        <h3>Comment:</h3>
        <?php
        if (isset($_SESSION['username']) && $_SESSION['username']){
            ?>
            <form method='POST' enctype="multipart/form-data">
                <textarea name="comment" placeholder="Enter comment here..." required></textarea>
                <input type="submit" name="sbm" value="submit">
            </form>
            <?php
        }
        ?>
        <table class="commenttb">
            <?php
            $dem=0;
            while($row = mysqli_fetch_assoc($query_cmt))
            {
                $dem++;
            ?>
            <tr>
            <td width="80px" style="font-weight:bold;border:none;text-align:center;">
            <?php echo $row['username']; ?></td>
            <td style="border:1px solid #ddd;border-radius:20px;"><?php echo nl2br($row['comment']); ?></td>
            </tr>
            <br>
            <?php
            }
            if($dem==0)
            {
                echo "<td colspan=2 style='text-align:center;'>"."There are no comments here"."</td>";
            }
            ?>
        </table>
    </div>
</div>