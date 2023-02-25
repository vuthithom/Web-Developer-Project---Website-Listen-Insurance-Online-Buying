<?php 
        $company_name = $_GET['company-name'] ?? '';
        $company_link = $_GET['company-link'] ?? '';
        $company_belong = $_GET['company-belong'] ?? '';
        $company_id = $_GET['company-id'] ?? '';
        if (strlen($company_name) >= 1){
            $conn->query("UPDATE company SET name='$company_name',image = '$company_link',admin = '$company_belong' WHERE id=$company_id");
            echo '<script>
            window.location = "./admin-control.php?v=1";
            alert("Update Company Information | ID: '.$company_id.'");
          </script>';
        }

        $addcompany_name = $_GET['acompany-name'] ?? '';
        $addcompany_link = $_GET['acompany-link'] ?? '';
        $addcompany_belong = $_GET['acompany-belong'] ?? '';
        if (strlen($addcompany_name) >= 1){
            $conn->query("INSERT INTO company values(null,'$addcompany_name','$addcompany_link','$addcompany_belong')");
            echo '<script>
            window.location = "./admin-control.php?v=1";
            alert("Added new company partner | ID: '.$company_id.'");
            </script>';
        }
        $delcompany = $_GET['delcompany-id'] ?? '';
        if (strlen($delcompany) >= 1){
            $conn->query("DELETE FROM company where id = $delcompany");
            $conn->query("DELETE FROM packet where belong = $delcompany");
            echo '<script>
            window.location = "./admin-control.php?v=1";
            alert("Company & All Following packages Deleted | ID: '.$company_id.'");
          </script>';
        }
    ?>