<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h2>Stock <span class = "font-weight-700">History</span> |
                    {stock}
                        <span>{Code}</span></h2>
                    {/stock}
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="huge">132   Units</div>
                            </div>
                            <div class="col-xs-7 text-right">
                                <div class="huge">$<?php "test1" ?>.00</div>
                            </div>
                        </div>
                    </div>
                    <a href="/Main/buyStocks">
                        <div class="panel-footer">
                            <span class="pull-left">Purchase Stocks</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="huge">5 Units</div>
                            </div>
                            <div class="col-xs-8 text-right">
                                <div class ="huge">$<?php echo "test2" ?>.00</div>
                            </div>
                        </div>
                    </div>
                    <a href="/Main/sellStocks">
                        <div class="panel-footer">
                            <span class="pull-left">Sell Stocks</span>
                            <span class="pull-right"><i class="fa fa-undo"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> History Chart</h3>
                    </div>
                    <div class="panel-body">
                        <div id="morris-line-chart"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Stock Movements</h3>
                    </div>
                    <div class="panel-body">
                        <div class="list-group">
                            <?php for ($row = 0; $row < count($movement); $row++){ ?>
                            <a href="#" class="list-group-item">
                                <span class="badge"><?php echo $movement[$row]['amount']; ?>
                                                               <?php
                                                               $upLabel = "<i class=\"fa fa-level-up\">";
                                                               $divLabel = "<i class=\"fa fa-arrows-h\">";
                                                               $downLabel = "<i class=\"fa fa-level-down\">";

                                                               if($movement[$row]['action'] == "up")
                                                               {
                                                                   echo $upLabel; }
                                                               if($movement[$row]['action'] == "down")
                                                               {
                                                                   echo $divLabel; }
                                                               if($movement[$row]['action'] == "div")
                                                               {
                                                                   echo  $downLabel; }
                                                               ?> </i></span>
                                <?php echo $movement[$row]['datetime']; ?>
                            </a>
                            <?php } ?>
                        </div>
                        <div class="text-right">
                            <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Stock Transaction</h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Date - Time</th>
                                    <th>Player</th>
                                    <th>Stock</th>
                                    <th>Trans</th>
                                    <th>Quantity</th>
                                </tr>
                                </thead>
                                <tbody>
                                {stock}
                                <tr>
                                    <td>{DateTime}</td>
                                    <td>{Player}</td>
                                    <td>{DateTime}</td>
                                    <td>{Trans}</td>
                                    <td>{Quantity}</td>
                                </tr>
                                {/stock}
                                </tbody>
                            </table>
                        </div>
                        <div class="text-right">
                            <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>