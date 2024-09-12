<link rel="stylesheet" href="assets/css/seats.css">

<div class="seat-column">
    <?php
    $rowAmount = 10;
    $columnAmount = 10;
    
    for ($column = 0; $column <= $columnAmount; $column++) {
        ?>

        <div class="seat-row">
            <?php
            for ($row = 0; $row <= $rowAmount; $row++) {
                $data = "[" . $column . ", ". $row . "]"; 
                ?> 

                <button class="seat-btn" type="button" id="<?=$data?>" onclick="onSeatClick(this)">
                    <img src="assets/images/icons/rood_stoel.png" alt="" class="seat-img">
                </button>
                
                <?php
            }
            ?>
        </div>

        <?php
    }
    ?>
</div>