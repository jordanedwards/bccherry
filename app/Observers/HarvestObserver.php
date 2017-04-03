<?php
namespace App\Observers;

use App\Harvest;

class HarvestObserver
{
    
    /**
     * Listen to the Harvest creating event.
     *
     * @param  Harvest  $Harvest
     * @return void
     */
    public function creating(Harvest $Harvest)
    {
        //code...
    }

     /**
     * Listen to the Harvest created event.
     *
     * @param  Harvest  $Harvest
     * @return void
     */
    public function created(Harvest $Harvest)
    {
        //code...
    }

    /**
     * Listen to the Harvest updating event.
     *
     * @param  Harvest  $Harvest
     * @return void
     */
    public function updating(Harvest $Harvest)
    {
        //code...
    }

    /**
     * Listen to the Harvest updated event.
     *
     * @param  Harvest  $Harvest
     * @return void
     */
    public function updated(Harvest $Harvest)
    {
        //code...
    }

    /**
     * Listen to the Harvest saving event.
     *
     * @param  Harvest  $Harvest
     * @return void
     */
    public function saving(Harvest $Harvest)
    {
        //code...
    }

    /**
     * Listen to the Harvest saved event.
     *
     * @param  Harvest  $Harvest
     * @return void
     */
    public function saved(Harvest $Harvest)
    {
        //code...
    }

    /**
     * Listen to the Harvest deleting event.
     *
     * @param  Harvest  $Harvest
     * @return void
     */
    public function deleting(Harvest $Harvest)
    {
        //code...
    }

    /**
     * Listen to the Harvest deleted event.
     *
     * @param  Harvest  $Harvest
     * @return void
     */
    public function deleted(Harvest $Harvest)
    {
        //code...
    }

    /**
     * Listen to the Harvest restoring event.
     *
     * @param  Harvest  $Harvest
     * @return void
     */
    public function restoring(Harvest $Harvest)
    {
        //code...
    }

    /**
     * Listen to the Harvest restored event.
     *
     * @param  Harvest  $Harvest
     * @return void
     */
    public function restored(Harvest $Harvest)
    {
        //code...
    }
}