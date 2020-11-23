



        <div id="page-wrapper" >

<div class="container-fluid" >



        <div class="col-lg-12" >
          

            <h1 class="page-header">
                Users
             
            </h1>
              <p class="bg-success">
                
            </p>

            <a href="index.php?add_user" class="btn btn-primary">Add User</a>

            <h3><?php display_message(); ?></h3>


            <div class="col-md-12">

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>

                    

                        <?php display_users(); ?>


                    


                        
                        
                    </tbody>
                </table> <!--End of Table-->
            

            </div>










            
        </div>













</div>
<!-- /.container-fluid --><br><br><br><br><br><br>

</div>
<!-- /#page-wrapper -->
<!-- /#wrapper -->

