<div id="page-wrapper">
     <div class="container-fluid">
             <div class="row">
                 <h1 class="page-header">REPORTS</h1>
                 <h3 class ="bg-success"><?php display_message(); ?></h3>
                 <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Product Id</th>
                        <th>Order Id</th>
                        <th>Price</th>
                        <th>Product Title</th>
                        <th>Product Quantity</th>
                        <th>Date</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php get_reports(); ?>
                </tbody>
                 </table>
            </div>
     </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->