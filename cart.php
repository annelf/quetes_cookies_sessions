<?php
session_start();
if (!isset($_SESSION['loginname'])) {
    header('Location: login.php');
    exit();
}
?>
<?php require 'inc/head.php'; ?>
    <body>
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Product</th>
                <th scope="col">Quantity</th>
            </tr>
            </thead>
            <?php foreach ($_COOKIE['cookie'] as $product => $quantity): ; ?>
                <tbody>
                <tr>
                    <td><h3 class="cookie_name"><?= ucfirst($product) ?></h3></td>
                    <td><img src="assets/img/<?= $product ?>.jpg" class="img-responsive" style="height: 100px;">
                    </td>
                    <td><?= $quantity ?></td>
                </tr>
                </tbody>
            <?php endforeach; ?>
        </table>
    </div>
    </body>
<?php require 'inc/foot.php'; ?>