<div>
  <style>
      nav svg{
          height:20px;
      }
      nav .hidden{
          display:block !important;
      }
      th{
          padding:0 30px;
      }
      td{
        padding:0 30px;
      }
  </style>

 <div class="container" style="padding:30px 0;">
     <div class="row">
         <div class="col-xl-12 col-md-12 col-sm-6"> 
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <div class="row">
                     <div class="col-md-6 ">
                     <h3>All products</h3>

                     </div>
                     <div class="col-md-6">
                     <a href="{{route('admin.addproduct')}}" class="btn btn-primary pull-right">Add Products</a>

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
                                    Product Image
                                 </th>
                                 <th>
                                    Product Name
                                 </th>
                                 <th>
                                    Stock
                                 </th>
                                 <th>
                                   Price

                                 </th>
                                 <th>
                                   Sale Price

                                 </th>
                                 <th>
                                 Category

                                 </th>
                                 <th>
                                   Date

                                 </th>
                                 <th>
                                   Action

                                 </th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach($products as $product)
                             <tr>
                                 <td>{{$product->id}}</td>
                                 <td><img src="{{asset('assets/images/shoes')}}/{{$product->image}}" style="width:50px; height:50px;"></td>
                                 <td>{{$product->name}}</td>
                                 <td>{{$product->stock_status}}</td>
                                 <td>{{$product->regular_price}}</td>
                                 <td>{{$product->sale_price}}</td>
                                 <td>{{$product->category->name}}</td>
                                 <td>{{$product->created_at}}</td>
                                 <td>
                                 <a href="{{route('admin.editproduct',['product_slug'=>$product->slug])}}" ><i class="fa fa-edit fa-1.5x text-info"></i></a>
                                 <a href="#" onclick="confirm('Are You Sure, You want to delete the Product!.') || event.stopImmediatePropagation()" wire:click.prevent="deleteProduct({{$product->id}})"><i class= "fa fa-times fa-1.5x text-danger"></i></a></td>
                             </tr>
                             @endforeach
                         </tbody>

                     </table>
                     {{$products->links("pagination::bootstrap-4")}}
                 </div>
             </div>

         </div>

     </div>
 </div>

</div>
