<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Coupon;

class AdminCouponComponent extends Component
{
    public function deleteCoupon($coupon_id)
    {
      $coupon = Coupon::find($coupon_id);
      $coupon->delete();
      session()->flash('message','Coupon Has been Deleted!');
    }
    public function render()
    {
        $coupons = Coupon::All();
        return view('livewire.admin.admin-coupon-component',['coupons'=>$coupons])->layout('layouts.base');
    }
}
