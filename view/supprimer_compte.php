<?php require 'header.php'?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=<?= $page_css ?> rel="stylesheet">
    <title><?= $title ?></title>
</head>

</html>
<?php
if(isset($delete_account))
{
    echo '<div class = delete_account_succes>' . $delete_account . '</div>';
    header('Refresh: 3; URL=index.php');
}
?>

<?php require 'footer.php'?> 