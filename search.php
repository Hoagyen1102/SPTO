<div class="search">
    <form action="index.php?quanly=search" method="get">
    <input type="text" name="search" placeholder="Search here"/>
    <input type="submit" name="quanly" value="search"/>
    </form>
<?php
    include('connect.php');
    $search = addslashes($_GET['search']);
    if (empty($search)){
        echo "<a>Enter something</a>";
    }else{
        $sql = "SELECT * FROM course inner join programming_language on course.p_id = programming_language.p_id where c_name like '%$search%' or author like '%$search%'";
        $query = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($query);
        if ($num > 0 && $search != ""){
        echo "<a>"."$num results found for <b>$search</b>"."</a><br><br>";
        // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
            $i=1;
?>
</div>
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
<?php
    }
}
?>