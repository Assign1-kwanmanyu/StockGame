<div id="stocks-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-8" style = "margin-right: 15px;">
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
			</div>
			<div class="div-friend-list col-md-4" style = "background: #2E3136;">
				<h2>Online - 4</h2>
				{PlayerInfo}
				<div class = "row">
					<div class = "col-md-12">
						<ul class="ul-friend-list list-unstyled">
							<li class=""><img src = "assets/img/friend1.png">{Player}
								<ul class = "ul-friend-info list-unstyled">
									<li><img src = "assets/img/icon-cash.png">{Cash}</li>
									<li><img src = "assets/img/icon-stock-muney.png">{Cash}</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				{/PlayerInfo}
				<!-- <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu </a> -->
			</div>
		</div>
	</div>
</div>


