<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" style="float: right; width: 50%; height: auto" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Your Card</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <h2 class="text-center mt-3">Cart</h2>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-md-offset-1 mt-2">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Total</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($cart))
                                    @foreach($cart->items as $item)
                                        <tr>
                                            <td class="col-sm-8 col-md-6">
                                                <div class="media">
                                                    <a class="thumbnail pull-left" href="#"> <img class="media-object"
                                                                                                  src="{{$item['product']->image}}"
                                                                                                  style="width: 70px; height: 70px;">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading"><a
                                                                href="#">{{$item['product']->name}}</a></h4>
                                                        <h5 class="media-heading"> by <a href="#">Brand name</a></h5>
                                                        <span>Status: </span><span
                                                            class="text-success"><strong>In Stock</strong></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="col-sm-1 col-md-1" style="text-align: center">
                                                <a href="{{route('cart.minusToCart',$item['product']->id)}}"><i
                                                        class="fas fa-minus"></i></a>
                                                <span>{{$item['totalQty']}}</span>
                                                <a href="{{route('cart.addToCart',$item['product']->id)}}"><i
                                                        class="fas fa-plus"></i></a>
                                            </td>
                                            <td class="col-sm-1 col-md-1 text-center">
                                                <strong>{{$item['product']->price}}</strong></td>
                                            <td class="col-sm-1 col-md-1 text-center">
                                                <strong>{{$item['totalPrice']}}</strong></td>
                                            <td class="col-sm-1 col-md-1"><a class="btn btn-danger"
                                                                             onclick="return confirm('Do you want to delete this product ?')"
                                                                             href="{{$item['product']->id}}">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><h3>Total</h3></td>
                                        <td class="text-right"><h3><strong>$ {{$cart->totalPrice}}</strong></h3></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a class="btn btn-warning"
                                               onclick="return confirm('Do you want to delete all the cart ?')"
                                               href="{{route('cart.delete')}}">Delete All</a>
                                        <td>
                                            <button type="button" class="btn btn-success">
                                                Checkout <span class="glyphicon glyphicon-play"></span>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                                @else()
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>Gio Hang Trong</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-md-3">
                <img src="" style="width:15%; padding-top:1em;">
                <p>DANGQUANGWATCH</p>
                <hr class="light">
                <p>111-222-3333</p>
                <p>mymail@gmail.com</p>
                <p>28 Nguyen Tri Phuong, Hue, Vietnam</p>
            </div>
            <div class="col-md-3">
                <hr class="light">
                <h5>OPEN TIME</h5>
                <hr class="light">
                <p>Monday-Friday: 8am - 5pm</p>
                <p>Weekend: 8am - 12am</p>
            </div>
            <div class="col-md-3">
                <hr class="light">
                <h5>SERVICE</h5>
                <hr class="light">
                <p><i class="fas fa-plane"></i> Free shipping</p>
                <p><i class="fas fa-toolbox"></i> Free returns</p>
                <p><i class="fas fa-stopwatch"></i> Two year warranty</p>
            </div>
            <div class="col-md-3">
                <hr class="light">
                <h5>CONTACT WITH US</h5>
                <hr class="light">
                <p><i class="fas fa-globe"> Vietnam</i></p>
                <p style="float: left; padding: 15px"><i class="fab fa-facebook"></i></p>
                <p style="float: left; padding: 15px"><i class="fab fa-twitter"></i></p>
                <p style="float: left; padding: 15px"><i class="fab fa-google-plus-g"></i></p>
                <p style="float: left; padding: 15px"><i class="fab fa-instagram"></i></p>
                <p style="float: left; padding: 15px"><i class="fab fa-youtube"></i></p>
            </div>
            <div class="col-12">
                <hr class="light-100">
                <h5>2020 &copy; DANGQUANGWATCH</h5>
            </div>
        </div>
    </div>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>
</html>

