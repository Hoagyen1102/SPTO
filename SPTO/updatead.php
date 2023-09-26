<div class=update>
<?php
    include('connect.php');
    $sql = "SELECT * FROM course inner join programming_language on course.p_id = programming_language.p_id";
    $query = mysqli_query($conn, $sql);
?>  
    <h2>List course</h2> 
    <table>
    <tr>
        <th>ID</th>
        <th>Course name</th>   
        <th>Image</th>
        <th>Description</th>
        <th>Programming Language</th>
        <th>Delete</th>
    </tr>
<?php
    $i = 1;
    while($row = mysqli_fetch_assoc($query))
    {
?>
        <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row['c_name']; ?></td>
        <td>
            <img style="width: 100px"; src="img/<?php echo $row['image']; ?>">
        </td>
        <td><?php echo $row['description']; ?></td>
        <td><?php echo $row['p_language']; ?></td>
        <td> 
            <a onclick="return Del('<?php echo $row['c_name'];?>')" href="index.php?quanly=delete&id=<?php echo $row['c_id']; ?>">
            <div class="btndel">
                <img src="Img/TR.png">
            </div>
        </a>
        </td>
    </tr>
<?php
        } 
?>
    </table>
    <script>
        function Del(name){
            return confirm("Confirm to delete '"+ name + "' ?");
        }
    </script>
</div>