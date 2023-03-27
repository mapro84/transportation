<?php

use src\Core\Utils\Debug;

$stack = $entities['travel'] ?? null;
$messages = $entities['messages'] ?? null;
?>

<div class="container px-4 py-5" id="featured-3">
    <?php if (!empty($messages['info'])) { ?>
        <div class="alert alert-success" role="alert">
            <?php
            echo $messages['info'];
            ?>
        </div>
    <?php } elseif (!empty($messages['error'])) { ?>
        <div class="alert alert-danger" role="alert">
            <?php
            echo $messages['error'];
            ?>
        </div>
    <?php } ?>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-12">
            <h4>Here is your journey</h4>
            <?php
            foreach ($stack as $card) {
                echo '<div class="col">';
                echo '<span class="text-row" >';
                echo '<span class="subtitle">' . $card . '</span>';
                echo '</span>';
                echo '</div>';
            }
            ?>
        </div>
</div>
