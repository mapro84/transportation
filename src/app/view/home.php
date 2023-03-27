<?php

use src\Core\Utils\Debug;

$transportations = $entities['transportations'] ?? null;
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
        <h4>Unordered list of boarding cards</h4>
        <?php
        $boardingCardsList = '';
        $arraySize = count($transportations);
        $i=0;
        foreach ($transportations as $transportation) {
            $i++;
            echo '<div class="col">';
            echo '<span class="text-row" >';
            echo '<span class="subtitle">' . $transportation . '</span>';
            echo '</span>';
            echo '</div>';
            $boardingCardsList .= $transportation;
            if($i<$arraySize) $boardingCardsList .= ';';
        }
        echo '<div class="col-lg-3 mx-left"></div>';
        echo '<div class="col-lg-3 mx-left">
              <form method="post" action="index.php?page=travel">
                  <input type="hidden" name="data" id="data" value=\''. $boardingCardsList .'\' >
                  <button type="submit" id="travel" class="btn-success btn text-white">
                    Get your travel
                  </button>
              </form>
          </div>';
        ?>
    </div>
</div>
