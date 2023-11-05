<div>
   <div class="container" style="padding:30px 0;">
       <div class="row">
           <div class="col-md-12">
               <div class="panel panel-default">
                   <div class="panel-heading">
                       <div class="row">
                           <div class="col-md-6">
                               <h3>Edit Slide</h3>
                           </div>
                           <div class="col-md-6">
                           <h3><a href="{{route('admin.homeslider')}}" class="btn btn-info pull-right">All Slides</a></h3>
                           </div>

                       </div>
                
                       <div class="panel-body">
                       @if(Session::has('message'))
                <div class="alert alert-warning" role="alert">{{Session::get('message')}}</div>
                @endif
                           <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateSlide">
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Title</label>
                                   <div class="col-md-4">
                                       <input type="text" class="form-control input-md" placeholder="Title" wire:model="title"  />
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Subtitle</label>
                                   <div class="col-md-4">
                                       <input type="text" class="form-control input-md" placeholder="Subtitle" wire:model="subtitle"/>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Price</label>
                                   <div class="col-md-4">
                                       <textarea  class="form-control" placeholder="price" wire:model="price"></textarea>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Link</label>
                                   <div class="col-md-4">
                                       <textarea  class="form-control" placeholder="link" wire:model="link"></textarea>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Image</label>
                                   <div class="col-md-4">
                                       <input type="file" class="input-file" wire:model="newimage"/>
                                      @if($newimage)
                                      <img src="{{$newimage->temporaryurl()}}" width="120">
                                      @else
                                      <img src="{{asset('assets/images/sliders')}}/{{$image}}" width="120">
                                      @endif
                                      
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Status</label>
                                   <div class="col-md-4">
                                       <select name="" id="" class="form-control" wire:model="status">
                                           <option value="0">Inactive</option>
                                           <option value="1">Active</option>
                                       </select>
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
