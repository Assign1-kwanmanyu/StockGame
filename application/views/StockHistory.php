<?php
//    // Grabs the selected stock from the dashboard
//    if(empty($_GET['selectedStock'])){
//        $selectedStock = $SelectedStockTransactions[0]['Stock'];
//        print_r("if");
//    } else {
//        $selectedStock = $_GET['selectedStock'];
//        print_r("else");
//    }
//    print_r($selectedStock);
//
//?>


<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h2>Stock <span class = "font-weight-700">History</span> |
                    <span>Gold</span></h2>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="huge">132 Units</div>
                            </div>
                            <div class="col-xs-7 text-right">
                                <div class="medium">@ $392.12</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
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
                                <div class ="huge">@ $392.12</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">Sell Stocks</span>
                            <span class="pull-right"><i class="fa fa-undo"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> History Chart</h3>
                    </div>
                    <div class="panel-body">
                        <div id="morris-area-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Stock Movements</h3>
                    </div>
                    <div class="panel-body">
                        <div class="list-group">
                            <a href="#" class="list-group-item">
                                <span class="badge">1234 <i class="fa fa-level-up"></i></span>
                                lol
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="badge">1234 <i class="fa fa-level-down"></i></span>
                                i am big lol
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="badge">4141 <i class="fa fa-level-up"></i></span>
                                I am a bigger lol
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="badge">0.01 <i class="fa fa-level-up"></i></span>
                                than the moon moon moon
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="badge">0.04 <i class="fa fa-level-up"></i></span>
                                boom boom boom even brighter
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="badge">0.0123 <i class="fa fa-level-down"></i></span>
                                its a firework
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="badge">444 <i class="fa fa-level-down"></i></span>
                                Saved the world
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="badge">4.1 <i class="fa fa-level-down"></i></span>
                                comn baby
                            </a>
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
                                {SelectedStockTransactions}
                                <tr>
                                    <td>{DateTime}</td>
                                    <td>{Player}</td>
                                    <td>{DateTime}</td>
                                    <td>{Trans}</td>
                                    <td>{Quantity}</td>
                                </tr>
                                {/SelectedStockTransactions}
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
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>