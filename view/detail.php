<?php 
use Illuminate\Database\Capsule\Manager as DB;
// $item = $_SESSION["item"] ?? "";
$id = $_GET["id"] ?? 0;
$item = DB::table('items')->where('id', $id)->first();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="flex-container">
    <?php if ($item):?>
    <h2 class="text-center my-4" ><?= $item->product_name?></h2>
    <div class="text-center">
        <img src="./images/<?= $item->Photo ?>" width="300" >
    </div>
        <table class="table table-primary  table-striped-columns">
        <thead>
            <tr>
                <th scope="col">category</th>
                <th scope="col">Name</th>
                <th scope="col">price</th>
                <th scope="col">Stock</th>
                <th scope="col">country</th>
                <th scope="col">Rating</th>
                <th scope="col">Product Code</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$item->category ?></td>
                <td><?=$item->product_name ?></td>
                <td><?=$item->list_price ?></td>
                <td><?=$item->Units_In_Stock ?></td>
                <td><?=$item->CouNtry ?></td>
                <td><?=$item->Rating ?></td>
                <td><?=$item->PRODUCT_code ?></td>
            </tr>
        </tbody>
    </table>
    <?php else: ?>
        <p>Item Not Found</p>
    <?php endif; ?>
    </div>

</body>
</html>