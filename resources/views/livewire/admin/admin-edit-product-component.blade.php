<div>
   <div class="container" style="padding:30px 0;">
       <div class="row">
           <div class="col-md-12">
               <div class="panel panel-default">
                   <div class="panel-heading">
                       <div class="row">
                           <div class="col-md-6">
                               <h3>Edit Product</h3>
                           </div>
                           <div class="col-md-6">
                           <h3><a href="{{route('admin.products')}}" class="btn btn-info pull-right">All Products</a></h3>
                           </div>

                       </div>
                
                       <div class="panel-body">
                       @if(Session::has('message'))
                <div class="alert alert-warning" role="alert">{{Session::get('message')}}</div>
                @endif
                           <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateProduct">
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Product Name</label>

                                   <div class="col-md-4">
                                       <input type="text" class="form-control input-md" placeholder="Product Name" wire:model="name" wire:keyup="generateslug"/>
                                       @error('name') <p class="text-danger">{{$message}}</p>@enderror
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Product Slug</label>
                                   <div class="col-md-4">
                                       <input type="text" class="form-control input-md" placeholder="Product Slug" wire:model="slug"/>
                                       @error('slug') <p class="text-danger">{{$message}}</p>@enderror

                                    </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Short Description</label>
                                   <div class="col-md-4" wire:ignore>
                                       <textarea  class="form-control" id="short_description" placeholder="Short Description" wire:model="short_description"></textarea>
                                       @error('short_description') <p class="text-danger">{{$message}}</p>@enderror

                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Description</label>
                                   <div class="col-md-4" wire:ignore>
                                       <textarea  class="form-control" id="description" placeholder="Description" wire:model="description"></textarea>
                                       @error('description') <p class="text-danger">{{$message}}</p>@enderror

                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Regular Price</label>
                                   <div class="col-md-4">
                                       <input type="text" class="form-control input-md" placeholder="Regular Price" wire:model="regular_price"/>
                                       @error('regular_price') <p class="text-danger">{{$message}}</p>@enderror

                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Sale price</label>
                                   <div class="col-md-4">
                                       <input type="text" class="form-control input-md" placeholder="Sale price" wire:model="sale_price"/>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">SKU</label>
                                   <div class="col-md-4">
                                       <input type="text" class="form-control input-md" placeholder="SKU" wire:model="SKU"/>
                                       @error('SKU') <p class="text-danger">{{$message}}</p>@enderror

                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Stock</label>
                                   <div class="col-md-4">
                                       <select name="" id="" class="form-control" wire:model="stock_status">
                                           <option value="instock">InStock</option>
                                           <option value="outofstock">Out of Stock</option>
                                       </select>
                                       @error('stock_status') <p class="text-danger">{{$message}}</p>@enderror

                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Featured</label>
                                   <div class="col-md-4">
                                       <select name="" id="" class="form-control" wire:model="featured">
                                           <option value="0">No</option>
                                           <option value="1">Yes</option>
                                       </select>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Quantity</label>
                                   <div class="col-md-4">
                                       <input type="text" class="form-control input-md" placeholder="Quantity" wire:model="quantity">
                                       @error('quantity') <p class="text-danger">{{$message}}</p>@enderror

                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Product Image</label>
                                   <div class="col-md-4">
                                       <input type="file" class="input-file" wire:model="newimage"/>
                                       @if($newimage)
                                       <img src="{{$newimage->temporaryurl()}}" width="120"/>

                                       @else
                                       <img src="{{asset('assets/images/shoes')}}/{{$image}}" width="120"/>
                                       @endif
                                       @error('newimage') <p class="text-danger">{{$message}}</p>@enderror

                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Product Gallery</label>
                                   <div class="col-md-4">
                                       <input type="file" class="input-file"multiple wire:model="newimages"/>
                                       @if($newimages)
                                        @foreach($newimages as $newimage)
                                        @if($newimage)
                                        <img src="{{$newimage->temporaryurl()}}" width="120"/>

                                        @endif
                                        @endforeach
                                       @else
                                       @foreach($images as $image)
                                       @if($image)
                                       <img src="{{asset('assets/images/shoes')}}/{{$image}}" width="120"/>

                                       @endif
                                       @endforeach
                                       @endif

                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Category</label>
                                   <div class="col-md-4">
                                       <select name="" id="" class="form-control" wire:model="category_id">
                                           <option value="">Select Category</option>
                                           @foreach($categories as $category)
                                           <option value="{{$category->id}}">{{$category->name}}</option>
                                           @endforeach
                                           
                                       </select>
                                       @error('category_id') <p class="text-danger">{{$message}}</p>@enderror

                                   </div>
                               </div>
                      
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label"></label>
                                   <div class="col-md-4">
                                      <button type="submit" class="btn btn-info">Update</button>
                                   </div>
                               </div>

                           </form>

                       </div>

                   </div>

               </div>
           </div>
       </div>
   </div>
</div>
