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
					<!-- Generates the row of 4 stocks -->
					<?php for ($row = 0; $row < count($stockInfoArray); $row++){ ?>
						<div class = "row div-stock-dash-wrapper padding-top-5">

							<!-- Generates the individual stocks in each row -->
							<!-- Echo php statements were necessary here, due to the nature of our UI implementation. -->
							<?php for ($col = 0; $col < count($stockInfoArray[$row]); $col++ ){ ?>
								<div class = "col-md-3 norm">
									<a href="/stockhistory/<?php echo $stockInfoArray[$row][$col]['Code']; ?>">
										<div class= "row <?php
										if ($stockInfoArray[$row][$col]['Category'] == 'A') { echo 'stock-up'; }
										else if ($stockInfoArray[$row][$col]['Category'] == 'B') { echo 'stock-up-2'; }
										else if ($stockInfoArray[$row][$col]['Category'] == 'C') { echo 'stock-down'; }?>">
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
									</a>
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


