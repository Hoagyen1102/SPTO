<div class=update>
<?php
    include('connect.php');
    $sql = "SELECT * FROM member";
    $query = mysqli_query($conn, $sql);
?>  
    <h2>List member</h2> 
    <table class="member">
    <tr>
        <th>Username</th>
        <th>Password (encrypted)</th>
        <th>Email</th>   
        <th>Sex</th>
        <th>Delete</th>
    </tr>
<?php
    while($row = mysqli_fetch_assoc($query))
    {
?>
        <tr>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['sex']; ?></td>
        <td> 
            <a onclick="return Del('<?php echo $row['username'];?>')" href="index.php?quanly=deletemb&username=<?php echo $row['username']; ?>">
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
            return confirm("Confirm to delete member '"+ name + "' ?");
        }
    </script>
</div>