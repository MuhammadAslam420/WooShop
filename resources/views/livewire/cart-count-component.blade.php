<div class="wrap-icon-section minicart">
								<a href="{{route('product.cart')}}" class="link-direction">
									<i class="fa fa-shopping-basket" aria-hidden="true" style="color:white;"></i>
									<div class="left-info">
										@if(Cart::instance('cart')->count()>0)
										<span class="index" style="color:white;">{{Cart::instance('cart')->count()}} items</span>
										@endif
										<span class="title" style="color:white;">CART</span>

									</div>
								</a>
							</div>