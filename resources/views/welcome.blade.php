<!DOCTYPE html> <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <head> <meta charset="utf-8"> <meta
    name="viewport" content="width=device-width, initial-scale=1">

<title>Laravel</title> 
</head> 
<body class="antialiased"> 
    <h4>Change Guest into name in url </br>
    eg:/arika
</h4>
    <h1>Welcome, {{$name ?? "Guest"}}</h1> 
    <div>
    <h2>ifstatement</h2>
    @if($name==" " )
    {{"no name"}}
    @elseif($name=="arika")
    {{"arika is here"}}
    @else {{"write arika"}}
    @endif
    </div>
    </body> 
    </html>