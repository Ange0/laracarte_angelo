@extends("layouts.master",['title'=>'About'])
@section('content')
  <div class="container">
        <h2>What is {{ config('app.name') }} ?</h2>
        <p>{{ config('app.name') }} is clone app of <a href="https://laramap.com" target="_blank">Laramap.com</a></p>
        <div class="row">
            <div class="col-md-6">
                <p class="alert alert-warning">
                   <strong><span class="fa fa-exclamation-triangle"></span> This app been built by <a href="#">@angelo </a> for learning purposes</strong> 
                </p>
                <p>Feel free to help improve the <a href="#">source code</a> </p>
                <hr>
                <h2>What is {{ config('app.name') }}</h2>
                <p>{{ config('app.name') }} is website by which {{ config('app.name') }} was inspired :) .</p>
                <p>More info <a href="https://laramap.com/p/about"></a></p>
                <hr>
                <h2>Which tools and service are used in {{ config('app.name') }}?</h2>
                <p>Basically it's built on laravel & Bootstrap.But there's a bunch of service used
                    for email and other section
                </p>
                 <ul>
                     <li>Laravel</li>
                     <li>Bootstrap</li>
                     <li>Amazon S3</li>
                     <li>Mandrill</li>
                     <li>Google Maps</li>
                     <li>Gravatar</li>
                     <li>Antony Martin's Geolocalisation Package</li>
                     <li>Michel Fortin's Markdown Parser Package</li>
                     <li>Heroku</li>
                 </ul>
                 
            </div>
        </div>
  </div>

@endsection