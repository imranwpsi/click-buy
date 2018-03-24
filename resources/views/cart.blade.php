@section('title','Click & Buy')
@extends('layouts.master')
@section('style')
{{-- {{Html::style('assets/public_css/index.css')}} --}}
<style>

</style>
@endsection

@section('content')

<div class="b-page_title b-page_title_default text-center">
  <h1 class="b-entry_title"><span>CART</span></h1>  
  <div class="b-breadcrumbs">
    <a href="http://181.224.145.184/~jthemes0/demothemes/html/basel/index.html">Home</a>
    <span>CART</span>
  </div>
</div> 
<section id="b-cart_default">
  <div class="b-cart b-cart_default pb-5">
    <div class="container">
       <table id="cart" class="table table-hover table-condensed">
          <thead>
            <tr>
              <th style="width:50%">Product</th>
              <th style="width:10%">Price</th>
              <th style="width:8%">Quantity</th>
              <th style="width:22%" class="text-center">Subtotal</th>
              <th style="width:10%"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td data-th="Product">
                <div class="row">
                  <div class="col-sm-2 hidden-xs"><img src="assets/img/products/product_grid_03_01.jpg" alt="..." class="img-fluid"></div>
                  <div class="col-sm-10">
                    <h4 class="nomargin">Product 1</h4>
                    <p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
              </td>
              <td data-th="Price">$1.99</td>
              <td data-th="Quantity">
                <input type="number" class="form-control text-center" value="1">
              </td>
              <td data-th="Subtotal" class="text-center">1.99</td>
              <td class="actions" data-th="">
                <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>                
              </td>
            </tr>
            <tr>
              <td data-th="Product">
                <div class="row">
                  <div class="col-sm-2 hidden-xs"><img src="assets/img/products/product_grid_03_02.jpg" alt="..." class="img-fluid"></div>
                  <div class="col-sm-10">
                    <h4 class="nomargin">Product 2</h4>
                    <p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
              </td>
              <td data-th="Price">$2.99</td>
              <td data-th="Quantity">
                <input type="number" class="form-control text-center" value="1">
              </td>
              <td data-th="Subtotal" class="text-center">1.99</td>
              <td class="actions" data-th="">
                <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>                
              </td>
            </tr>
          </tbody>
          <tfoot> 
            <tr>
              <td><a href="http://181.224.145.184/~jthemes0/demothemes/html/basel/cart-default.html#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
              <td colspan="2" class="hidden-xs"></td>
              <td class="hidden-xs text-center"><strong>Total $3.99</strong></td>
              <td><a href="http://181.224.145.184/~jthemes0/demothemes/html/basel/cart-default.html#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
            </tr>
          </tfoot>
        </table>
    </div>
  </div>
</section>

@endsection


@section('script')
{{-- {{Html::script('assets/public_js/index.js')}} --}}
<script>
$(document).ready(function() {

});

</script>

@endsection