<center>
        <?php
        include('conn.php');
        $name=$_POST["firstname"];
        $add=$_POST["address"];
        $city=$_POST["city"];
        $sql="INSERT INTO master_account VALUES('$name','$add','$city')";
        $res=mysqli_query($conn,$sql);
          echo "<br>"."<br>";
          echo "Customer Name: ".$name."<br>".
          "<br>";
          echo "Address: ".$add."<br>"."<br>";
          echo "City: ".$city."<br>";
        ?>
</center>