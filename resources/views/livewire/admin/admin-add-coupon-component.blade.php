<div>
  

 <div class="container" style="padding:30px 0;">
     <div class="row">
         <div class="col-xl-12 col-md-12 col-sm-6"> 
             <div class="panel panel-default">
                 <div class="panel-heading">
                 <div class="row">
                     <div class="col-md-6">
                     <h3>Add Coupon</h3>
                     </div>
                     <div class="col-md-6">
                         <a href="{{route('admin.coupons')}}" class="btn btn-success pull-right">All Coupons</a>

                    </div>
                 </div>
                </div>
                @if(Session::has('message'))
                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                @endif
                 <div class="panel-body"> 
                     <form  class="form-horizontal" wire:submit.prevent="storeCoupon">
                         
                         <div class="form-group">
                             <label for="" class="col-md-4 control-label">Coupon Name</label>
                             <div class="col-md-4">
                             <input type="text" placeholder="Coupon Name"  class="form-control input-md" wire:model="code" >
                             @error('code') <p class="text-danger">{{$message}}</p> @enderror

                             </div>
                         </div>
                         <div class="form-group">
                             <label for="" class="col-md-4 control-label">Coupon type</label>
                             <div class="col-md-4">
                                 <select name="" id="" class="form-control" wire:model="type">  
                                 <option value="">Select</option>
                                 <option value="0">fixed</option>
                                     <option value="1">percent</option>
                                 </select>
                             @error('type') <p class="text-danger">{{$message}}</p> @enderror


                             </div>
                         </div>
                         <div class="form-group">
                             <label for="" class="col-md-4 control-label">Coupon value</label>
                             <div class="col-md-4">
                             <input type="text" placeholder="Coupon value"  class="form-control input-md" wire:model="value">
                             @error('value') <p class="text-danger">{{$message}}</p> @enderror


                             </div>
                         </div>
                         <div class="form-group">
                             <label for="" class="col-md-4 control-label">Cart value</label>
                             <div class="col-md-4">
                             <input type="text" placeholder="Cart value"  class="form-control input-md" wire:model="cart_value">
                             @error('cart_value') <p class="text-danger">{{$message}}</p> @enderror


                             </div>
                         </div>
                         <div class="form-group" >
                             <label for="" class="col-md-4 control-label">Expiry Date</label>
                             <div class="col-md-4" >
                             <input type="date"  placeholder="expiry Date" class="form-control input-md" wire:model="expiry_date">
                             @error('expiry_date') <p class="text-danger">{{$message}}</p> @enderror


                             </div>
                         </div>
                         <div class="form-group">
                             <label for="" class="col-md-4 control-label"></label>
                             <div class="col-md-4">
                             <button type="submit"  class="btn btn-info">Submit</button>

                             </div>
                         </div>

                     </form>
                 </div>
             </div>

         </div>

     </div>
 </div>

</div>
