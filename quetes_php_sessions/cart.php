<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <table>
            <thead>
                <tr>
                    <th>ID du produit</th>
                    <th>Quantité</th>
            </thead>
                </tr>
<?php
foreach($_SESSION['cart'] as $product => $quantity){
    echo'<tbody>';
    echo'<tr>';
    echo'<th>'. $product.'</th>';
    echo'<th>'.$quantity.'</th>';
    echo'</tr>';
    echo'</tbody>';

    
}
?>
</table>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
