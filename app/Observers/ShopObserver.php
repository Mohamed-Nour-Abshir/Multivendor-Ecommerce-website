<?php

namespace App\Observers;

use App\Models\ShopSeller;

class ShopObserver
{
    /**
     * Handle the ShopSeller "created" event.
     *
     * @param  \App\Models\ShopSeller  $shopSeller
     * @return void
     */
    public function created(ShopSeller $shopSeller)
    {
        //
    }

    /**
     * Handle the ShopSeller "updated" event.
     *
     * @param  \App\Models\ShopSeller  $shopSeller
     * @return void
     */
    public function updated(ShopSeller $shopSeller)
    {
        // check if active column is changed from in_active to active 
        if($shopSeller->getOriginal('is_active') == false && $shopSeller->is_active == true){
            //send mail to user that shop activated
            dd('done');
            // Mail::to($shopSeller->owner->email)->send(new ShopActivatedMail($shopSeller));
            //after activation change user role to vendor role
            // $shopSeller->owner->role = 'vendor';
        }
        else{
            dd('error');
        }
    }

    /**
     * Handle the ShopSeller "deleted" event.
     *
     * @param  \App\Models\ShopSeller  $shopSeller
     * @return void
     */
    public function deleted(ShopSeller $shopSeller)
    {
        //
    }

    /**
     * Handle the ShopSeller "restored" event.
     *
     * @param  \App\Models\ShopSeller  $shopSeller
     * @return void
     */
    public function restored(ShopSeller $shopSeller)
    {
        //
    }

    /**
     * Handle the ShopSeller "force deleted" event.
     *
     * @param  \App\Models\ShopSeller  $shopSeller
     * @return void
     */
    public function forceDeleted(ShopSeller $shopSeller)
    {
        //
    }
}
