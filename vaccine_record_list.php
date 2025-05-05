<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
error_reporting(0);
include('connection.php');

$child_query = "SELECT * FROM child, parents WHERE child.parentsIC = parents.parentsIC ORDER BY child.childIC DESC";
$child_result = mysqli_query($con,$child_query);

?>
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               <strong>VACCINE RECORD LIST</strong>
                            </h2>
                            <!--<ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>-->
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            
                                            <th>Child Name</th>
                                            <th>Child IC</th>
                                            <th>Parents Name</th>
                                            <th>IC</th>
                                            <th>Phone Number</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    while($child_row = mysqli_fetch_array($child_result)){
                                        $name = $child_row['childName'];
                                        $ic = $child_row['childIC'];
                                        $parentsname = $child_row['parentsName'];
                                        $parentsic = $child_row['parentsIC'];
                                        $parentsphone = $child_row['parentsPhoneNum'];
                                        $parentsemail = $child_row['parentsEmail'];
                                        ?>
                                        <tr>
                                            
                                            <td><?php echo $name ?></td>
                                            <td><?php echo $ic ?></td>
                                            <td><?php echo $parentsname ?></td>
                                            <td><?php echo $parentsic ?></td>
                                            <td><?php echo $parentsphone ?></td>
                                            <td><?php echo $parentsemail ?></td>
                                            <td><a href="?action=vaccine_record_detail&ic=<?php echo $ic ?>&name=<?php echo $name ?>" style='text-decoration: none;'><button type='button' class='btn btn-block btn-primary'>View Detail</button></a></td>
                                           
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->