  <?php
   session_start();
   if(!isset($_SESSION["username"])){ 
   header("location: login.php");
   exit();}
    ?>
    <?php
    //database connection
    try{
    $con =new PDO("mysql :host=localhost; dbname=test2022", 'test2022', 'test2022');
    }catch(PDOExection $e){
    echo $e->getMessage();
    }
    //define daterage
    $dateCond = '';
    if (!empty($_GET['from']) && !empty($_GET['to'])){
    $dateCond = "DATE(trn_date) >= '{$_GET['from']}' AND DATE (trn_date) <= '{$_GET['to']}'";
    }
    //define product filter
    $product = '';
    if (!empty($_GET['product'])){
    $product = "product= '{$_GET['poduct']}'";
    }
    //search query
    $sql = "SELECT farm_name as farm_name, salesdate as salesdate, rate as rate, product as product,
    sum(amount) as amount,
    sum(totaltaka) as totaltaka FROM sales WHERE farm_name = '{$_SESSION["username"]}' AND {$dateCond} AND {$product} OR usertype = '{$_SESSION["usertype"]}' AND {$dateCond} AND {$
    product} GROUP BY farm_name, salesdate, rate, product order by product,salesdate asc";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
  ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.datatables.min.css">
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  </head>
  <body>
    <div align="center" class="container mt-5">
      <h5 align="left">Product Sale Summary Report by Sale Date & Product Filter</h5><br>
      <form class="myForm" method="get" enctype="application/x-www-form-urlencoded" action="indext.php">
        <div class="form-row" align="left">
          <div class="form-group col-md-3">
            <label>From Date:</label>
            <input type="date" class="datepicker btn-block" name="from" id="fromDate" placeholder="Select From Date" Value="<?php echo isset($_GET['from']) ? $_GET['from'] : '' ?>">
    </div>
    <div class="form-group col-md-3">
      <label>To Date</label>
      <input type="date" class="datepicker btn-block" name="to" id="toDate" placeholder="Select To Date" Value="<?php echo isset($_GET['to']) ? $_GET['to'] : '' ?>">
    </div>
    <div class="form-group col-md-3">
      <label>Product: </label>
      <select class="custom-select" name="product" required>
        <option value="">--Select Product--</option>
        <option Value="Milk">Milk</option>
        <option Value="Egg">Egg</option>
    </select>
    </div>
    </div>
    <div class="form-row" align="left">
      <div class="form-group col-md-3 offset-md-3">
        <a href="index.php" class="btn btn-warning btn-block"> <i class="fa fa-refresh"></i></a>Reset</span>
    </div>
    <div class="form-group col-md-3">
      <button type="submit" class="btn btn-success btn-block"><i class="fa fa-paper-plane"></i>Submit</button>
    </div>
    </div>
    <form>
      <br>
      <style type="text/scc">
        @media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;margin: auto 0
        px;}}</style>
        <div class="tg-wrap">
          <table id="table" class="display" cellspacing="0" style="width:100%">
          <thead style="font: bold; active" align="center">
          <tr>
            <td>Id</td>
            <td align= center>Farm Name</td>
            <td align= center>Product</td>
            <td align= center>Sales Date</td>
            <td align= center>Rate</td>
            <td align= center>Sales Qty/Ltr</td>
            <td align= center>Total (USD)</td>
        </tr>
        </thead>
        </tbody>
        <?php
        $total = [
          'total'=>0,
          'amount'=>0,
          'totaltaka'=>0,
        ];
        foreach($arr as $index =>unit){
          $total = [
            'amount' =>$total['amount'] + $unit['amount'],
            'totyaltaka' =>$total['totyaltaka'] + $unit['totyaltaka'],
          ];
          echo '<tr>';
          echo '<td align= center>' . ($index + 1) .'</td>';
          echo '<td align= center>' . $unit['farm_name'] .'</td>';
          echo '<td align= center>' . $unit['product'] .'</td>';
          echo '<td align= center>' . $unit['salesdate'] .'</td>';
          echo '<td align= center>' . $unit['rate'] .'</td>';
          echo '<td align= center>' . $unit['amount'] .'</td>';
          echo '<td align= center>' . $unit['totaltaka'] .'</td>';
          echo '</tr>';
        }
        echo '<tr align= center>';
        echo '<th colspan="5" style="text-align: right;">Total</th>';
        ech'<td><b>' . $total['amount'] . '</b></td>';
        ech'<td><b>' . $total['totaltaka'] . '</b></td>';
        echo'</tr>';
        ?>
        </tbody>
        </table>
        </div>

       <br>
       <br><br>
       <script type="text/javascript">
       $(document).ready(function(){
        $('#table').dataTable();
       });
       </script>     
  </body>
</html>
  
