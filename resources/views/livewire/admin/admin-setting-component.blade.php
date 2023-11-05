<div>
   <div class="container" style="padding:30px 0;">
   <div class="row">
       <div class="col-md-12">
           <div class="panel panel-default">
               <div class="panel-heading">
                   Settings

               </div>
               <div class="panel-body">
                   @if(Session::has('setting_msg'))
                   <div class="alert alert-success" role="alert">{{Session::get('setting_msg')}}</div>
                   @endif
                   <form class="form form-horizontal" wire:submit.prevent="saveSetting">
                       <div class="form-group">
                           <label for="" class="col-md-4 label-control">Email</label>
                           <div class="col-md-6">
                               <input type="email" placeholder="email" class="form-control input-md" wire:model="email"/>
                               @error('email') <div class="alert alert-danger" >{{$message}}</div> @enderror
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="" class="col-md-4 label-control">Phone</label>
                           <div class="col-md-6">
                               <input type="text" placeholder="phone" class="form-control input-md" wire:model="phone"/>
                               @error('phone') <div class="alert alert-danger" >{{$message}}</div> @enderror
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="" class="col-md-4 label-control">Phone2</label>
                           <div class="col-md-6">
                               <input type="text" placeholder="Phone2" class="form-control input-md" wire:model="phone2"/>
                               @error('phone2') <div class="alert alert-danger" >{{$message}}</div> @enderror
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="" class="col-md-4 label-control">Address</label>
                           <div class="col-md-6">
                               <input type="text" placeholder="address" class="form-control input-md" wire:model="address"/>
                               @error('address') <div class="alert alert-danger" >{{$message}}</div> @enderror
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="" class="col-md-4 label-control">Map</label>
                           <div class="col-md-6">
                               <input type="text" placeholder="address" class="form-control input-md" wire:model="map"/>
                               @error('map') <div class="alert alert-danger" >{{$message}}</div> @enderror
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="" class="col-md-4 label-control">facebook</label>
                           <div class="col-md-6">
                               <input type="text" placeholder="Facebook" class="form-control input-md" wire:model="facebook"/>
                               @error('facebook') <div class="alert alert-danger" >{{$message}}</div> @enderror
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="" class="col-md-4 label-control">Twitter</label>
                           <div class="col-md-6">
                               <input type="text" placeholder="twitter" class="form-control input-md" wire:model="twitter"/>
                               @error('twitter') <div class="alert alert-danger" >{{$message}}</div> @enderror
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="" class="col-md-4 label-control">Pinterest</label>
                           <div class="col-md-6">
                               <input type="text" placeholder="pinterest" class="form-control input-md" wire:model="pinterest"/>
                               @error('pinterest') <div class="alert alert-danger" >{{$message}}</div> @enderror
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="" class="col-md-4 label-control">Instagram</label>
                           <div class="col-md-6">
                               <input type="text" placeholder="instagram" class="form-control input-md" wire:model="instagram"/>
                               @error('instagram') <div class="alert alert-danger" >{{$message}}</div> @enderror
                           </div>
                           </div>
                           <div class="form-group">
                           <label for="" class="col-md-4 label-control">Youtube</label>
                           <div class="col-md-6">
                               <input type="text" placeholder="address" class="form-control input-md" wire:model="youtube"/>
                               @error('youtube') <div class="alert alert-danger" >{{$message}}</div> @enderror
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="" class="col-md-4 label-control"></label>
                           <div class="col-md-6">
                               <button type="submit"  class="btn btn-info" >Save</button>
                           </div>
                       </div>
                       
                   </form>

               </div>
           </div>

       </div>
   </div>

   </div>
</div>
