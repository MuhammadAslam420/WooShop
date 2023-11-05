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

 <div class="container" style="padding:30px 0;">
     <div class="row">
         <div class="col-xl-12 col-md-12 col-sm-6"> 
             <div class="panel panel-default">
                 <div class="panel-heading">
                 <div class="row">
                     <div class="col-md-6">
                     <h3>Add Category</h3>
                     </div>
                     <div class="col-md-6">
                         <a href="{{route('admin.categories')}}" class="btn btn-success pull-right">All Categories</a>

                    </div>
                 </div>
                </div>
                @if(Session::has('message'))
                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                @endif
                 <div class="panel-body"> 
                     <form  class="form-horizontal" wire:submit.prevent="storeCategory">
                         
                         <div class="form-group">
                             <label for="" class="col-md-4 control-label">Category Name</label>
                             <div class="col-md-4">
                             <input type="text" placeholder="Category Name"  class="form-control input-md" wire:model="name" wire:keyup="generateslug">
                             @error('name') <p class="text-danger">{{$message}}</p> @enderror

                             </div>
                         </div>
                         <div class="form-group">
                             <label for="" class="col-md-4 control-label">Category Slug</label>
                             <div class="col-md-4">
                             <input type="text" placeholder="Category Slug"  class="form-control input-md" wire:model="slug">
                             @error('slug') <p class="text-danger">{{$message}}</p> @enderror


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
