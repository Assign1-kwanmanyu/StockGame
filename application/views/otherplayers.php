
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-3">
                        <h2>Player <span class = "font-weight-700">Profile</span> | </h2>
                    </div>
                    <div class="col-lg-9">
                        <div class="dropdown" style = "margin-top: 10px;    ">
                          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">{nameinfo}
                          <span class="caret"></span></button>
                          <ul class="dropdown-menu">
                          {allInfo}
                          <li><a href="/player{Player}">{Player}</a></li>
<!--                           
                            <li><a href="#">Oscar Kwan</a></li>
                            <li><a href="#">Thomas Yu</a></li>
                            <li><a href="#">Krystle Bulalakaw</a></li> -->
                            {/allInfo}
                          </ul>
                        </div>
                    </div>
                </div>
                <br>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="panel background-picture">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="huge">Current Cash</div>
                                    </div>
                                    <div class="col-xs-7 text-right">
                                        <div class="huge text-green">{curcash}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                      <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="panel background-picture">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-5">
                                       <div class="huge">Current Equity</div>
                                    </div>
                                    <div class="col-xs-7 text-right">
                                        <div class="huge text-green">{cureq}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        