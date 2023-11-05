
<div>

        <div class="container " style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                      <h1>All Orders details</h1>
                                </div>
                                <div class="panel-body">
                                    @if(Session::has('order_msg'))
                                    <div class="alert alert-success">{{Session::get('order_msg')}}</div>
                                    @endif
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Order_Id</th>
                                                <th>Subtotal</th>
                                                <th>Discount</th>
                                                <th>Tax</th>
                                                <th>Total</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>ZipCode</th>
                                                <th>Status</th>
                                                <th> Order Date</th>
                                                <th colspan="2" class="text-center"> Action</th>
                                                
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($orders as $order)
                                            <tr>
                                                <td>{{$order->id}}</td>
                                                <td>Rs.{{$order->subtotal}}</td>
                                                <td>Rs.{{$order->discount}}</td>
                                                <td>Rs.{{$order->tax}}</td>
                                                <td>Rs.{{$order->total}}</td>
                                                <td>{{$order->firstname}}</td>
                                                <td>{{$order->lastname}}</td>
                                                <td>{{$order->email}}</td>
                                                <td>{{$order->mobile}}</td>
                                                <td>{{$order->zipcode}}</td>
                                                <td>{{$order->status}}</td>
                                                <td>{{$order->created_at}}</td>
                                                <td><a href="{{route('admin.orderdetails',['order_id'=>$order->id])}}" class="btn btn-info btn-sm"><i class="fas fa-plus-circle"></i></a>
                                                <a href="#"  wire:click.prevent='updateOrderStatus({{$order->id}},"delivered")' class="btn btn-success btn-sm"><i class="fas fa-check"></i></a><br>
                                          <a  href="#"  wire:click.prevent='updateOrderStatus({{$order->id}},"canceled")' class="btn btn-danger btn-sm"><i class="fas fa-times"></i></a>
                                         </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{$orders->links("pagination::bootstrap-4")}}

                                </div>
                                </div>
                                </div>
                                </div>

        </div>

    </div>
