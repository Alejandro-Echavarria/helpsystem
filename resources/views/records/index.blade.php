<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<title>Help System</title>
		<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
	</head>
	<body>
		<div class="container mt-3">
			<h1>Monitoreo de dispositivos - ubicuos</h1>
			<div class="row mt-5">
				<div class="col-xxl-3 col-md-6 mb-5 position-relative">
					<div class="card card-raised color-primario text-white">
						<div class="card-body px-4">
							<div class="display-5 text-white">
								<div class="position-absolute top-0 start-0 translate-middle">
									<img style="width: 80px;" class="" src="{{ asset('img/img1.png') }}" alt="">
								</div>
							</div>
							<div class="d-flex justify-content-between align-items-center mb-2">
								<div class="me-2">
									<div class="card-text"> Dispositivo 1</div>
								</div>
								<div class="icon-circle bg-white-50">Ubicaci&oacute;n: <span class="text-success fw-bold">On</span></div>
							</div>
							<div class="card-text">
								<div class="align-items-center">
									<div class="icon-circle bg-white-50">Monitoreo: <span class="text-success fw-bold">On</span></div>	
									<div class="caption">Total registros: <span id="totalRegistros1"></span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xxl-3 col-md-6 mb-5 position-relative">
					<div class="card card-raised color-primario text-white">
						<div class="card-body px-4">
							<div class="display-5 text-white">
								<div class="position-absolute top-0 start-0 translate-middle">
									<img style="width: 80px;" class="" src="{{ asset('img/img2.png') }}" alt="">
								</div>
							</div>
							<div class="d-flex justify-content-between align-items-center mb-2">
								<div class="me-2">
									<div class="card-text"> Dispositivo 2</div>
								</div>
								<div class="icon-circle bg-white-50">Ubicaci&oacute;n: <span class="text-success fw-bold">On</span></div>
							</div>
							<div class="card-text">
								<div class="align-items-center">
									<div class="icon-circle bg-white-50">Monitoreo: <span class="text-success fw-bold">On</span></div>	
									<div class="caption">Total registros: <span id="totalRegistros2"></span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xxl-3 col-md-6 mb-5 position-relative">
					<div class="card card-raised color-primario text-white">
						<div class="card-body px-4">
							<div class="display-5 text-white">
								<div class="position-absolute top-0 start-0 translate-middle">
									<img style="width: 80px;" class="" src="{{ asset('img/img3.png') }}" alt="">
								</div>
							</div>
							<div class="d-flex justify-content-between align-items-center mb-2">
								<div class="me-2">
									<div class="card-text"> Dispositivo 3</div>
								</div>
								<div class="icon-circle bg-white-50">Ubicaci&oacute;n: <span class="text-success fw-bold">On</span></div>
							</div>
							<div class="card-text">
								<div class="align-items-center">
									<div class="icon-circle bg-white-50">Monitoreo: <span class="text-success fw-bold">On</span></div>	
									<div class="caption">Total registros: <span id="totalRegistros3"></span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xxl-3 col-md-6 mb-5 position-relative">
					<div class="card card-raised color-primario text-white">
						<div class="card-body px-4">
							<div class="display-5 text-white">
								<div class="position-absolute top-0 start-0 translate-middle">
									<img style="width: 80px;" class="" src="{{ asset('img/img1.png') }}" alt="">
								</div>
							</div>
							<div class="d-flex justify-content-between align-items-center mb-2">
								<div class="me-2">
									<div class="card-text"> Dispositivo 4</div>
								</div>
								<div class="icon-circle bg-white-50">Ubicaci&oacute;n: <span class="text-success fw-bold">On</span></div>
							</div>
							<div class="card-text">
								<div class="align-items-center">
									<div class="icon-circle bg-white-50">Monitoreo: <span class="text-success fw-bold">On</span></div>	
									<div class="caption">Total registros: <span id="totalRegistros4"></span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xxl-3 col-md-6 mb-5 position-relative">
					<div class="card card-raised color-primario text-white">
						<div class="card-body px-4">
							<div class="display-5 text-white">
								<div class="position-absolute top-0 start-0 translate-middle">
									<img style="width: 80px;" class="" src="{{ asset('img/img3.png') }}" alt="">
								</div>
							</div>
							<div class="d-flex justify-content-between align-items-center mb-2">
								<div class="me-2">
									<div class="card-text"> Dispositivo 5</div>
								</div>
								<div class="icon-circle bg-white-50">Ubicaci&oacute;n: <span class="text-success fw-bold">On</span></div>
							</div>
							<div class="card-text">
								<div class="align-items-center">
									<div class="icon-circle bg-white-50">Monitoreo: <span class="text-success fw-bold">On</span></div>	
									<div class="caption">Total registros: <span id="totalRegistros5"></span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<span class="fw-bold">Mostando los &uacute;ltimos <span id="totalRecord"></span> registros</span>
			<table id="tableId" name="tableId" class="table table-sm table-hover mt-3">
				<thead>
					<tr>
						<th>Id</th>
						<th>Location</th>
						<th>Pressure</th>
						<th>Heart rate</th>
						<th>Oxygen</th>
						<th>Device</th>
						<th>Fecha</th>
						<th>Actualizado</th>
					</tr>
				</thead>
				<tbody id="tbody">
					
				</tbody>
			</table>
		</div>

		<!-- Bootstrap Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<script>const base_url = "{!! env('APP_URL') !!}" </script>
		<script src="{{ asset('js/records.js') }}"></script>
	</body>
</html>

