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
    Hello from services page
    @foreach($products as $product)
      <div class="well"> 
        <h1>
          <a href="/show/{{$product->id}}">
            {{$product->product_name}}
          </a>
        </h1>

      </div>
    @endforeach
    <!-- pagination -->
    <!-- $products->links() -->

  </body>
</html>