<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once('./bootstrap.php'); ?>
    <title>Query Result </title>
</head>
<body>
    
<?php 
$type = $_GET['no'];
// echo $type;

if( $type == 1)
{
    // $word = "SELECT";
    // if(strpos($query, $word) == true){
        // echo "Word Found!";
        include_once('./db.php');
        $query = $_POST['select_query'];
        $table = $_POST['table'];
        if($queryfire = mysqli_query($con , $query))
        {
           
               if($table == "buyer")
               {
                    ?> 
                    <table class="table table-striped">
                        <thead>
                            <tr><th>b_id</th><th>name</th><th>address</th></tr>
                        </thead>
                    <?php
                    while($result = mysqli_fetch_array($queryfire))
                    {
                    $b_id = $result['b_id'];
                    $name = $result['name'];
                    $address = $result['address'];
                    ?>
                    <tr>
                        <td><?php echo $b_id ?></td>
                        <td><?php echo $name ?></td>
                        <td><?php echo $address ?></td>
                        </tr>                   
                    <?php 
                    }
                    ?> </table> <?php
               }
               else if( $table == "buyer_contact_info")
               {
                    ?> 
                    <table class="table table-striped">
                        <thead>
                            <tr><th>mobile_no</th><th>b_id</th></tr>
                        </thead>
                    <?php
                    while($result = mysqli_fetch_array($queryfire))
                    {
                    $b_id = $result['b_id'];
                    $mobile_no = $result['mobile_no'];
                    ?>
                    <tr>
                        <td><?php echo $b_id ?></td>
                        <td><?php echo $mobile_no ?></td>
                        </tr>                   
                    <?php 
                    }
                    ?> </table> <?php
               }
               else if( $table == "company")
               {
                    ?> 
                    <table class="table table-striped">
                        <thead>
                            <tr><th>name</th></tr>
                        </thead>
                    <?php
                    while($result = mysqli_fetch_array($queryfire))
                    {
                    $name = $result['name'];
                    ?>
                    <tr>
                        <td><?php echo $name ?></td>
                        </tr>                   
                    <?php 
                    }
                    ?> </table> <?php
               }
               else if( $table == "delivaery_boy")
               {
                    ?> 
                    <table class="table table-striped">
                        <thead>
                            <tr><th>employee_id</th><th>name</th><th>hub address</th></tr>
                        </thead>
                    <?php
                    while($result = mysqli_fetch_array($queryfire))
                    {
                    $employee_id = $result['employee_id'];
                    $name = $result['name'];
                    $hub = $result['hub_address'];
                    ?>
                    <tr>
                        <td><?php echo $employee_id ?></td>
                        <td><?php echo $name ?></td>
                        <td><?php echo $hub ?></td>
                    </tr>                   
                    <?php 
                    }
                    ?> </table> <?php

               }
               else if( $table == "delivers_to")
               {
                    ?> 
                    <table class="table table-striped">
                        <thead>
                            <tr><th>employee_id</th><th>b_id</th></tr>
                        </thead>
                    <?php
                    while($result = mysqli_fetch_array($queryfire))
                    {
                    $employee_id = $result['employee_id'];
                    $b_id = $result['b_id'];
                    ?>
                    <tr>
                        <td><?php echo $employee_id ?></td>
                        <td><?php echo $b_id ?></td>
                        </tr>                   
                    <?php 
                    }
                    ?> </table> <?php

               }
               else if( $table == "delivery_boy_contact_info")
               {
                    ?> 
                    <table class="table table-striped">
                        <thead>
                            <tr><th>employee_id</th><th>mobile_no</th></tr>
                        </thead>
                    <?php
                    while($result = mysqli_fetch_array($queryfire))
                    {
                    $employee_id = $result['employee_id'];
                    $mobile_no = $result['mobile_no'];
                    ?>
                    <tr>
                        <td><?php echo $employee_id ?></td>
                        <td><?php echo $mobile_no ?></td>
                        </tr>                   
                    <?php 
                    }
                    ?> </table> <?php

               }
               else if( $table == "hub")
               {
                ?> 
                <table class="table table-striped">
                    <thead>
                        <tr><th>name</th><th>address</th><th>pincode</th></tr>
                    </thead>
                <?php
                while($result = mysqli_fetch_array($queryfire))
                {
                $name = $result['name'];
                $address = $result['address'];
                $pincode = $result['pincode'];
                ?>
                <tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $address ?></td>
                    <td><?php echo $pincode ?></td>
                    </tr>                   
                <?php 
                }
                ?> </table> <?php

               }
               else if( $table == "order_table")
               {
                ?> 
                <table class="table table-striped">
                    <thead>
                        <tr><th>o_id</th><th>buyer_id</th><th>origin_address</th><th>stetus</th><th>location</th></tr>
                    </thead>
                <?php
                while($result = mysqli_fetch_array($queryfire))
                {
                $o_id = $result['o_id'];
                $buyer_id = $result['buyer_id'];
                $origin_address = $result['origin_address'];
                $stetus = $result['stetus'];
                $location = $result['location'];
                ?>
                <tr>
                    <td><?php echo $o_id ?></td>
                    <td><?php echo $buyer_id ?></td>
                    <td><?php echo $origin_address ?></td>
                    <td><?php echo $stetus ?></td>
                    <td><?php echo $location ?></td>
                    </tr>                   
                <?php 
                }
                ?> </table> <?php

               }
               else if( $table == "order_from")
               {
                ?> 
                <table class="table table-striped">
                    <thead>
                        <tr><th>b_id</th><th>company</th></tr>
                    </thead>
                <?php
                while($result = mysqli_fetch_array($queryfire))
                {
                $b_id = $result['b_id'];
                $company = $result['company'];
                ?>
                <tr>
                    <td><?php echo $b_id ?></td>
                    <td><?php echo $company ?></td>
                    </tr>                   
                <?php 
                }
                ?> </table> <?php

               }
               else if( $table == "products_in_order")
               {
                ?> 
                <table class="table table-striped">
                    <thead>
                        <tr><th>p_id</th><th>o_id</th><th>quantity</th><th>cost</th><th>p_type</th></tr>
                    </thead>
                <?php
                while($result = mysqli_fetch_array($queryfire))
                {
                $p_id = $result['p_id'];
                $o_id = $result['o_id'];
                $quantity = $result['quantity'];
                $cost = $result['cost'];
                $p_type = $result['p_type'];
                ?>
                <tr>
                    <td><?php echo $p_id ?></td>
                    <td><?php echo $o_id ?></td>
                    <td><?php echo $quantity ?></td>
                    <td><?php echo $cost ?></td>
                    <td><?php echo $p_type ?></td>
                    </tr>                   
                <?php 
                }
                ?> </table> <?php
               }
               else if( $table == "warehouse")
               {
                ?> 
                <table class="table table-striped">
                    <thead>
                        <tr><th>name</th><th>address</th></tr>
                    </thead>
                <?php
                while($result = mysqli_fetch_array($queryfire))
                {
                $name = $result['name'];
                $address = $result['address'];
                ?>
                <tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $address ?></td>
                    </tr>                   
                <?php 
                }
                ?> </table> <?php
               }

               else if( $table == "warehouse_suppli_to_hub")
               {
                ?> 
                <table class="table table-striped">
                    <thead>
                        <tr><th>warehouse address</th><th>hub address</th></tr>
                    </thead>
                <?php
                while($result = mysqli_fetch_array($queryfire))
                {
                $w_address  = $result['w_address'];
                $h_address = $result['h_address'];
                ?>
                <tr>
                    <td><?php echo $w_address  ?></td>
                    <td><?php echo $h_address ?></td>
                    </tr>                   
                <?php 
                }
                ?> </table> <?php
               }
           
        }
        else 
        {
            echo "<script>alert('write a correct query') </script>";
            echo "<script>window.open('index.php','_self') </script>";
        }

    // } else{
    //     echo "<script>alert('this is not a selection query') </script>";
    //     echo "<script>window.open('index.php','_self') </script>";
    // }
}
else if($type ==2)
{
    include_once('./db.php');
    $query = $_POST['other_query'];
    if($queryfire = mysqli_query($con , $query))
    {
        echo "<script>alert('Query is exicuted') </script>";
        echo "<script>window.open('index.php','_self') </script>";
    }
    else 
    {
        echo "<script>alert('write a right query') </script>";
        echo "<script>window.open('index.php','_self') </script>";
    }
}

?>

    <footer class="bg-dark text-white">
        <div class="container pt-2  mb-3"><h5>© Copyright 2020 | ABV IIITM Gwalior, 2019BCS, DBS Project, group no= 7 | All Rights Reserved.   </h5></div>
    </footer>
</body>
</html>

