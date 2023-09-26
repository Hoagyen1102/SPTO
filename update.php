<div class=update>
<?php
    include('connect.php');
    $sql = "SELECT * FROM course inner join programming_language on course.p_id = programming_language.p_id";
    $query = mysqli_query($conn, $sql);
    $author=$_SESSION['username'];
?>  
    <h2>List course</h2> 
    <table>
    <tr>
        <th>ID</th>
        <th>Course name</th>   
        <th>Image</th>
        <th>Description</th>
        <th>Programming Language</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
<?php
    $i = 1;
    $dem=0;
    while($row = mysqli_fetch_assoc($query))
    {
        if($author == $row['author'])
        {
            $dem++;
?>
        <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row['c_name']; ?></td>
        <td>
            <img style="width: 100px"; src="img/<?php echo $row['image']; ?>">
        </td>
        <td><?php echo nl2br($row['description']); ?></td>
        <td><?php echo $row['p_language']; ?></td>
        <td>
            <div class="btnedit">
                <a href="index.php?quanly=edit&id=<?php echo $row['c_id']; ?>">
                    <img src="Img/But.png">
                </a>
            </div>
        </td>
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
    } 
    if($dem==0)
    {
        echo "<td colspan=7 style='text-align:center;'>"."You don't have any courses"."</td>";
    }
?>
    </table>
    <br><br>
    <a href="index.php?quanly=add"><input type = "button" name = "add" value = "   Add new course  "/></a>
    <script>
        function Del(name){
            return confirm("Confirm to delete '"+ name + "' ?");
        }
    </script>
</div>