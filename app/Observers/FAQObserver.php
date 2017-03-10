<?php
namespace App\Observers;

use App\FAQ;

class FAQObserver
{
    
    /**
     * Listen to the FAQ creating event.
     *
     * @param  FAQ  $FAQ
     * @return void
     */
    public function creating(FAQ $FAQ)
    {
        //code...
    }

     /**
     * Listen to the FAQ created event.
     *
     * @param  FAQ  $FAQ
     * @return void
     */
    public function created(FAQ $FAQ)
    {
        //code...
    }

    /**
     * Listen to the FAQ updating event.
     *
     * @param  FAQ  $FAQ
     * @return void
     */
    public function updating(FAQ $FAQ)
    {
        //code...
    }

    /**
     * Listen to the FAQ updated event.
     *
     * @param  FAQ  $FAQ
     * @return void
     */
    public function updated(FAQ $FAQ)
    {
        //code...
    }

    /**
     * Listen to the FAQ saving event.
     *
     * @param  FAQ  $FAQ
     * @return void
     */
    public function saving(FAQ $FAQ)
    {
        //code...
    }

    /**
     * Listen to the FAQ saved event.
     *
     * @param  FAQ  $FAQ
     * @return void
     */
    public function saved(FAQ $FAQ)
    {
        //code...
    }

    /**
     * Listen to the FAQ deleting event.
     *
     * @param  FAQ  $FAQ
     * @return void
     */
    public function deleting(FAQ $FAQ)
    {
        //code...
    }

    /**
     * Listen to the FAQ deleted event.
     *
     * @param  FAQ  $FAQ
     * @return void
     */
    public function deleted(FAQ $FAQ)
    {
        //code...
    }

    /**
     * Listen to the FAQ restoring event.
     *
     * @param  FAQ  $FAQ
     * @return void
     */
    public function restoring(FAQ $FAQ)
    {
        //code...
    }

    /**
     * Listen to the FAQ restored event.
     *
     * @param  FAQ  $FAQ
     * @return void
     */
    public function restored(FAQ $FAQ)
    {
        //code...
    }
}