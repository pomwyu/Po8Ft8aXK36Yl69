<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h2>Redlock Databasehehe</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jabatan</th>
            </tr>
            
            <!-- //connect to database -->
            <?php
            $host="172.17.0.2";
            $user="admin";
            $pass="abc123";
            $dbName="redlock-db";
            $con=mysqli_connect($host, $user, $pass, $dbName);
            
            //check the connection
            if(!$con){
                echo 'ERROR: Failed to connect' . mysqli_connect_error();
            }
            
            //query to select data from table
            $sql="SELECT * FROM users";
            $result=mysqli_query($con, $sql);

            //print the data
            while($row=mysqli_fetch_assoc($result)){?>
            <tr>
                <td><?php echo $row["ID"];?></td>
                <td><?php echo $row["Nama"];?></td>
                <td><?php echo $row["Alamat"];?></td>
                <td><?php echo $row["Jabatan"];?></td>
            </tr>
            <?php }; 
            mysqli_close($con);?>
        </table>
    </body>
</html>
