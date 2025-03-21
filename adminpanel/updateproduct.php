<?php
include("php/query.php");
include("components/header.php");
?>

<?php
if(isset($_GET['productId'])){
    $pId = $_GET['productId'];
    $query = $pdo->prepare("SELECT * FROM products WHERE id = :prodId");
    $query->bindParam('prodId', $pId);
    $query->execute();
    $product = $query->fetch(PDO::FETCH_ASSOC);
    // print_r($product);
}
?>

<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-light rounded p-5 justify-content-center mx-0">
        <div class="col-sm-12 col-xl-10">
            <div class="bg-light rounded h-100 p-4">
                <h2 class="mb-4">Edit Product</h2>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-floating mb-3">
                        <input value="<?php echo $product['name']?>" name="pName" type="text" class="form-control" id="floatingInput"
                            placeholder="Enter Product Name">
                        <label for="floatingInput">Product Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input value="<?php echo $product['price']?>" name="pPrice" type="number" class="form-control" id="floatingPrice"
                            placeholder="Enter Product Price">
                        <label for="floatingPrice">Product Price</label>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Product Image</label>
                        <input name="pImage" class="form-control" type="file" id="formFile">
                        <img height="100px" src="images/<?php echo $product['image']?>" alt="">
                    </div>
                    <div class="form-floating">
                        <textarea name="pDes" class="form-control" placeholder="Product Description"
                            id="floatingTextarea" style="height: 150px;"><?php echo $product['description']?></textarea>
                        <label for="floatingTextarea">Product Description</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input value="<?php echo $product['stock']?>" name="pStock" type="number" class="form-control" id="floatingStock"
                            placeholder="Enter Stock Quantity">
                        <label for="floatingStock">Stock Quantity</label>
                    </div>
                    <button name="updateProduct" class="btn btn-primary m-2">Update Product</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Blank End -->




<?php
include("components/footer.php");
?>
