<?php
	print_r($this->session->userdata['user_id']);
?>
<div id="page-wrapper">

	<div class="container-fluid">

		<!-- Page Heading -->
		{playerBalance}

		<div class="row">
			<div class="col-lg-12">
				<h2>Player <span class = "font-weight-700">Profile</span> | <span>{Player}</span></h2>
			</div>
		</div>
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
								<div class="huge text-green">${Cash}.00</div>
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
								<div class="huge text-green">${Equity}.00</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		{/playerBalance}

		<div class="row">
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Current Holdings</h3>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
								<tr>
									<th>Stock</th>
									<th>Quantity</th>
								</tr>
								</thead>
								<tbody>
								{playerStocks}
								<tr>
									<td>{Stock}</td>
									<td>{Quantity}</td>
								</tr>
								{/playerStocks}

								</tbody>
							</table>
						</div>
						<div class="text-right">
							<a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Recent Transactions</h3>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
								<tr>
									<th>Name</th>
									<th>Stock</th>
									<th>Trans</th>
									<th>Quantity</th>
								</tr>
								</thead>
								<tbody>
								{playerTransactions}
								<tr>
									<td>{Player}</td>
									<td>{Stock}</td>
									<td>{Trans}</td>
									<td>{Quantity}</td>
								</tr>
								{/playerTransactions}
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


