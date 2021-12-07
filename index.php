<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<!--bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!--bootstrap-->
	<link rel="stylesheet" href="custom.css" type="text/css"/>
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">
	<title>Factuur met TCPDF</title>
</head>

<body>

<div class="main-form">
	<h1 class="text-uppercase"><strong>Genereer factuur TCPDF</strong></h1>
	<form id="invoice" action="maak_pdf.php" method="post" target="_blank">
		<input type="hidden" name="action" value="pdf"/>
		<div class="row">
			<div class="col-md-7">
				<label class="my-label">Klant naam</label>
				<input type="text" name="customer" placeholder="Name" class="form-control"/>
			</div><!--col-->
			<div class="col-md-5">
				<label class="my-label">Factuur nummer</label>
				<input type="text" name="in" placeholder="000" class="form-control"/>
			</div><!--col-->
			<div class="col-md-12">
				<label class="my-label">NAW gegevens (Naam, Adres, Woonplaats)</label>
				<textarea name="address" class="form-control" placeholder="Include phone and email here if any"></textarea>
			</div><!--col-->
			<div class="col-md-12">
				<div class="row clone">
					<div class="col-md-3">
						<label class="my-label">Item</label>
						<input type="text" name="name[]" class="form-control" placeholder="Item name"/>
					</div><!--col-->
					<div class="col-md-3">
						<label class="my-label">Item prijs</label>
						<input type="text" name="price[]" class="form-control" placeholder="99.99"/>
					</div><!--col-->
					<div class="col-md-3">
						<label class="my-label">Hoeveelheid</label>
						<input type="number" name="qty[]" class="form-control" placeholder="1"/>
					</div><!--col-->
					<div class="col-md-3">
						<label class="my-label">BTW</label>
						<div class="clear"></div><!--append-->
						<label class="tax-label">
							<input type="radio" name="tax_nr0" class="radio_tax" lang="0" value="high" checked/> &nbsp; 21% &nbsp; 
						</label>
						<label class="tax-label">
							<input type="radio" name="tax_nr0" class="radio_tax" lang="0" value="low" /> &nbsp; 9%
						</label>
					</div><!--col-->
				</div><!--row clone-->
				<div id="append"></div><!--append-->
				<a href="javascript:;" id="cloner" class="text-right">+Nog een item</a>
			</div><!--col-->
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary btn-block">Genereer PDF</button>
			</div><!--col-->
		</div><!--row-->
	</form><!--form-->
	<div class="output"></div>
</div><!--main-form-->

<script src="custom.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>