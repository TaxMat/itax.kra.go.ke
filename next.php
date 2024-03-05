<?php
    include "connection.php";

    $rowperpage = 5;
    $row = 0;

        // Previous Button
    if(isset($_POST['but_prev'])){
        $row = $_POST['row'];
        $row -= $rowperpage;
        if( $row < 0 ){
            $row = 0;
        }
    }

        // Next Button
    if(isset($_POST['but_next'])){
        $row = $_POST['row'];
        $allcount = $_POST['allcount'];

        $val = $row + $rowperpage;
        if( $val < $allcount ){
            $row = $val;
        }
    }
?>

<!doctype html>
<html>
<head>
    <title>PHP MySQL Pagination Next Previous Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">PHP MySQL Pagination Next Previous Example - Mywebtuts.com</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped text-center table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>City</th>
                    </tr>
                        <?php

                            $sql = "SELECT COUNT(*) AS cntrows FROM customers";
                            $result = mysqli_query($conn,$sql);
                            
                            $fetchresult = mysqli_fetch_array($result);
                            $allcount = $fetchresult['cntrows'];
                            $sql = "SELECT * FROM customers  ORDER BY ID ASC limit $row,".$rowperpage;
                            $result = mysqli_query($conn,$sql);
                            $sno = $row + 1;
                            
                            while($fetch = mysqli_fetch_array($result)){
                                $name = $fetch['name'];
                                $salary = $fetch['city'];
                                $age = $fetch['age'];
                        ?>
                    <tr>
                        <td><?php echo $sno; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $age; ?></td>
                        <td><?php echo $salary; ?></td>
                    </tr>
                        
                        <?php
                            $sno ++;
                            }
                        ?>
                    
                </table>
                    
                <form method="post" action="">
                    <div class="d-flex justify-content-center">
                        <input type="hidden" name="row" value="<?php echo $row; ?>">
                        <input type="hidden" name="allcount" value="<?php echo $allcount; ?>">
                        <input type="submit" class="btn btn-primary mx-2" name="but_prev" value="<< Previous">
                        <input type="submit" class="btn btn-primary mx-2" name="but_next" value="Next >>">
                    </div>
                </form>        
            </div>
        </div>
    </div>
</body>
</html>
