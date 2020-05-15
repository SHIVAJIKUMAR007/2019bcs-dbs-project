<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predefine Query result</title>
</head>
<body>

    <?php 
      $type = $_GET['type'];
      include_once('./db.php');
      if( $type == "trackorder")
      {
          $oid = $_POST['oid'];
          $query = "SELECT * FROM `order_table` WHERE o_id ='$oid' ";
          $queryfire = mysqli_query($con, $query);
          $num = mysqli_num_rows($queryfire);
          if( $num > 0)
          {
              $result = mysqli_fetch_array($queryfire);

          $b_id = $result['buyer_id'];
          $stetus =$result['stetus'];
          $location =$result['location'];
          $shipping =$result['shipping address'];
          ?>
           <h3>Your enter order id was <?php echo $oid ?></h3>
           Buyer ID : <?php echo $b_id ?> <br>
           Status : <?php echo $stetus ?><br>
           Current location : <?php echo $location ?><br>
           Shipping address : <?php echo $shipping ?>
          <?php      
          }
          else 
          {
            echo "<script>alert('This order id is not exists') </script>";
            echo "<script>window.open('index.php','_self') </script>";
          }
          
      }
      else if( $type == "cus_info")
      {
            $bid = $_POST['bid'];
            $query = "SELECT * FROM `buyer` WHERE b_id ='$bid' ";
            $queryfire = mysqli_query($con, $query);
            $num = mysqli_num_rows($queryfire);
            if( $num > 0)
            {
            $result = mysqli_fetch_array($queryfire);

            $name = $result['name'];
            $address =$result['address'];

            $query = "SELECT * FROM `buyer_contact_info` WHERE b_id ='$bid' ";
            $queryfire = mysqli_query($con, $query);
            $result = mysqli_fetch_array($queryfire);
            $mobile_no =$result['mobile_no'];
            ?>
            <h3>Your enter Buyer ID was <?php echo $bid ?></h3>
            Name : <?php echo $name ?> <br>
            Address : <?php echo $address ?><br>
            Mobile no : <?php echo $mobile_no ?><br>
            <?php      
            }
            else 
            {
            echo "<script>alert('This customer does not exists') </script>";
            echo "<script>window.open('index.php','_self') </script>";
            }
      }
      else if( $type == "history")
      {
        $bid = $_POST['bid'];
        $query = "SELECT * FROM `order_table` WHERE buyer_id ='$bid' ";
        $queryfire = mysqli_query($con, $query);
        $num = mysqli_num_rows($queryfire);
        if( $num > 0)
        {
            $amount = 0;
            ?><h3>Your enter Buyer ID was <?php echo $bid ?></h3><?php
         while($result = mysqli_fetch_array($queryfire))
         {
            $amount = $amount + 1;
            $o_id = $result['o_id'];
            $stetus =$result['stetus'];
            $shipping =$result['shipping address'];
            ?>
            <?php echo $amount ?> ) Order id : <?php echo $o_id ?> <br>
                                    Status : <?php echo $stetus ?><br>
                                    Sipping Address : <?php echo $shipping ?><br><br><br>
            <?php  
         }

            
        }
        else 
        {
          echo "<script>alert('This customer did not shop anything yet ') </script>";
          echo "<script>window.open('index.php','_self') </script>";
        }
      }
      else if( $type == "warehouselist")
      {
        $company = $_POST['company'];
        $query = "SELECT * FROM `warehouse` WHERE company = '$company'  ";
        $queryfire = mysqli_query($con, $query);
        $num = mysqli_num_rows($queryfire);
        if( $num > 0)
        {
                $amount = 0;
                ?><h3>Your enter Company name was <?php echo $company ?></h3><?php
            while($result = mysqli_fetch_array($queryfire))
            {
                $amount = $amount + 1; 
                $name = $result['name'];
                $address = $result['address'];                      
                ?>
               <?php echo $amount ?> ) Warehouse Name : <?php echo $name ?> <br>
                Address : <?php echo $address ?><br><br><br><br>
                
                <?php
            }
            // echo $amount;           
        }
        else 
        {
        echo "<script>alert('This company doesnot exist.') </script>";
        echo "<script>window.open('index.php','_self') </script>";
        }
          
      }

    ?>
    
</body>
</html>