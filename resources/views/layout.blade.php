<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>

</head>
<body>
    <div id="app">
    	<div style="background-color: #343a40;">
    		<nav class="navbar navbar-expand-lg navbar-dark bg-darl container">
    			<div class="collapse navbar-collapse" id="navbarToggler">
    				<ul class="navbar-nav ml-auto">
    					@php $locale = session()->get('locale'); @endphp
    					<li class="nav-item dropdown">
    						<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
    							@switch($locale)
    								@case('en')
    								<img width="20" src="{{asset('C:/xampp/htdocs/img/en.png')}}">
    								English language
    								@break
    								@case('kz')
    								<img width="20" src="{{asset('C:/xampp/htdocs/img/kz.png')}}">
    								Kazakh language
    								@break
    								@case('ru')
    								<img width="20" src="{{asset('C:/xampp/htdocs/img/ru.png')}}">
    								Russian language
    								@break
    								@default
    								<img width="20" src="{{asset('C:/xampp/htdocs/img/kz.png')}}">
    								Kazakh language
    								@endswitch
    								<span class="caret"></span>
    						</a>
    						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
    							<a class="dropdown-item" href="en"><img width="20" src="{{asset('C:/xampp/htdocs/img/en.png')}}">English</a><br>
    							<a class="dropdown-item" href="kz"><img width="20" src="{{asset('C:/xampp/htdocs/img/ru.png')}}">Kazakh</a><br>
    							<a class="dropdown-item" href="ru"><img width="20" src="{{asset('C:/xampp/htdocs/img/kz.png')}}">Russian</a>
    						</div>
    					</li>
    				</ul>
    			</div>
    		</nav>
    	</div>
    	<main class="py-4">
    		@yield('content')
    	</main>
    </div>
</body>
</html>