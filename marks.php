<?php
include 'marks.html';
?>
<style>
#wrapper{
    width: 99%;
    margin: 50px auto 0;
    background-color: #fff;
}
body
{
    width:100%;
}
</style>
<div id="main-content">
    <h2>All Records</h2>
    <?php
     $con=mysqli_connect("localhost","root","","student");
     if(!$con)
     {
       die("connection to this database failed due to " .mysqli_connect_error());
     }
     $sql="SELECT * FROM `marks`";
     $result=mysqli_query($con,$sql) or die("query unsuccessful");

     if(mysqli_num_rows($result)>0) {
    ?>
    <table cellpadding="7px">
        <thead>
        <th>student id</th>
        <th>name</th>
        <th>ct1_math</th>
        <th>ct2_math</th>
        <th>ct3_math</th>
        <th>ct1_ds</th>
        <th>ct2_ds</th>
        <th>ct3_ds</th>
        <th>ct1_dstl</th>
        <th>ct2_dstl</th>
        <th>ct3_dstl</th>
        <th>ct1_coa</th>
        <th>ct2_coa</th>
        <th>ct3_coa</th>
        
        <th>Action</th>
        </thead>
        <tbody>
            <?php
            while($row=mysqli_fetch_assoc($result))
            {
            ?>
            <tr>
                <td><?php echo $row['student id']; ?></td>
                <td><?php echo $row['student name']; ?></td>
                <td><?php echo $row['ct1_math']; ?></td>
                <td><?php echo $row['ct2_math']; ?></td>
                <td><?php echo $row['ct3_math']; ?></td>
                <td><?php echo $row['ct1_ds']; ?></td>
                <td><?php echo $row['ct2_ds']; ?></td>
                <td><?php echo $row['ct3_ds']; ?></td>
                <td><?php echo $row['ct1_dstl']; ?></td>
                <td><?php echo $row['ct2_dstl']; ?></td>
                <td><?php echo $row['ct3_dstl']; ?></td>
                <td><?php echo $row['ct1_coa']; ?></td>
                <td><?php echo $row['ct2_coa']; ?></td>
                <td><?php echo $row['ct3_coa']; ?></td>
                <td>
                <a href='editm.php?id=<?php echo $row['student id'];?>'>Edit</a>
                <a href='deletem.php?id=<?php echo $row['student id'];?>'>Delete</a>
                </td>
            </tr>
            <?php } ?>
           
        </tbody>
    </table>
    <?php }else{
        echo "<h2>no record found<h2>";
    } 
    mysqli_close($con);
    ?>
</div>
</div>
</body>
</html>
