<?php require_once("../../resources/config.php");?>

<?php include(TEMPLATE_BACK ."/header.php") ;?>


        <div id="page-wrapper">

            <div class="container-fluid">



                    <div class="col-lg-12">
                      

                        <h1 class="page-header">
                            Users
                         
                        </h1>
                          <p class="bg-success">
                            <?php //echo $message; ?>
                        </p>

                        <a href="index.php?add_user" class="btn btn-primary">Add User</a>


                        <div class="col-md-12">

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php display_users(); ?>

                                    <tr>

                                        <td>2</td>
                                        <td><img class="admin-user-thumbnail user_image" src="placehold.it/62x62" alt=""></td>
                                        
                                        <td>Rico
                                              <div class="action_links">

                                                <a href="">Delete</a>
                                                <a href="">Edit</a>
                    
                                                
                                            </div>
                                        </td>
                                        
                                        
                                        <td>Edwin</td>
                                       <td>Diaz</td>
                                    </tr>


                                <?php // endforeach; ?>


                                                            
                                </tbody>
                            </table> <!--End of Table-->
                        

                        </div>
     
                    </div>
