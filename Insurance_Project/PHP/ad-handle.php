<!-- Handle PHP -->
<?php 
        $company_name = $_GET['company-name'] ?? '';
        $company_link = $_GET['company-link'] ?? '';
        $company_id = $_GET['company-id'] ?? '';
        if (strlen($company_name) >= 1){
            $conn->query("UPDATE company SET name='$company_name',image = '$company_link' WHERE id=$company_id");
            header('Location: admin-control.php?v=1');
        }

        $addcompany_name = $_GET['acompany-name'] ?? '';
        $addcompany_link = $_GET['acompany-link'] ?? '';
        if (strlen($addcompany_name) >= 1){
            $conn->query("INSERT INTO company values(null,'$addcompany_name','$addcompany_link')");
            header('Location: admin-control.php?v=1');
        }
        $delcompany = $_GET['delcompany-id'] ?? '';
        if (strlen($delcompany) >= 1){
            $conn->query("DELETE FROM company where id = $delcompany");
            $conn->query("DELETE FROM packet where belong = $delcompany");
            header('Location: admin-control.php?v=1');
        }
    ?>
    <?php 
        $product_name = $_GET['aproduct-name'] ?? '';
        $product_link = $_GET['aproduct-link'] ?? '';
        $product_price = $_GET['aproduct-price'] ?? '';
        $product_quantity = $_GET['aproduct-quantity'] ?? '';
        $product_vehicle = $_GET['aproduct-vehicle'] ?? '';
        $product_belong = $_GET['aproduct-belong'] ?? '';
        if (strlen($product_name) >= 1){
            $conn->query("INSERT INTO packet values(null,'$product_name',$product_price,$product_quantity,$product_belong,$product_vehicle,'$product_link')");
            header('Location: admin-control.php?v=2');
        }
    ?>