@extends('layouts.front')
@section('content')
    

<!-- about -->
<div class="privacy about">
    <h3>Chec<span>kout</span></h3>
    
    
        
    
    <div class="checkout-left">	
        <div class="col-md-4 checkout-left-basket">
            <h4>Continue to basket</h4>
            
            <ul>
                @foreach ($carts as $item)
                <li>{{$item->product_name}} <i>-</i> <span> </span>{{$item->product_quantity}} <span>${{$item->sub_total}} </span></li>
                @endforeach
                <hr>
                <li>Total <i>-</i> <span> ${{$total}}</span></li>
            </ul>
           
        </div>
        <div class="col-md-8 address_form_agile">
              <h4>Add a new Details</h4>
        <form action="{{ route('order.submit') }}" method="post" class="creditly-card-form agileinfo_form">
            @csrf
                            <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                                <div class="information-wrapper">
                                    <div class="first-row form-group">
                                        <div class="controls">
                                            <label class="control-label">Full name: </label>
                                            <input class="billing-address-name form-control" type="text" name="name" value="{{$users->name}}" placeholder="Full name">
                                        </div>
                                        <div class="w3_agileits_card_number_grids">
                                            <div class="w3_agileits_card_number_grid_left">
                                                <div class="controls">
                                                    <label class="control-label">Mobile number:</label>
                                                    <input class="form-control" type="text" value="{{$users->contact}}" placeholder="Mobile number">
                                                </div>
                                            </div>
                                           
                                            <div class="clear"> </div>
                                        </div>
                                        <div class="controls">
                                            <label class="control-label">Address </label>
                                         <input class="form-control" type="text" value="{{$users->address}}" placeholder="Town/City">
                                        </div>
                                     
                                    </div>
                                    <button class="submit check_out">Cash on Delivery</button>
                                </div>
                            </section>
        </form>
                        <br>
                        <hr>
                        
                        
                        <form action="{{ route('order.submit') }}" method="post" id="name_form">
                            @csrf
                            <button href=""  id="paypal-button"  class="btn btn-default btn-sm" type="submit"></button>
                        </form>
                    {{-- <div class="checkout-right-basket">
                    <a href="payment.html">Online Payment <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a> --}}
              </div>
            </div>
    
        <div class="clearfix"> </div>
        
    </div>

</div>
<!-- //about -->
</div>
<div class="clearfix"></div>
</div>
<!-- //banner -->


<!-- newsletter -->
<div class="newsletter">
<div class="container">
    <div class="w3agile_newsletter_left">
        <h3>sign up for our newsletter</h3>
    </div>
    <div class="w3agile_newsletter_right">
        <form action="#" method="post">
            <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
            <input type="submit" value="subscribe now">
        </form>
    </div>
    <div class="clearfix"> </div>
</div>
</div>
<!-- //newsletter -->
@endsection

@push('js')


<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
  paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'Ae5QX87vAkLzQgprkrYoOoJSDsbYpyOl4V2dvICGRn7RRMYjFzHGu6-uVU4y8mwjxnvmf3nl6IJnutx2',
      production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'large',
      color: 'gold',
      shape: 'pill',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function(data, actions) {
      return actions.payment.create({
        transactions: [{
          amount: {
            total: {{ $total }},
            currency: 'USD'
          }
        }]
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.payment.execute().then(function() {
        // Show a confirmation message to the buyer
            var form=document.getElementById('name_form');
            form.submit();
        window.alert('Thank you for your purchase!');
     
        
      });
    }
  }, '#paypal-button');

</script>

@endpush