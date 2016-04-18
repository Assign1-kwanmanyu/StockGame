<div id="stocks-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-8" style = "margin-right: 15px;">

                <div class="row">
                    <div class="col-lg-12">
                        <h2><span class = "font-weight-700">Gameplay</span></h2>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Game Summary</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Round</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th>{round}</th>
                                            <th>{desc}</th>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h2>Current Stocks</h2>

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


                <div class="row">
                    <div class="col-lg-3">
                        <h2>Select an Active stock to purchase -></h2>
                    </div>
                    <div class="col-lg-9">
                        <div class="dropdown" style = "margin-top: 10px;    ">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Purchase Active Stocks
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                {actStocks}
                                <li><a href="/Stock{code}">{code}</a></li>
                                {/actStocks}
                            </ul>
                        </div>
                    </div>
                </div>
                </br>
                <div class="row">
                    <div class="col-lg-3">
                        <h2>Select an Active stock to Sell -></h2>
                    </div>
                    <div class="col-lg-9">
                        <div class="dropdown" style = "margin-top: 10px;    ">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Sell Active Stocks
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                {actStocks}
                                <li><a href="/Stocksell{code}">{code}</a></li>
                                {/actStocks}
                            </ul>
                        </div>
                    </div>
                </div>

                <div>
                    <h2>Your Money</h2>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="panel background-picture">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="huge">Current Cash</div>
                                    </div>
                                    <div class="col-xs-7 text-right">
                                        <div class="huge text-green">${Cash}.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="panel background-picture">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="huge">Current Equity</div>
                                    </div>
                                    <div class="col-xs-7 text-right">
                                        <div class="huge text-green">${Equity}.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


