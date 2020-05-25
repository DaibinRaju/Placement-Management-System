<html lang="en">
<title>SJCET PMS</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">

<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
	<div class="auth-wrapper">
		<div class="auth-content text-center">

			<div class="card">
				<div class="row align-items-center">
					<div class="col-md-12">
						<img src="assets/images/college-logo.jpg" alt="SJCET" class="img-fluid" align="center">
						<div class="card-body">
							<h4 class="mb-3 f-w-400">Placement Management System</h4>
							<h4 class="mb-3 f-w-400">Signin</h4>
							<form name="login_info" method="post">
								@csrf
								<div class="input-group mb-3">
									<input type="text" id="admission_number" name="admission_number" class="form-control @error('admission_number') is-invalid @enderror" placeholder="Admission number" value="{{old('admission_number')}}" required>
									@error('admission_number')
									<label class="error jquery-validation-error small form-text invalid-feedback" for="admission_number">{{$errors->first('admission_number')}}</label>
									@enderror
								</div>
								<div class="input-group mb-4">
									<input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
									@error('password')
									<label class="error jquery-validation-error small form-text invalid-feedback" for="password">{{$errors->first('password')}}</label>
									@enderror
								</div>
								<div class="form-group text-left mt-2">
									<div class="checkbox checkbox-primary d-inline">
										<input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-a1" checked="">
										<label for="checkbox-fill-a1" class="cr"> Save credentials</label>
									</div>
								</div>
								<button type="submit" name="submit" class="btn btn-block btn-primary mb-4 rounded-pill">Signin</button>
							</form>
							<p class="mb-2 text-muted">Forgot password? <a href="reset-password" class="f-w-400">Reset</a></p>
						</div>
					</div>
				</div>
			</div>

		</div>
		<svg width="100%" height="250px" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave bg-wave">
			<title></title>
			<defs></defs>
			<path id="feel-the-wave" d="M 0 106.13501073745846 C 153.84616666666665 151.32684252553832 153.84616666666665 151.32684252553832 307.6923333333333 128.7309266314984 C 461.53849999999994 106.13501073745846 461.53849999999994 106.13501073745846 615.3846666666666 166.28455355186279 C 769.2308333333333 226.43409636626723 769.2308333333333 226.43409636626723 923.077 147.85755460577838 L 923.077 735.385 L 0 735.385 Z" fill="rgba(72, 134, 255, 4)"></path>
		</svg>
		<svg width="100%" height="250px" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave bg-wave">
			<title></title>
			<defs></defs>
			<path id="feel-the-wave-two" d="M 0 83.94015132057173 C 92.30770000000003 108.06259258157719 92.30770000000003 108.06259258157719 184.61540000000005 96.00137195107442 C 276.9231000000001 83.94015132057173 276.9231000000001 83.94015132057173 369.2308000000001 114.70057790943505 C 461.5385000000001 145.4610044982984 461.5385000000001 145.4610044982984 553.8462000000001 108.99585850142391 C 646.1538999999999 72.53071250454944 646.1538999999999 72.53071250454944 738.4616000000002 88.35742282540836 C 830.7693000000005 104.18413314626726 830.7693000000005 104.18413314626726 923.0770000000001 115.49106260403285 L 923.0770000000001 735.385 L 0 735.385 Z" fill="rgba(72, 134, 255, .3)"></path>
		</svg>
		<svg width="100%" height="250px" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave bg-wave">
			<title></title>
			<defs></defs>
			<path id="feel-the-wave-three" d="M 0 67.82264931632231 C 115.38462500000004 84.48442549891988 115.38462500000004 84.48442549891988 230.76925000000008 76.15353740762113 C 346.15387500000014 67.82264931632231 346.15387500000014 67.82264931632231 461.53850000000017 81.653178453041 C 576.9231250000004 95.48370758975962 576.9231250000004 95.48370758975962 692.3077500000003 70.82323043058314 C 807.6923750000002 46.162753271406714 807.6923750000002 46.162753271406714 923.0770000000003 81.653178453041 L 923.0770000000003 735.385 L 0 735.385 Z" fill="rgba(72, 134, 255, .2)"></path>
		</svg>
	</div>


	<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/js/plugins/bootstrap.min.js"></script>
	<script src="assets/js/waves.min.js"></script>
	<script src="assets/js/pages/TweenMax.min.js"></script>
	<script src="assets/js/pages/jquery.wavify.js"></script>
	<script>
		$('#feel-the-wave').wavify({
			height: 100,
			bones: 3,
			amplitude: 90,
			color: 'rgba(72, 134, 255, 4)',
			speed: .25
		});
		$('#feel-the-wave-two').wavify({
			height: 70,
			bones: 5,
			amplitude: 60,
			color: 'rgba(72, 134, 255, .3)',
			speed: .35
		});
		$('#feel-the-wave-three').wavify({
			height: 50,
			bones: 4,
			amplitude: 50,
			color: 'rgba(72, 134, 255, .2)',
			speed: .45
		});
	</script>

</body>
@if(session()->has('error'))
<script src="/assets/js/plugins/sweetalert.min.js"></script>
<script>
	swal("Error", "{{ session()->get('error') }}", "error");
</script>
@endif

</html>