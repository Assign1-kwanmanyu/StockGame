<div id="stocks-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-8" style = "margin-right: 15px;">

				<div>
					<h2>Game Summary</h2>
					<ul>
						<li>Round: {round}</li>
						<li>Status: {desc}</li>
					</ul>
				</div>

				<div>
					<h2>Current Stocks</h2>

<!--					//test to see if current stocks is retrieved properly:-->
					<?php for ($row = 1; $row < count($currentStocks); $row ++){ ?>
						<div class = "row div-stock-dash-wrapper padding-top-5">


							<?php for ($col = 0; $col < count($currentStocks[$row]); $col++){ ?>
								<div class = "col-md-3 norm">
									<div class= "row <?php
									if ($currentStocks[$row][2] == 'A') { echo 'stock-up'; }
									else if ($currentStocks[$row][2] == 'B') { echo 'stock-up-2'; }
									else if ($currentStocks[$row][2] == 'C') { echo 'stock-down'; }?>">
										<div class = "col-md-12">
											<h2><?php echo $currentStocks[$row][0] ?></h2>
											<span class = "span-stock-dash-subtitle"><?php echo $currentStocks[$row][1] ?></span>
											<div class= "row">
												<div class = "col-md-6">
													<h1><?php echo $currentStocks[$row][3] ?></h1>
												</div>
												<div class = "col-md-6 text-right">
													<span><?php echo $currentStocks[$row][2] ?></span>
													<span><?php echo $currentStocks[$row][3] ?></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					<?php } ?>

				</div>

				<div>
					<h2>Recent Stock Movements</h2>
				</div>
				<div>
					<h2>Recent Stock Transactions</h2>
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


