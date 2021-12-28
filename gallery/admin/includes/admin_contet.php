<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard
                            <small>Subheading</small>
                        </h1>
                        <?php
                        //with this we look if the db is working
                        //  if($database->connection){
                        //      echo "true";
                        //  }
                        // $sql = "SELECT * from user WHERE id=1";
                        // $result = $database -> query($sql);
                        // $user_found = mysqli_fetch_array($result);
                        // echo $user_found['username'];

                    
                        // $result_set = User::find_all_users();
                        // while($row = mysqli_fetch_array($result_set)){
                        // echo $row['username']."<br>";
                        // }

                        //this method is used to find the user by its id
                        $found_user = User::find_user_by_id(2);

                         $user = User :: instantation($found_user);

                         echo $user->username;
                        ?>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>