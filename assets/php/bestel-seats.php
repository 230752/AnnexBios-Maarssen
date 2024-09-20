<link rel="stylesheet" href="assets/css/seats.css">

<div class="seat-column">
    <?php
    $rowAmount = 11;
    $columnAmount = 11;
    
    for ($column = 0; $column < $columnAmount; $column++) {
        // Check if it's the last row
        $currentRowAmount = ($column == $columnAmount - 1) ? 12 : $rowAmount;
        ?>

        <div class="seat-row">
            <?php
            for ($row = 0; $row < $currentRowAmount; $row++) {
                $data = "[" . ($columnAmount - $column) . ", " . ($currentRowAmount - $row) . "]"; 
                ?> 

                <button class="seat-btn" type="button" id="<?=$data?>" onclick="onSeatClick(this)">
                    <img src="assets/images/icons/rood_stoel.png" alt="" class="seat-img" id="off">
                </button>
                
                <?php
            }
            ?>
        </div>

        <?php
    }
    ?>
</div>