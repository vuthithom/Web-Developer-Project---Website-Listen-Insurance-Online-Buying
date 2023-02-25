    <?php 
        $product_name = $_GET['aproduct-name'] ?? '';
        $product_link = $_GET['aproduct-link'] ?? '';
        $product_price = $_GET['aproduct-price'] ?? '';
        $product_quantity = $_GET['aproduct-quantity'] ?? '';
        $product_vehicle = $_GET['aproduct-vehicle'] ?? '';
        $product_belong = $_GET['aproduct-belong'] ?? '';
        $product_desc = $_GET['aproduct-desc'] ?? '';
        if (strlen($product_name) >= 1){
            $conn->query("INSERT INTO packet values(null,'$product_name',$product_price,$product_quantity,$product_belong,$product_vehicle,'$product_link',
            '$product_desc',0,0,0)");
            echo '<script>
            window.location = "./admin-control.php?v=2";
            alert("Added New Product");
          </script>';
        }
    ?>
    <?php 
        $eproduct_id = $_GET['eproduct-id'] ?? '';
        $eproduct_name = $_GET['eproduct-name'] ?? '';
        $eproduct_link = $_GET['eproduct-link'] ?? '';
        $eproduct_price = $_GET['eproduct-price'] ?? '';
        $eproduct_quantity = $_GET['eproduct-quantity'] ?? '';
        $eproduct_vehicle = $_GET['eproduct-vehicle'] ?? '';
        $eproduct_belong = $_GET['aeroduct-belong'] ?? '';
        $eproduct_desc = $_GET['eproduct-desc'] ?? '';
        if (strlen($eproduct_name) >= 1){
            $conn->query("UPDATE packet SET name= 
            '$eproduct_name',
            price = '$eproduct_price',
            quantity='$eproduct_quantity',
            belong='$eproduct_belong',
            vehicle='$eproduct_vehicle',
            image='$eproduct_link',
            description='$eproduct_desc'
            where id ='$eproduct_id'");
            echo '<script>
            window.location = "./admin-control.php?v=2";
            alert("Update Product | ID: '.$eproduct_id.'");
          </script>';
        }
    ?>
    <?php 
        $dproduct_id = $_GET['dproduct-id'] ?? '';
        if (strlen($dproduct_id) >= 1){
            $conn->query("DELETE FROM packet where id = $dproduct_id");
            echo '<script>
            window.location = "./admin-control.php?v=2";
            alert("Product Deleted | ID: '.$dproduct_id.'");
          </script>';
        }
    ?>