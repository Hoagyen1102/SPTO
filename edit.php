<?php
include('connect.php');
$id = $_GET['id'];
$sql_pl="SELECT * FROM programming_language";
$query_pl = mysqli_query($conn, $sql_pl);
$sql_up ="SELECT * FROM course where c_id = $id";
$query_up = mysqli_query($conn, $sql_up);
$row_up = mysqli_fetch_assoc($query_up);
if(isset($_POST['sbm'])){ 
    $c_name = addslashes($_POST['c_name']);
    if($_FILES['image']['name']==''){
        $image = $row_up['image'];
    }else{
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($image_tmp, 'img/'.$image );
    }
    $description = addslashes($_POST['description']);
    $p_id = addslashes($_POST['p_id']);
    $sql = "UPDATE course SET c_name = '$c_name', image = '$image', description = '$description' , p_id = $p_id WHERE c_id = $id";
    $query = mysqli_query($conn, $sql);
header('location: index.php?quanly=update');
}
?>
<div class="edit">
    <a href="index.php?quanly=update">&larr;&ensp; Back to My Course</a>
    <h2>Edit course</h2> 
    <form method="POST" enctype="multipart/form-data">
        Course name <input type="text" name="c_name" required value="<?php echo $row_up['c_name'];?>">
        <br>
        Image <input type="file" name="image">
        <br>
        Description<br> <textarea name="description" placeholder="Enter something here..." required><?php echo $row_up['description'];?></textarea>
        <br>
        Programming Language &emsp;
        <select name="p_id">
           <?php
           while($row_pl = mysqli_fetch_assoc($query_pl)){?>
                <option value ="<?php echo $row_pl['p_id'];?>"> <?php echo $row_pl['p_language'];?></option>
            <?php } ?>
        </select>
        <br>
    <input type="submit" name="sbm" value="Edit">
</form>
</div>