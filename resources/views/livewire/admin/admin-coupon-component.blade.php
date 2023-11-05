<div>
  <style>
      nav svg{
          height:20px;
      }
      nav .hidden{
          display:block !important;
      }
      th{
          padding:0 40px;
      }
      td{
        padding:0 40px;
      }
  </style>

 <div class="container-fluid">
     <div class="row">
         <div class="col-xl-12 col-md-12 col-sm-6"> 
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <div class="row">
                     <div class="col-md-6 ">
                     <h3>All Coupons</h3>

                     </div>
                     <div class="col-md-6">
                     <h1><a href="{{route('admin.addcoupon')}}" class="btn btn-danger pull-right">Add coupon</a></h1>

                     </div>

                 </div>
                </div>
                 <div class="panel-body"> 
                 @if(Session::has('message'))
                <div class="alert alert-warning" role="alert">{{Session::get('message')}}</div>
                @endif
                     <table class="tabel table-striped">
                         <thead>
                             <tr>
                                 <th>
                                     Id
                                 </th>
                                 <th>
                                     Coupon Code
                                 </th>
                                 <th>
                                    Coupon Type
                                 </th>
                                 <th>
                                    Coupon value
                                 </th>
                                 <th>
                                     Cart Value

                                 </th>
                                 <th>
                                     Expiry Date

                                 </th>
                                 <th>
                                     Actions

                                 </th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach($coupons as $coupon)
                             <tr>
                                 <td>{{$coupon->id}}</td>
                                 <td>{{$coupon->code}}</td>
                                 <td>{{$coupon->type}}</td>
                                 @if($coupon->type == 'fixed')
                                 <td>${{$coupon->value}}</td>
                                 @else
                                 <td>{{$coupon->value}}%</td>
                                @endif
                                <td>{{$coupon->cart_value}}</td>
                                 <td>{{$coupon->expiry_date}}</td>
                                 <td>
                                 <a href="{{route('admin.editcoupon',['coupon_id'=>$coupon->id])}}" ><i class="fa fa-edit fa-2x"></i></a>
                                 <a href="#" onclick="confirm('Are You Sure, You want to delete the Category!.') || event.stopImmediatePropagation()" wire:click.prevent="deleteCoupon({{$coupon->id}})" style="margin-left:10px;"><i class= "fa fa-times fa-2x text-danger"></i></a>
                                </td>
                             </tr>
                             @endforeach
                         </tbody>

    </table>
                 </div>
             </div>

         </div>

     </div>
 </div>

</div>
