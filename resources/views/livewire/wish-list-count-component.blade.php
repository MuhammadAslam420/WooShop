<div class="wrap-icon-section wishlist">
	<a href="{{route('product.wishlist')}}" class="link-direction">
	   <i class="fa fa-heart" aria-hidden="true" style="color:white;"></i>
			<div class="left-info">
			@if(Cart::instance('wishlist')->count() >0)
				<span class="index" style="color:white;">{{Cart::instance('wishlist')->count()}} item</span>
			@endif
				<span class="title" style="color:white;">Wishlist</span>
									
			</div>
	</a>
</div>