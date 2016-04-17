<div id="page-wrapper">

    <div class="container-fluid">

        <div>
            <h2>Active Stocks</h2>

            <a href="/stocks/register">Register!</a>

            <?php $counter = 0; ?>
            <div class = "row div-stock-dash-wrapper padding-top-5">
                <?php for ($row = 1; $row < count($currentStocks); $row ++){?>

                    <?php
                    //generate a new row if the counter reaches 4
                    if($counter==4){
                        echo '</div>';
                        echo '<div class = "row div-stock-dash-wrapper padding-top-5">';
                        $counter = 0;
                    }
                    ?>

                    <div class = "col-md-3 norm">
                        <a href="/stockhistory/<?php echo $currentStocks[$row]['code']; ?>">
                            <div class= "row <?php
                            if ($currentStocks[$row]['category'] == 'A') { echo 'stock-up'; }
                            else if ($currentStocks[$row]['category'] == 'B') { echo 'stock-up-2'; }
                            else if ($currentStocks[$row]['category'] == 'C') { echo 'stock-down'; }?>">
                                <div class = "col-md-12">
                                    <h2><?php echo $currentStocks[$row]['code'] ?></h2>
                                    <span class = "span-stock-dash-subtitle"><?php echo $currentStocks[$row]['name'] ?></span>
                                    <div class= "row">
                                        <div class = "col-md-6">
                                            <h1><?php echo $currentStocks[$row]['value'] ?></h1>
                                        </div>
                                        <div class = "col-md-6 text-right">
                                            <span><?php echo $currentStocks[$row]['category'] ?></span>
                                            <span><?php echo $currentStocks[$row]['value'] ?></span>
                                        </div>
                                    </div>
                                    <?php $counter++; ?>
                                </div>
                            </div>
                        </a>
                    </div>

                    <?php
                } ?>
            </div>
        </div>


    </div>

</div>