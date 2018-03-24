@section('title','Click & Buy')
@extends('layouts.master')
@section('style')
{{-- {{Html::style('assets/public_css/index.css')}} --}}
<style>

</style>
@endsection

@section('content')

<div class="b-page_title b-page_title_default text-center">
  <h1 class="b-entry_title"><span>Checkout</span></h1>  
  <div class="b-breadcrumbs">
    <a href="http://181.224.145.184/~jthemes0/demothemes/html/basel/index.html">Home</a>
    <span>Checkout</span>
  </div>
</div> 
<section id="b-checkout_default">
  <div class="b-checkout container">
     <div class="row"> 
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <!--SHIPPING METHOD-->
            <div class="panel panel-info">
                <div class="panel-heading">Address</div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-md-12">
                            <h4>Shipping Address</h4>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12"><label>Country:</label></div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="country" value="">
                        </div>
                    </div>
                    <div class="form-group clearfix row ml-0 mr-0">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>First Name:</label>
                            <input type="text" name="first_name" class="form-control" value="">
                        </div> 
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Last Name:</label>
                            <input type="text" name="last_name" class="form-control" value="">
                        </div>
                    </div>
                    <div class="form-group clearfix row ml-0 mr-0">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Address:</label>
                            <input type="text" name="address" class="form-control" value="">
                        </div> 
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>City:</label>
                            <input type="text" name="city" class="form-control" value="">
                        </div>
                    </div>
                    <div class="form-group clearfix row ml-0 mr-0">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>State:</label> 
                            <input type="text" name="state" class="form-control" value="">
                        </div> 
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Zip / Postal Code:</label> 
                            <input type="text" name="zip_code" class="form-control" value="">
                        </div>
                    </div>
                    <div class="form-group clearfix row ml-0 mr-0">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Phone Number:</label>
                          <input type="text" name="phone_number" class="form-control" value="">
                        </div> 
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Email Address:</label>
                          <input type="text" name="email_address" class="form-control" value="">
                        </div>
                    </div>
                </div>
            </div>
            <!--SHIPPING METHOD END-->
            <!--CREDIT CART PAYMENT-->
            <div class="panel panel-info">
                <div class="panel-heading"><span><i class="glyphicon glyphicon-lock"></i></span> Secure Payment</div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-md-12"><label>Card Type:</label></div>
                        <div class="col-md-12">
                            <select id="CreditCardType" name="CreditCardType" class="form-control">
                                <option value="5">Visa</option>
                                <option value="6">MasterCard</option>
                                <option value="7">American Express</option>
                                <option value="8">Discover</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group clearfix row ml-0 mr-0">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Credit Card Number:</label>
                          <input type="text" class="form-control" name="car_number" value="">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Card CVV:</label>
                          <input type="text" class="form-control" name="car_code" value="">
                        </div>
                    </div>
                    <div class="form-group clearfix row ml-0 mr-0">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Expiration Date</label> 
                            <select class="form-control" name="">
                                <option value="">Month</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Expiration Date</label> 
                            <select class="form-control" name="">
                                <option value="">Year</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                           </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <span>Pay secure using your credit card.</span>
                        </div>
                        <div class="col-md-12 mt-3">
                            <img src="./Basel Checkout_files/payments.png" alt="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <button type="submit" class="btn btn-full btn-submit-fix">Place Order</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--CREDIT CART PAYMENT END-->
        </div>  
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <!--REVIEW ORDER-->
            <div class="panel panel-info">
                <div class="panel-heading">
                    Review Order <div class="pull-right"><small><a class="afix-1" href="http://181.224.145.184/~jthemes0/demothemes/html/basel/checkout.html#">Edit Cart</a></small></div>
                </div>
                <div class="panel-body">
                    <table class="table">
                       <thead>
                          <tr>
                             <th class="product-name">Product</th>
                             <th width="40%" class="product-total">Total</th>
                          </tr>
                       </thead>
                       <tbody>
                          <tr class="cart_item">
                             <td class="product-name">
                                Bold metallic watch&nbsp;<strong class="product-quantity">× 1</strong> 
                             </td>
                             <td class="product-total">
                                <span class="b-price"><span class="b-price_currency">£</span>12.00</span>        
                             </td>
                          </tr>
                       </tbody>
                       <tfoot>
                          <tr class="cart-subtotal">
                             <th>Subtotal</th>
                             <td><span class="b-price"><span class="b-price_currency">£</span>10.00</span></td>
                          </tr>
                          <tr class="shipping">
                             <th style="vertical-align: middle;">Shipping</th>
                             <td>
                                <ul class="list-unstyled pl-0 mb-0">
                                   <li class="mb-3">
                                      <input type="radio" id="1" class="d-inline-block" checked="checked">
                                      <label for="1" class="d-inline-block">Flat Rate: <span class="b-price"><span class="b-price_currency">£</span>12.00</span></label> 
                                   </li>
                                   <li class="mb-3">
                                      <input type="radio" class="d-inline-block" id="2">
                                      <label class="d-inline-block">Free Shipping</label> 
                                   </li>
                                   <li>
                                      <input class="d-inline-block" type="radio" id="3">
                                      <label class="d-inline-block" for="3">Flat Rate</label> 
                                   </li>
                                </ul>
                             </td>
                          </tr>
                          <tr class="order-total">
                             <th>Total</th>
                             <td><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>22.00</span></strong> </td>
                          </tr>
                       </tfoot> 
                    </table>
                </div>
            </div>
            <!--REVIEW ORDER END-->
        </div>
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