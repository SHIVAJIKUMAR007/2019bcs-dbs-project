<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once('./bootstrap.php'); ?>
    <title>DBS Project</title>
</head>
<body>
    
    <h1 class="text-center pt-3">DBS Project</h1>
    <h3 class="text-center ">( Database for E-commerse order delivery managment system )</h3><hr class="mx-auto w-50" ><br>
   
    <!-- some predefine query  -->
    <h3 class="text-center text-capitalize pt-3 pb-1">some predefine query</h3><hr class="mx-auto w-25" ><br>
<div class="container-fluid">
    <div class="row">
        <!-- track order by oid -->
       <div class="col-lg-6 col-md-6 col-12" style="border-right: 1px solid black;">
            <form action="query.php?type=trackorder" method="post" class=" w-75 form-group  mx-auto">
                 <h4>Track your order</h4><br>
                 <label>Order ID :</label>
                 <input type="number" name="oid" min="1" class=" form-control" required><br>
                 <button type="submit" class="btn btn-info">Track My Order</button>
            </form>
       </div>

       <div class="col-lg-6 col-md-6 col-12">
            <form action="query.php?type=cus_info" method="post" class=" w-75 form-group mx-auto">
                <h4>Customer info</h4><br>
                <label>Buyer ID : </label>
                <input type="number" name="bid" min="1" class=" form-control" required><br>
                <button type="submit" class="btn btn-info">Get customer info</button>
            </form>
       </div>

    </div> 
    <br><br>
    <div class="row">
       <div class="col-lg-6 col-md-6 col-12" style="border-right: 1px solid black;">
            <form action="query.php?type=history" method="post" class=" w-75 form-group mx-auto">
                <h4>Order History of a customer</h4><br>
                <label>Buyer ID : </label>
                <input type="number" name="bid" min="1" class=" form-control" required><br>
                <button type="submit" class="btn btn-info">Get order history</button>
            </form>
       </div>
       <div class="col-lg-6 col-md-6 col-12">
           <form action="query.php?type=warehouselist" method="post" class=" w-75 form-group mx-auto">
                <h4>Company warehouse list</h4><br>
                <label>Company name : </label>
                <input type="text" name="company" class=" form-control" required><br>
                <button type="submit" class="btn btn-info">Get company warehouse list</button>
           </form>
       </div>
    </div>
    <br><br>
</div>
   
    <!--some custom Query command form  -->
    <h3 class="text-center pt-3 pb-1">Custom Query</h3><hr class="mx-auto w-25" ><br>
    <div class=" container-fluid row pb-5">

        <div class="col-lg-6 col-md-6 col-12" style="border-right: 1px solid black;">
             <!-- selection query  -->
            <h4>For selection type query</h4><br>
        <form action="describe.php?no=1" method="post">
        <div class="form-group">
        <label>select table :</label>
        <input type="text" list="table" class="form-control" placeholder="select table" name="table" required>
        <datalist id="table">
            <option value="buyer">
            <option value="buyer_contact_info">
            <option value="company">
            <option value="delivaery_boy">
            <option value="delivers_to">
            <option value="delivery_boy_contact_info">
            <option value="hub">
            <option value="order_table">
            <option value="order_from"> 
            <option value="products_in_order">
            <option value="warehouse">
            <option value="warehouse_suppli_to_hub">
        </datalist>    
        <br>
        <label>Selection query : </label>
        <input type="text" name="select_query" class="form-control" placeholder="write a selection query" autocomplete="off" required>
        </div>
        <button type="submit" class="btn btn-info">Show Result</button> 
        </form>
        </div>
        <br><hr><br>
        <div  class="col-lg-6 col-md-6 col-12">
        <!-- update insert or delete query  -->
        <h4>For Updation, Deletion or Insertion query</h4><br>
        <form action="describe.php?no=2" method="post">
        <div class="form-group">
            <label>Updation, Deletion or Insertion query : </label>
            <input type="text" name="other_query" class="form-control" placeholder="write a Updation, Deletion or Insertion query " autocomplete="off" required>
        </div>
        <button type="submit" class="btn btn-info">Apply Query</button> 
        </form>
        </div>
    </div>
    <footer class="bg-dark text-white">
        <div class="container pt-2  mb-3"><h5>© Copyright 2020 | ABV IIITM Gwalior, 2019BCS, DBS Project, group no= 7 | All Rights Reserved. </h5></div>
    </footer>
</body>
</html>