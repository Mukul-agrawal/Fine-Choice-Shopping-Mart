<?php add_category(); ?>
<div id="page-wrapper">
    <div class="container-fluid">
        <h1 class="page-header">Product Categories</h1>
        <div class="col-md-4">
            <h3 class="bg-success"><?php display_message(); ?></h3>
            <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="category-title">Title</label>
                <input name="cat_title" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="category-title">Category Image</label>
                <input type="file" name="file">
            </div>
            <div class="form-group"> 
                <input name="add_category" type="submit" class="btn btn-primary" value="Add Category">
            </div>      
            </form>
        </div>
        <div class="col-md-8">
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Title</th>
                    </tr>
                </thead>
                <tbody>
                <?php show_categories_in_admin();?>
                </tbody>
            </table>
        </div>
    </div>
            <!-- /.container-fluid -->
</div>
        <!-- /#page-wrapper -->
    <!-- /#wrapper -->
