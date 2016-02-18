<?php for ($row = 0; $row < count($stockInfoArray); $row++){ ?>
    <div class = "row div-stock-dash-wrapper padding-top-5">
        <?php for ($col = 0; $col < count($stockInfoArray[$row]); $col++ ){ ?>
            <div class = "col-md-3 norm">
                <div class= "row">
                    <div class = "col-md-12">
                        <h2><?php echo $stockInfoArray[$row][$col]['Code'] ?></h2>
                        <span class = "span-stock-dash-subtitle"><?php echo $stockInfoArray[$row][$col]['Name'] ?></span>
                        <div class= "row">
                            <div class = "col-md-6">
                                <h1><?php echo $stockInfoArray[$row][$col]['Value'] ?></h1>
                            </div>
                            <div class = "col-md-6 text-right">
                                <span><?php echo $stockInfoArray[$row][$col]['Category'] ?></span>
                                <span><?php echo $stockInfoArray[$row][$col]['Value'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
<?php } ?>


