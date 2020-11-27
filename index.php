<html>
  <head>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="images/k.gif" width="80" height="80" class="d-inline-block align-top" alt="" loading="lazy">
      </a>
      <a class="navbar-brand" data-toggle='modal' data-target='#exampleModal' href="#">
        <img src="images/cart.png" width="80" height="80" class="d-inline-block align-top" alt="" loading="lazy">
      </a>
    </nav>
    <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Nice!</strong> Successfully added to Cart.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div> -->
    <div class="container m-auto m-0 row d-flex justify-content-around">
      <?php include('products.php');
      for($i=0;$i<count($array);$i++) {
        echo "<div class='col-md-4 p-0 card'>
                <form method='get'>
                  <img src='{$array[$i]['img']}' class='card-img-top m-0 m-auto'>
                  <div class='card-body d-flex flex-row px-2 py-3'>
                    <div class='container p-0'>
                      <h4 class='name card-title' id='name'>{$array[$i]['name']}</h4>
                      <h5 class='price card-subtitle mb-2 text-info'>₱{$array[$i]['price']} <s>₱{$array[$i]['old_price']}</s></h5>
                      
                      <p class='desc card-text'>{$array[$i]['desc']}</p>
                    </div>
                    <div class='container d-flex flex-column p-0'>
                      <h4 class='rate float-right text-light bg-dark p-2'>{$array[$i]['rate']}</h4>
                      <h6><button type='submit' onClick='addProductToRow($i)' class='text-light float-right bg-dark p-2 text-decoration-none border-0'>add to cart</button></h6>
                    </div>
                  </div>
                </form>
              </div>";
      }
      ?>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-dark">
            <h5 class="modal-title text-light" id="exampleModalLabel">My Cart</h5>
            <h4 class="cart-count text-light float-right text-right ml-5" id="exampleModalLabel"></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action='/'>
              <div class="container d-flex flex-row">
                <table id="myTable" style="width:100%">
                  <tr>
                    <th>Product name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                  </tr>
                </table>
              </div>
              <div class="container d-flex flex-column">
                <div class="container d-flex flex-row align-items-center">
                  <input class="mr-3" type="radio" id="gcash" name="payment" value="gcash">
                  <label for="gcash"><img src='images/gcash.png' style='height: 75; width: 225' class='card-img-top m-0 m-auto'></label>
                </div>
                <div class="container d-flex flex-row align-items-center">
                  <input class="mr-3" type="radio" id="paypal" name="payment" value="paypal">
                  <label for="paypal"><img src='images/paypal.png' style='height: 75; width: 225' class='card-img-top m-0 m-auto'></label>
                </div>
              </div>
              <div class="container d-flex flex-row">
                <h5>Total (PHP)</h5>
                <h5 class="total ml-auto text-right">₱0.00</h5>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" type="submit" class="btn btn-primary">Check·out</button>
          </div>
        </div>
      </div>
    </div>
    <script src="cart.js">
    </script>
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
