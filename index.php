<!DOCTYPE html>
<html>
<head>
	<title> Macola </title>
	<link rel="stylesheet" type="text/css" href="assets/css/bs/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/animate/animate.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main/main.css">
</head>
<body>
	<div class="container mt-5">
		<form method="POST" id="formInvoice">
			<div class="row">
				<div class="col">
					<input type="text" class="form-control" placeholder="Order type" autocomplete="off" required>
				</div>
				<div class="col">
					<input type="text" class="form-control" placeholder="Order number" autocomplete="off" required>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col">
					<input type="text" class="form-control" placeholder="Status" autocomplete="off" required>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col">
					<input type="text" class="form-control" onfocus="this.type='date'" placeholder="Order Date" autocomplete="off" required>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col">
					<input type="text" class="form-control" placeholder="Apply To Number" autocomplete="off" required>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col">
					<input type="text" class="form-control" placeholder="Customer Number" autocomplete="off" required>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col">
					<input type="text" class="form-control" onfocus="this.type='date'" placeholder="Shipping Date" autocomplete="off" required>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col">
					<input type="text" class="form-control" placeholder="Ship Code" autocomplete="off" required>
				</div>
				<div class="col">
					<input type="text" class="form-control" placeholder="AR Terms Code" autocomplete="off" required>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col">
					<input type="text" class="form-control" placeholder="Sales Person" autocomplete="off" required>
				</div>
				<div class="col">
					<input type="text" class="form-control" placeholder="Tax Code" autocomplete="off" required>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col">
					<input type="text" class="form-control" placeholder="MFG Location" autocomplete="off" required>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col">
					<input type="text" class="form-control" placeholder="Total Sales" autocomplete="off" required>
				</div>
				<div class="col">
					<input type="text" class="form-control" placeholder="Total Tax" autocomplete="off" required>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col">
					<input type="text" class="form-control" onfocus="this.type='date'" placeholder="Picked Date" autocomplete="off" required>
				</div>
				<div class="col">
					<input type="text" class="form-control" onfocus="this.type='date'" placeholder="Billed Date" autocomplete="off" required>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col">
					<input type="text" class="form-control" placeholder="Invoice No" autocomplete="off" required>
				</div>
				<div class="col">
					<input type="text" class="form-control" placeholder="Invoice Date" autocomplete="off" required>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col">
					<input type="text" class="form-control" onfocus="this.type='date'" placeholder="Posted Date" autocomplete="off" required>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col">
					<input type="text" class="form-control" placeholder="Origal Order Type" autocomplete="off" required>
				</div>
				<div class="col">
					<input type="text" class="form-control" onfocus="this.type='date'" placeholder="Original Order Date" autocomplete="off" required>
				</div>
				<div class="col">
					<input type="text" class="form-control" placeholder="Origal Order Number" autocomplete="off" required>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col">
					<input type="text" class="form-control" placeholder="OE Cash Number" autocomplete="off" required>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col">
					<input type="text" class="form-control" placeholder="User Def Field 1" autocomplete="off" required>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col">
					<input type="text" class="form-control" placeholder="User Def Field 2" autocomplete="off" required>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col">
					<input type="text" class="form-control" placeholder="User Def Field 3" autocomplete="off" required>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col">
					<input type="text" class="form-control" placeholder="User Def Field 4" autocomplete="off" required>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col">
					<input type="text" class="form-control" placeholder="User Def Field 5" autocomplete="off" required>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col">
					<input type="text" class="form-control" onfocus="this.type='date'" placeholder="Shipped Date" autocomplete="off" required>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col">
					<input type="text" class="form-control" placeholder="OE PO Number" autocomplete="off" required>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col">
					<input type="text" class="form-control" onfocus="this.type='date'" placeholder="Transfer Date" autocomplete="off" required>
				</div>
			</div>
			<div class="row mt-3 mb-3">
				<div class="col">
					<button type="button" class="btn btn-primary" id="btnAdditem"> Add Item </button>
				</div>
			</div>
			<div id="itemDiv"></div>
			<div class="row mt-3 mb-5">
				<div class="col">
					<button type="submit" class="btn btn-primary btn-block"> Submit </button>
				</div>
			</div>
		</form>
	</div>

	<script type="text/javascript" src="assets/js/jquery/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bs/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/bs-notify/bootstrap-notify.min.js"></script>
	<script type="text/javascript" src="assets/js/popper/popper.min.js"></script>
	
	<script type="text/javascript" src="assets/js/main/main.js"></script>
</body>
</html>