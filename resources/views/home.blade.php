<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Titlee</title>
</head>
<body>
@extends('layout')
@section('content')
<div class="container">
<h1 class="display-4 text-center", style="font-size:4.0 rem">{{__('lang.welcome')}}</h1>
<h1 class="display-4 text-center", style="font-size:2.0 rem">{{__('lang.title')}}</h1>
<h1 class="display-4 text-center", style="font-size:1.5 rem">{{__('lang.body')}}</h1>
<h5 class="larger text-center", style="font-size:1.0 rem">{{__("Сүт тістерінің негізі ұрықтың ана құрсағында дамуы сатысында қалыптаса бастайды.")}}</h5>
<h5 class="larger text-center", style="font-size:1.0 rem">{{__("Сәбидің сүт тісі 6 – 8 айлығында жарып шығып, 3 жаста толық жетіледі.")}}</h5>
<h5 class="larger text-center", style="font-size:1.0 rem">{{__("Баланың тұрақты тістері 6 – 7 жаста, негізінен 14 – 16 жаста толық шығып болады.")}}</h5>
<h5 class="larger text-center", style="font-size:1.0 rem">{{__("Ал ақыл тіс 16 – 25 жас аралығында шығады.")}}</h5>
</div>
@endsection
</body>
</html>