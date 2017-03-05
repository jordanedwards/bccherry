<?php
namespace App\Observers;

use App\Cherry;

class CherryObserver
{
    
    /**
     * Listen to the Cherry creating event.
     *
     * @param  Cherry  $Cherry
     * @return void
     */
    public function creating(Cherry $Cherry)
    {
        //code...
    }

     /**
     * Listen to the Cherry created event.
     *
     * @param  Cherry  $Cherry
     * @return void
     */
    public function created(Cherry $Cherry)
    {
        //code...
    }

    /**
     * Listen to the Cherry updating event.
     *
     * @param  Cherry  $Cherry
     * @return void
     */
    public function updating(Cherry $Cherry)
    {
        //code...
    }

    /**
     * Listen to the Cherry updated event.
     *
     * @param  Cherry  $Cherry
     * @return void
     */
    public function updated(Cherry $Cherry)
    {
        //code...
    }

    /**
     * Listen to the Cherry saving event.
     *
     * @param  Cherry  $Cherry
     * @return void
     */
    public function saving(Cherry $Cherry)
    {
        //code...
    }

    /**
     * Listen to the Cherry saved event.
     *
     * @param  Cherry  $Cherry
     * @return void
     */
    public function saved(Cherry $Cherry)
    {
        //code...
    }

    /**
     * Listen to the Cherry deleting event.
     *
     * @param  Cherry  $Cherry
     * @return void
     */
    public function deleting(Cherry $Cherry)
    {
        //code...
    }

    /**
     * Listen to the Cherry deleted event.
     *
     * @param  Cherry  $Cherry
     * @return void
     */
    public function deleted(Cherry $Cherry)
    {
        //code...
    }

    /**
     * Listen to the Cherry restoring event.
     *
     * @param  Cherry  $Cherry
     * @return void
     */
    public function restoring(Cherry $Cherry)
    {
        //code...
    }

    /**
     * Listen to the Cherry restored event.
     *
     * @param  Cherry  $Cherry
     * @return void
     */
    public function restored(Cherry $Cherry)
    {
        //code...
    }
}