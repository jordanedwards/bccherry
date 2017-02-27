<?php
namespace App\Observers;

use App\Feature;

class FeatureObserver
{
    
    /**
     * Listen to the Feature creating event.
     *
     * @param  Feature  $Feature
     * @return void
     */
    public function creating(Feature $Feature)
    {
        //code...
    }

     /**
     * Listen to the Feature created event.
     *
     * @param  Feature  $Feature
     * @return void
     */
    public function created(Feature $Feature)
    {
        //code...
    }

    /**
     * Listen to the Feature updating event.
     *
     * @param  Feature  $Feature
     * @return void
     */
    public function updating(Feature $Feature)
    {
        //code...
    }

    /**
     * Listen to the Feature updated event.
     *
     * @param  Feature  $Feature
     * @return void
     */
    public function updated(Feature $Feature)
    {
        //code...
    }

    /**
     * Listen to the Feature saving event.
     *
     * @param  Feature  $Feature
     * @return void
     */
    public function saving(Feature $Feature)
    {
        //code...
    }

    /**
     * Listen to the Feature saved event.
     *
     * @param  Feature  $Feature
     * @return void
     */
    public function saved(Feature $Feature)
    {
        //code...
    }

    /**
     * Listen to the Feature deleting event.
     *
     * @param  Feature  $Feature
     * @return void
     */
    public function deleting(Feature $Feature)
    {
        //code...
    }

    /**
     * Listen to the Feature deleted event.
     *
     * @param  Feature  $Feature
     * @return void
     */
    public function deleted(Feature $Feature)
    {
        //code...
    }

    /**
     * Listen to the Feature restoring event.
     *
     * @param  Feature  $Feature
     * @return void
     */
    public function restoring(Feature $Feature)
    {
        //code...
    }

    /**
     * Listen to the Feature restored event.
     *
     * @param  Feature  $Feature
     * @return void
     */
    public function restored(Feature $Feature)
    {
        //code...
    }
}