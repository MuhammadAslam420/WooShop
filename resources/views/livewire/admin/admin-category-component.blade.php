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
                     <h3>All Categories</h3>

                     </div>
                     <div class="col-md-6">
                     <h1><a href="{{route('admin.addcategory')}}" class="btn btn-primary pull-right">Add Category</a></h1>

                     </div>

                 </div>
                </div>
                 <div class="panel-body"> 
                 @if(Session::has('message'))
                <div class="alert alert-warning" role="alert">{{Session::get('message')}}</div>
                @endif
                     <table class="table table-striped">
                         <thead>
                             <tr>
                                 <th>
                                     Id
                                 </th>
                                 <th>
                                     Category
                                 </th>
                                 <th>
                                     Slug
                                 </th>
                                 <th>
                                     Actions

                                 </th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach($categories as $category)
                             <tr>
                                 <td>{{$category->id}}</td>
                                 <td>{{$category->name}}</td>
                                 <td>{{$category->slug}}</td>
                                 <td>
                                     
                                 <a href="{{route('admin.editcategory',['category_slug'=>$category->slug])}}" ><i class="fa fa-edit fa-2x"></i></a>
                                 <a href="#" onclick="confirm('Are You Sure, You want to delete the Category!.') || event.stopImmediatePropagation()" wire:click.prevent="deleteCategory({{$category->id}})" style="margin-left:10px;"><i class= "fa fa-times fa-2x text-danger"></i></a></td>
                             </tr>
                             @endforeach
                         </tbody>

                     </table>
                     {{$categories->links("pagination::bootstrap-4")}}
                 </div>
             </div>

         </div>

     </div>
 </div>

</div>
