<div>
 <div class="container" style="padding:30px  0;">
 
 <div class="row">
     <div class="col-md-12">
         <div class="panel panel-default">
         <div class="panel-heading">
           <div class="row">
               <div class="col-md-6">
           Order details
           </div>
           <div class="col-md-6">
           <a href="{{route('admin.orders')}}" class="btn btn-info btn-medium  pull-right">All Orders</a>
           </div>

           </div>
             </div> 
             <div class="panel-body">
              <table  class="table">
                  <tr>
                      <th>Order Id</th>
                      <td>{{$order->id}}</td>
                  </tr>
                  <tr>
                      <th>Status</th>
                      <td>{{$order->status}}</td>
                  </tr>
                  <tr>
                      <th>Order Date</th>
                      <td>{{$order->created_at}}</td>
                      @if($order->status ==='delivered')
                      <th>Delivery Date</th>
                      <td>{{$order->delivered_date}}</td>
                      @elseif($order->status === 'canceled')
                      <th>Canceled Date</th>
                      <td>{{$order->canceled_date}}</td>
                      @endif
                  </tr>

              </table>
             </div>
</div>
</div>
</div>
 <div class="row">
     <div class="col-md-12">
         <div class="panel panel-default">
             <div class="panel-heading">
           <div class="row">
               <div class="col-md-6">
           Order details
           </div>
           <div class="col-md-6">
           <a href="{{route('admin.orders')}}" class="btn btn-info btn-medium  pull-right">All Orders</a>
           </div>

           </div>
             </div>
             <div class="panel-body">
             <div class="wrap-iten-in-cart">
					<h3 class="box-title">Products Name</h3>
					<ul class="products-cart">
						@foreach ($order->orderItems as $item)
						<li class="pr-cart-item">
							<div class="product-image">
								<figure><img src="{{asset('assets/images/shoes') }}/{{$item->product->image}}" alt="{{$item->product->name}}"></figure>
							</div>
							<div class="product-name">
								<a class="link-to-product" href="{{route('product.details',['slug'=>$item->product->slug])}}">{{$item->product->name}}</a>
							</div>
							<div class="price-field produtc-price"><p class="price">Rs.{{$item->price}}</p></div>
							<div class="quantity">
							<h4>{{$item->quantity}}</h4>	
							</div>
							<div class="price-field sub-total"><p class="price">Rs.{{$item->price * $item->quantity}}</p></div>
							
						</li> 
						@endforeach 
																			
						</ul>
						
					</div>
                    <div class="summary">
                    <div class="order-summary">
                    <h4 class="title-box">Order Summary</h4>
                    <p class="summary-info"><span class="title">Subtotal</span><b class="index">Rs.{{$order->subtotal}}</b></p>
                    <p class="summary-info"><span class="title">Tax</span><b class="index">Rs.{{$order->tax}}</b></p>
                    <p class="summary-info"><span class="title">Shipping Charges</span><b class="index">Free Shipping</b></p>
                    <p class="summary-info"><span class="title">Total</span><b class="index">Rs.{{$order->total}}</b></p>


                       </div>
                    </div>
             </div>
         </div>

     </div>

 </div>
 <div class="row">
     <div class="col-md-12">
         <div class="panel panel-default">
             <div class="panel-heading">
                 <h2>Billing Details</h2>

             </div>
             <div class="panel-body">
                 <table class="table">
                     
                         <tr>
                             <th>First Name</th>
                             <td>{{$order->firstname}}</td>
                             
                             <th>Last Name</th>
                             <td>{{$order->lastname}}</td>
                             </tr>
                             <tr>
                             <th>Email </th>
                             <td>{{$order->email}}</td>
                            
                             <th>Mobile</th>
                             <td>{{$order->mobile}}</td>
                             </tr>
                             <tr>
                             <th>Address</th>
                             <td>{{$order->line1}}  {{$order->line2}}</td>
                            
                             <th>City</th>
                             <td>{{$order->city}}</td>
                             </tr>
                             <tr>
                             <th>Province</th>
                             <td>{{$order->province}}</td>
                            
                             <th>Country</th>
                             <td>{{$order->country}}</td>
                           </tr>
                             <tr>
                             <th>ZipCode</th>
                             <td>{{$order->zipcode}}</td>

                         </tr>
                
                 </table>

             </div>
         </div>

     </div>

 </div>
 @if($order->ship_to_different)
 <div class="row">
     <div class="col-md-12">
         <div class="panel panel-default">
             <div class="panel-heading">
                 <h2>Shipping Details</h2>


             </div>
             <div class="panel-body">
             <table class="table">
                     
                     <tr>
                         <th>First Name</th>
                         <td>{{$order->shipping->firstname}}</td>
                         
                         <th>Last Name</th>
                         <td>{{$order->shipping->lastname}}</td>
                         </tr>
                         <tr>
                         <th>Email </th>
                         <td>{{$order->shipping->email}}</td>
                        
                         <th>Mobile</th>
                         <td>{{$order->shipping->mobile}}</td>
                         </tr>
                         <tr>
                         <th>Address</th>
                         <td>{{$order->shipping->line1}}  {{$order->shipping->line2}}</td>
                        
                         <th>City</th>
                         <td>{{$order->shipping->city}}</td>
                         </tr>
                         <tr>
                         <th>Province</th>
                         <td>{{$order->shipping->province}}</td>
                        
                         <th>Cooutry</th>
                         <td>{{$order->shipping->country}}</td>
                       </tr>
                         <tr>
                         <th>ZipCode</th>
                         <td>{{$order->shipping->zipcode}}</td>

                     </tr>
            
             </table>

             </div>
         </div>

     </div>

 </div>
 @endif
 <div class="row">
     <div class="col-md-12">
         <div class="panel panel-default">
             <div class="panel-heading">
            <h2>Transaction Details</h2>

             </div>
             <div class="panel-body">
             <table class="table">
                     
                     <tr>
                         <th>Transaction Mode</th>
                         <td>{{$order->transaction->mode}}</td>
                         </tr>
                         <tr>
                         <th>Status</th>
                         <td>{{$order->transaction->status}}</td>
                         </tr>

                         <th>Transaction Date</th>
                         <td>{{$order->transaction->created_at}}</td>
                         </tr>
                         
                        
                        
            
             </table>

             </div>
         </div>

     </div>

 </div>

 </div>
</div>
