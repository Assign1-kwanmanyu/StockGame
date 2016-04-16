<div id="stocks-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-8" style = "margin-right: 15px;">

                <div class="row">
                    <div class="col-lg-12">
                        <h2><span class = "font-weight-700">Gameplay</span></h2>
                    </div>
                </div>

                <div>
                    <h2>Current Market Status</h2>
                    <ul>
                        <li>Round: {round}</li>
                        <li>Status: {desc}</li>
                    </ul>
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
            <div class="div-friend-list col-md-4" style = "background: #2E3136;">
                <h2>Online - 4</h2>
                {PlayerInfo}
                <div class = "row">
                    <div class = "col-md-12">
                        <ul class="ul-friend-list list-unstyled">
                            <a href="/player/{Player}">
                                <li class=""><img src = "/assets/img/friend1.png">{Player}
                            </a>
                            <ul class = "ul-friend-info list-unstyled">
                                <li><img src = "/assets/img/icon-cash.png">{Cash}</li>
                                <li><img src = "/assets/img/icon-stock-muney.png">{Equity}</li>
                            </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                {/PlayerInfo}
            </div>
        </div>
    </div>
</div>


