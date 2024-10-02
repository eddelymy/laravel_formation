<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

  </head>
  <body>
    Le detail du produit est
    <hr>
     <h1>{{$products->product_name}}</h1>
     <h1>{{$products->product_price}}</h1>
     <h1>{{$products->description}}</h1>
     <hr>
     <h4>{{$products->created_at}}</h4>
  </body>
</html>