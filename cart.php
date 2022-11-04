<?php

require 'inc/head.php';
require 'inc/data/products.php';

?>

<section class="cookies container-fluid">
    <div class="row">
        <ul>
            <?php
            session_start();
            foreach ($_SESSION['panier'] as $cookie)
                echo  '<li>' . $catalog[$cookie]['name'] . '</li>';
            ?>
        </ul>
    </div>
</section>
<?php require 'inc/foot.php'; ?>