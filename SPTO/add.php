<?php
include('connect.php');
$sql_pl="SELECT * FROM programming_language";
$query_pl = mysqli_query($conn, $sql_pl);


if(isset($_POST['sbm'])){
    $c_name = addslashes($_POST['c_name']);
    $author= addslashes($_SESSION['username']);
    $image = addslashes($_FILES['image']['name']);
    $image_tmp = addslashes($_FILES['image']['tmp_name']);
    $description = addslashes($_POST['description']);
    $p_id = $_POST['p_id'];

    $sql = "INSERT INTO course (c_name, image, author, description, p_id,click)
            VALUES ( '$c_name', '$image','$author','$description',$p_id,0)";
    $query = mysqli_query($conn, $sql);
move_uploaded_file($image_tmp, 'img/'.$image );
header('location: index.php?quanly=update');
}
?>

<div class="add">
    <a href="index.php?quanly=update">&larr;&ensp; Back to My Course</a>
    <h2>Add course</h2> 
    <form method="POST" enctype="multipart/form-data">
            Course name <input type="text" name="c_name" required>
            <br>
            Image <input type="file" required name="image">
            <br>
            Description<br> <textarea name="description" placeholder="Enter something here..." required></textarea>
            <br>
            Programming language &emsp;
            <select name="p_id">
               <?php
               while($row_pl = mysqli_fetch_assoc($query_pl)){?>
                <option value =
                    "<?php echo $row_pl['p_id'];?>"> 
                    <?php echo $row_pl['p_language'];?>
                </option>
               <?php }?>
            </select>
            <br>
            <input type="submit" name="sbm" value="Add">
</form>
</div>             