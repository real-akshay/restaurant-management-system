<?php
include("authentication.php");
include("config/dbcon.php");
include("includes/header.php");
include("includes/topbar.php");
include("includes/sidebar.php"); ?>



<div class="content-wrapper">

    <section>
        <div class="content mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php include('message.php') ?>
                        <div class="card">
                            <div class="card-header">
                                <h4>
                                    Items
                                    <a href="product-add.php" class="btn btn-primary float-right">Add</a>
                                </h4>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>price</th>
                                            <th>Status</th>
                                            <th>Created_at</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            <th>Add to Cart</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Fetching product data from database
                                        // this query is for hard delete
                                        // $query = "SELECT * FROM products";
                                        // this query is for soft delete
                                        $query = "SELECT * FROM products WHERE is_deleted='0'";
                                        $query_run = mysqli_query($con, $query);
                                        if (mysqli_num_rows($query_run) > 0) {
                                            foreach ($query_run as $prodct_item) {
                                                ?>
                                                <tr>
                                                    <td><?= $prodct_item['id'] ?></td>
                                                    <td><?= $prodct_item['name'] ?></td>
                                                    <td>
                                                        <img src="uploads/product/<?= $prodct_item['image'] ?>" alt="item image"
                                                            width="50px" height="50px" class="img-thumbnail">
                                                    </td>
                                                    <td><?= $prodct_item['price'] ?></td>
                                                    <td>
                                                        <input type="checkbox" <?= $prodct_item['status'] == '1' ? 'checked' : '' ?> readonly>
                                                    </td>
                                                    <td><?= $prodct_item['created_at'] ?></td>
                                                    <td>
                                                        <a href="product-edit.php?prod_id=<?= $prodct_item['id'] ?>"
                                                            class="btn"><img src="assets/dist/img/edit.png" alt="cart-image" height="25px" width="25px"></a>
                                                    </td>
                                                    <td>
                                                        <!-- <a href="#" class="btn btn-danger">Delete</a> -->
                                                        <form action="code.php" method="POST">
                                                            <input type="hidden" name="delete_item_id"
                                                                value="<?= $prodct_item['id'] ?>">
                                                            <button type="submit" class="btn"><img src="assets/dist/img/delete.png" alt="cart-image" height="25px" width="25px"></button>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <a href="add-to-cart.php?cart_id=<?= $prodct_item['id'] ?>"
                                                            class="btn" color="white"><img src="assets/dist/img/shopping-cart.png" alt="cart-image" height="25px" width="25px"></a>
                                                        </form>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td colspan="6">
                                                    No Record Found
                                                </td>
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
        </div>
    </section>

</div>
<?php
include("includes/script.php");
include("includes/footer.php");
?>