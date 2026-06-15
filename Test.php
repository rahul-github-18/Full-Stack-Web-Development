<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>ERP Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f4f6f9;
    font-family:Arial, sans-serif;
}

.page-title{
    color:#2c5d87;
    font-weight:600;
    margin-bottom:25px;
}

.module-card{
    background:#ffffff;
    border:1px solid #dcdcdc;
    border-radius:4px;
    text-align:center;
    padding:25px 15px;
    transition:0.3s;
    cursor:pointer;
    font-size:18px;
    font-weight:600;
    color:#333;
}

.module-card:hover{
    background:#2c5d87;
    color:#fff;
    border-color:#2c5d87;
    transform:translateY(-2px);
}

.module-link{
    text-decoration:none;
}

</style>

</head>
<body>

<div class="container mt-4">

    <h3 class="page-title">Dashboard</h3>

    <div class="row g-4">

        <?php

        $modules = [
            "General Setting"   => "general_setting.php",
            "Academics"         => "academics.php",
            "Student Information" => "student_information.php",
            "Fees Collection"   => "fees_collection.php",
            "Reports"           => "reports.php",
            "Audit Reports"     => "audit_reports.php",
            "Certificate"       => "certificate.php",
            "Bulk Updation"     => "bulk_updation.php"
        ];

        foreach($modules as $title => $link){
        ?>

        <div class="col-lg-3 col-md-4 col-sm-6">

            <a href="<?php echo $link; ?>" class="module-link">

                <div class="module-card">
                    <?php echo $title; ?>
                </div>

            </a>

        </div>

        <?php } ?>

    </div>

</div>

</body>
</html>
