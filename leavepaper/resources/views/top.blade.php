<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>Leavepaper</title>
	<link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
            <a class="navbar-brand" href="{{ url('') }}">
                Leave Paper
            </a>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="{{ url('login') }}">ログイン</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ url('register') }}">新規登録</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<img src="{{ asset('/img/background.jpg') }}">
		<div class="carousel-caption">
			<h1 class="display-2 pt-5">Leave Paper</h1>
			<h5 class="pt-3">思いついたアイデア、言葉を忘れない為、他人と共有するwebサービス</h5>
			<button type="button" class="btn btn-success btn-lg" onclick="location.href='{{ url('login') }}'">ログイン</button>
		</div>
	</div>
</div>

<div class="bg-light">
<div class="container pt-5">
	<div class="row text-center">
		<div class="col-12">
		<h3>アイデアをすぐ忘れるのは必然の事です。</h3>
		</div>
		<div class="col-md-6 col-sm-12">
			<img src="img/noumiso.jpg" class="imgnow">
		</div>
		<div class="col-md-6 col-sm-12">
			<h5 class="pt-5">人間の脳は、１時間で約50%の内容を忘れる様に出来ています。「忘れない様に努力をしよう」、「忘れるのは頭が悪いから」ではなく、忘れる事は人間誰しも共通意識です。</h5>
		</div>
	</div>
</div>
</div>

<div class="container pt-5 pb-5">
	<div class="row text-center">
		<div class="col-12">
			<h3>アイデア、言葉を残しませんか？</h3>
		</div>
		<div class="col-4">
			<img src="img/aidea.jpg" class="imgnow">
			<h5 class="pt-3">忘れたくないアイデア</h5>
		</div>
		<div class="col-4">
			<img src="img/wasuretakunai.jpg" class="imgnow">
			<h5 class="pt-3">偉人の言葉</h5>
		</div>
		<div class="col-4">
			<img src="img/yume.jpg" class="imgnow">
			<h5 class="pt-3">夢の出来事</h5>
		</div>
	</div>
</div>

<div class="bg-light">
<div class="container pt-5 pb-5">
	<div class="row text-center">
		<div class="col-12">
			<h3>皆で共有する事で広がる人生</h3>
		</div>
		<div class="col-md-6 col-sm-12">
			<h5 class="pt-5">他人とアイデア、言葉を共有する事で、新しい発想、１日の気持ちの切り替えなど一人だと思いつかない事を共有できます。</h5>
		</div>
		<div class="col-md-6 col-sm-12">
			<img src="img/tanin.jpg" class="imgnow">
		</div>
	</div>
</div>
</div>

<div class="container pt-5 pb-5">
	<div class="row text-center">
		<div class="col-12">
			<h2>始めよう、皆で共有し人生を豊かに。</h2>
		</div>
		<div class="col-12">
			<button type="button" class="btn btn-success btn-lg" onclick="location.href='{{ url('register') }}'">新規登録</button>
		</div>
	</div>
</div>
<!-- START CONTACT -->
<section class="section bg-light pt-5" id="contact">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="text-center">
						<h2><span class="font-weight-bold">お問い合わせ</span></h2>
					</div>
				</div>
			</div> 
			<div class="row mt-5">
				<div class="col-lg-12">
					<div class="form-kerri">
						<form method="POST" action="{{ route('contact.confirm') }}">
						@csrf
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mt-2">
										<input name="email" value="{{ old('email') }}" type="text" class="form-control" placeholder="メールアドレス" required>
										@if ($errors->has('email'))
        								<p class="error-message">{{ $errors->first('email') }}</p>
    									@endif
									</div>
								</div>                                
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group mt-2">
										<input name="title" value="{{ old('title') }}" type="text" class="form-control" placeholder="タイトル" required/>
										@if ($errors->has('title'))
        								<p class="error-message">{{ $errors->first('title') }}</p>
    									@endif
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group mt-2">
										<textarea name="body" rows="4" class="form-control" placeholder="内容">{{ old('body') }}</textarea>
										@if ($errors->has('body'))
        								<p class="error-message">{{ $errors->first('body') }}</p>
    									@endif
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 text-right">
									<button class="nav-link" type="submit">入力内容確認</button>
								</div>
							</div>
						</form>
					</div>  
				</div>
			</div>
		</div>
	</section>
	<!-- END CONTACT -->

<footer class="bg-dark">
<div class="container-fluid padding">
<div class="row text-center">
	<div class="col-12">
		<h3>&copy; Leave Paper</h3>
	</div>
</div>
</div>
</footer>



</body>
</html>









<!--- Check out my course on Udemy! -->
<!---<div class="udemy-course" style="position: fixed; bottom: 0; right: 0; margin-bottom: -5px; z-index: 100;">
	<a href="http://bit.ly/advanced-bootstrap-course" target="_blank" style="z-index: 999!important; cursor: pointer!important;"><img src="https://www.w3newbie.com/wp-content/uploads/nuno-udemy-banner.png" style="max-width: 100%; min-width: 100%;"></a>
</div>-->


