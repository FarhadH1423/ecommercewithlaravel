


@extends('layouts.front') 
@section('content')

@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif


@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

    <table id="cart"  class="table">
        <thead>
        <tr>
            <th style="width: 200px">Product</th>
            <th style="width: 200px">Price</th>
            <th style="width: 20px">Quantity</th>           
            <th style="width: 100px">Total</th>
            <th style="width: 200px">Action</th>
        </tr>
        </thead>
        <tbody>
        
       
            @foreach($carts as $id => $details)
                <?php $total += $details['price'] * $details['quantity'] ?>
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            {{-- <div class="col-sm-3 hidden-xs"><img src="{{ $details['photo'] }}" width="100" height="100" class="img-responsive"/></div> --}}
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['product_name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{ $details['product_price'] }}</td>
                    <td data-th="Quantity">
                        <input type="number"  value="{{ $details['product_quantity'] }}"  readonly/>
                        <a href="{{ route('cart.increment', $details['id']) }}" class="btn btn-primary"> +</a> 
                        <a href="{{ route('cart.decrement', $details['id']) }}" class="btn btn-danger"> -</a> 
                    </td>
                    <td data-th="Action" >${{ $details['product_price'] * $details['product_quantity'] }}</td>
                    <td class="actions" data-th="">                       
                        <a href="{{ route('cart.remove', $details['id']) }}" class="btn btn-danger"> Delete</a> 
                    </td>
                </tr>
            @endforeach
        </tbody>
        
        <tfoot style="float: right">
        {{-- <tr class="text-right">
            <td class="text-center"><strong>Totalhh {{ $total }}</strong></td>
        </tr> --}}
        <tr>
            <td ><h4>Subtotal-  ${{ $total }}</h4></td>
        </tr>
        <tr>
            <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
            <td><a href="{{ route('order.index') }}" class="btn btn-success"><i class="fa fa-angle-right"></i> Checkout</a></td>
            <td colspan="2" class="hidden-xs"></td>
            
        </tr>
        </tfoot>
    </table>
@endsection 