@extends('layouts.front')

@section('content')

<div class="w3l_banner_nav_left">
    <nav class="navbar nav_bottom">
     <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header nav_2">
          <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> 
       </div>  
       <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
            @foreach ($catg as $item)

            <ul class="nav navbar-nav nav_1">
                <li><a href="{{route('front.details',$item->id)}}">{{$item->name}}</a></li>
                
            </ul>
            @endforeach
         </div><!-- /.navbar-collapse -->
    </nav> 
</div> 

<div class="w3l_banner_nav_right">
    <div >
        <img src="{{asset('assets/images/service/'. $categ->picture)}}" style="height: 300px" border-radius= 50%; width="1075px" >
        {{-- <h4>Your Pet Favourite Food</h4>
        <p>Sint occaecat cupidatat non proident</p>
        <a href="single.html">Shop Now</a> --}}
    </div>
    <div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_sub">
      
        <h3 class="w3l_fruit" style="color:white">{{$categ->name}}</h3>
        
        <div class="w3ls_w3l_banner_nav_right_grid1 w3ls_w3l_banner_nav_right_grid1_veg">
            @foreach ($categories as $item)
            <div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asdfdfd">
                <div class="hover14 column">
                <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                    <div class="agile_top_brand_left_grid_pos">
                        <img src="{{asset('assets/user/images/offer.png')}}" alt=" " class="img-responsive" />
                    </div>
                    
                    <div class="agile_top_brand_left_grid1">
                        <figure>
                            <div class="snipcart-item block">
                                <div class="snipcart-thumb">
                                    <a href="single.html"><img src="{{asset('assets/images/service/'. $item->picture)}}" alt=" " class="img-responsive" /></a>
                                    <center><p>{{$item->name}}</p></center>
                                    <center><h4> $ {{$item->price}}</span></h4></center>
                                </div>
                                <div class="snipcart-details">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="business" value=" " />
                                            <input type="hidden" name="item_name" value="can - tuna for cats" />
                                            <input type="hidden" name="amount" value="8.00" />
                                            <input type="hidden" name="discount_amount" value="1.00" />
                                            <input type="hidden" name="currency_code" value="USD" />
                                            <input type="hidden" name="return" value=" " />
                                            <input type="hidden" name="cancel_return" value=" " />
                                            <input type="submit" name="submit" value="Add to cart" class="button" />
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </figure>
                    </div>
                    
                </div>
                
                </div>
            </div>
            @endforeach
          
        </div>
    </div>
</div>

@endsection