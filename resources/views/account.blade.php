@section('title','Click & Buy')
@extends('layouts.master')
@section('style')
{{-- {{Html::style('assets/public_css/index.css')}} --}}
<style>

</style>
@endsection

@section('content')

<div class="b-page_title b-page_title_default text-center">
  <h1 class="b-entry_title"><span>My Account</span></h1>  
  <div class="b-breadcrumbs">
    <a href="http://181.224.145.184/~jthemes0/demothemes/html/basel/index.html">Home</a>
    <span>My Account</span>
  </div>
</div> 
<section id="b-my_account">
  <div class="container b-my_account">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12"> 
        <div class="b-auth_section b-auth_login">
          <h2><i class="icon-login icons"></i> Login</h2>
          <form action="http://181.224.145.184/~jthemes0/demothemes/html/basel/my-account.html#">
              <div class="form-group">
                <label for="">Username or email address <span class="b-required">*</span></label>
                <input type="email" name="" value="" id="">
              </div>
              <div class="form-group">
                <label for="">Password <span class="b-required">*</span></label>
                <input type="password" name="" value="" id="">
              </div>
              <div class="form-group clearfix">
                <label class="pull-left"><input name="" type="checkbox" id="" value=""> Remember me</label>
                <a href="http://181.224.145.184/~jthemes0/demothemes/html/basel/my-account.html#" class="pull-right b-lost_password"><i class="icon-support icons"></i>  Lost your password?</a>
              </div>
              <button type="submit" class="btn" id="">Login</button>  
            </form>
        </div>
        <div class="b-auth_section b-auth_register" style="display: none;">
          <h2><i class="icon-user icons"></i> Register</h2>
          <form action="http://181.224.145.184/~jthemes0/demothemes/html/basel/my-account.html#">
              <div class="form-group">
              <label for="">Username<span class="b-required">*</span></label>
              <input type="text" name="" value="" id="">
            </div>
            <div class="form-group">
              <label for="">Email address <span class="b-required">*</span></label>
              <input type="email" name="" value="" id="">
            </div>
            <div class="form-group">
              <label for="">Password <span class="b-required">*</span></label>
              <input type="password" name="" value="" id="">
            </div> 
            <button type="submit" class="btn" id="">Register</button> 
            </form>
        </div>
      </div>  
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12"> 
        <div class="b-auth_text text-center b-auth_text_register">
          <h3>Register</h3>
          <p>Registering for this site allows you to access your order status and history. Just fill in the fields below, and we’ll get a new account set up for you in no time. We will only ask you for information necessary to make the purchase process faster and easier.</p>
          <a href="javascript:;" class="btn" id="b-register_but">Register</a>
        </div>
        <div class="b-auth_text text-center b-auth_text_login" style="display: none;">
          <h3>Login</h3>
          <p>Registering for this site allows you to access your order status and history. Just fill in the fields below, and we’ll get a new account set up for you in no time. We will only ask you for information necessary to make the purchase process faster and easier.</p>
          <a href="javascript:;" class="btn" id="b-login_but">Login</a>
        </div>
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