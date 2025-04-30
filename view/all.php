<?php 

$items = $_SESSION["items"] ?? [];
$total_pages = $_SESSION["total_pages"] ?? 1;
$page = $_GET['page'] ?? 1 ;


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
    <?php if (empty($items)) :?>
        <center>  No Items found </center>
    <?php else :?>
    <!-- Add this right after the opening <body> tag -->

    <h1 class="bg-dark mx-auto my-4 py-2 rounded-2 text-center text-primary w-25">All Glasses</h1>
    <div class="container my-4">
        <form method="GET" action="index.php" class="row g-3">
            <div class="col-md-8">
                <input type="text" name="search" class="form-control" placeholder="Search glasses by name..." value="<?= htmlspecialchars($_SESSION['search_term'] ?? ($_GET['search'] ?? '')) ?>">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary w-100">Search</button>
            </div>
            <div class="col-md-2">
                <a href="index.php" class="btn btn-outline-secondary w-100">Reset</a>
            </div>
        </form>
    </div>
    <table class="table table-striped">
        <thead >
            <tr >
                <th class="bg-dark text-white" scope="col">Image</th>
                <th class="bg-dark text-white" scope="col">Name</th>
                <th class="bg-dark text-white" scope="col">Details</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($items as $item): ?>
            <tr>
                <td><img src="./images/<?=$item->Photo?>" width="150"></td>
                <td class="fs-3"><?=$item->product_name ?></td>
                <td><a class="btn btn-outline-dark" href="?id=<?=$item->id?>">View Details</a></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>

    <nav aria-label="Page navigation example">
        <ul class="pagination">

            <li class="page-item <?= ($page <= 1) ? 'disabled' : '' ?> ">
                <a class="page-link" href="?page=<?= $page - 1 ?><?= isset($_SESSION['search_term']) ? '&search=' . urlencode($_SESSION['search_term']) : '' ?>">
                Previous
                </a>
            </li>

            <?php for ($i=1; $i <= $total_pages; $i++) : ?>
                <li class="page-item <?= ($i == $page) ? 'active' : '' ?>">
                    <a class="page-link" href="?page=<?= $i ?><?= isset($_SESSION['search_term']) ? '&search=' . urlencode($_SESSION['search_term']) : '' ?>">
                        <?=$i?>
                    </a>
                </li>
            <?php endfor;?>
            <li class="page-item <?= ($page >= $total_pages) ? 'disabled' : '' ?>">
                <a class="page-link" href="?page=<?= $page + 1 ?><?= isset($_SESSION['search_term']) ? '&search=' . urlencode($_SESSION['search_term']) : '' ?>">
                    Next
                </a>
            </li>
        </ul>
    </nav>
    <?php endif;?>

</body>
</html>