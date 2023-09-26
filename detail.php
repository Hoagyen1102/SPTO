<?php
    include('connect.php');
    $id = $_GET['id'];
    $sql="SELECT * FROM course inner join programming_language on course.p_id = programming_language.p_id where course.p_id = $id";
    $query = mysqli_query($conn, $sql);
?>  
<div class="course">
    <br><br>
        <ul class="course_list">
        <?php
            while($row = mysqli_fetch_assoc($query))
            {
        ?>
            <li>
                <a href="index.php?quanly=content&c_id=<?php echo $row['c_id']?>">
                <center><img src="img/<?php echo $row['image']; ?>"></center>
                <p class=title_course><?php echo $row['c_name']; ?></p>
                <p class=title_course>Programming language: <?php echo $row['p_language']; ?></p>
                <p class=title_course>Author: <?php echo $row['author']; ?></p>
                </a>
            </li>
        <?php
            }
        ?>
</ul>
</div>