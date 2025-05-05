<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
//error_reporting(0);
?>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <strong>CHILD GROWTH SUMMARY</strong>
                    
                </h2>
                <div class="body table-responsive">
                    <table class="table table-bordered ">
                        <thead>
                            <tr class="bg-info">
                                <th style="text-align: center">NO</th>
                                <th style="text-align: center">NAME</th>
                                <th style="text-align: center">IC</th>
                                <th style="text-align: center">BIRTH DATE</th>
                                <th style="text-align: center">GENDER</th>
                                <th style="text-align: center">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $session = $_SESSION['User'];
                                $num=1;
                                $sql = "SELECT * FROM child WHERE parentsIC='$session'";
                                $result = mysqli_query($con,$sql);

                                if(mysqli_num_rows($result)>0){
                                //output
                                while( $row = mysqli_fetch_assoc($result)){
                                    $no=0;
                                    $ic = $row['childIC'];
                                    $name = $row['childName'];
                                    $birthdate = $row['childBirthDate'];
                                    $gender = $row['childGender'];
                                    //$weight = $row['childWeight'];
                                    //$height = $row['childHeight'];

                                    /*$bday = new DateTime($birthdate);
                                    $current = new DateTime();
                                    $age = date_diff($current,$bday);*/

                            ?>
                            <tr>
                                <td scope="row" style="text-align: center"><?php echo $num++ ?></th>
                                <td><?php echo $name ?></td>
                                <td style="text-align: center"><?php echo $ic ?></td>
                                <td style="text-align: center"><?php echo $birthdate ?></td>
                                <td style="text-align: center"><?php echo $gender ?></td>
                                <td style="text-align: center"><a href='?action=summary_chart&ic=<?php echo $ic ?>'><button class="btn btn-success btn-extra-small">View Growth</button></a></td>
                            </tr>
                            <?php
                                }
                            }else{
                                echo "0 result";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>