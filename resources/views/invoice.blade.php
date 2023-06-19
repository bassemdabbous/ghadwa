

<head>
    <meta charset="utf-8">
    <title>Ghadwa</title>
<style>
body {
  background: #ccc;
  padding: 30px;
}

.container {
  width: 21cm;
  min-height: 29.7cm;
}

.invoice {
  background: #fff;
  width: 100%;
  padding: 50px;
}

.logo {
  width: 2.5cm;
}

.document-type {
  text-align: right;
  color: #444;
}

.conditions {
  font-size: 0.7em;
  color: #666;
}

.bottom-page {
  font-size: 0.7em;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 70%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>

<div class="container">
    <div class="invoice">
      <div class="row">
        <div class="col-7">
          <img src="img/Logograduation.png" class="logo">
        </div>
        <div class="col-5">
          <p class="text-right"><strong>{{$date}}</strong></p>
        </div>
      </div>
      <div class="row">
        <div class="col-7">
          <p>
            <strong>{{$user->name}}</strong><br>
            {{$user->email}}
          </p>
        </div>
      </div>
      <br>
      <br>
      <br>
      {{-- <table class="table table-striped">
        <thead>
          <tr>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Quantity</th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table> --}}
      <table>
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
        </tr>
        @foreach ($carts as $cart )
        <tr>
            <td>{{$cart->product->name}}</td>
            <td class="text-right">{{$cart->product->price}} EGP</td>
            <td>{{$cart->qty}}</td>
        </tr>
        @endforeach

      </table>

      <br>
      <br>
      <div class="row">
        <div class="col-8">
        </div>
        <div class="col-4">
          <table class="table table-sm text-right">
            <tr>
              <td><strong>Total </strong></td>
              <td class="text-right">{{$total}} EGp</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
