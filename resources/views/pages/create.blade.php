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
    @if (Session::has('message'))
      <p>{{Session::get('message')}}</p>
      {{Session::put('message',null)}}
    @endif
    <form action="{{url('/saveproduct')}}" method="POST">
        @csrf 
        <label for="product_name">Nom du produit :</label>
        <input type="text" id="product_name" name="product_name" placeholder="Entrez le nom du produit" required>

        <label for="product_price">Prix du produit :</label>
        <input type="number" id="product_price" name="product_price" placeholder="Entrez le prix du produit" required>

        <label for="product_description">Description du produit :</label>
        <textarea id="product_description" name="product_description" rows="4" placeholder="Entrez la description du produit" required></textarea>

        <button type="submit">Envoyer</button>
    </form>
  </body>
</html>