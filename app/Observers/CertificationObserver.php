<?php
namespace App\Observers;

use App\Certification;

class CertificationObserver
{
    
    /**
     * Listen to the Certification creating event.
     *
     * @param  Certification  $Certification
     * @return void
     */
    public function creating(Certification $Certification)
    {
        //code...
    }

     /**
     * Listen to the Certification created event.
     *
     * @param  Certification  $Certification
     * @return void
     */
    public function created(Certification $Certification)
    {
        //code...
    }

    /**
     * Listen to the Certification updating event.
     *
     * @param  Certification  $Certification
     * @return void
     */
    public function updating(Certification $Certification)
    {
        //code...
    }

    /**
     * Listen to the Certification updated event.
     *
     * @param  Certification  $Certification
     * @return void
     */
    public function updated(Certification $Certification)
    {
        //code...
    }

    /**
     * Listen to the Certification saving event.
     *
     * @param  Certification  $Certification
     * @return void
     */
    public function saving(Certification $Certification)
    {
        //code...
    }

    /**
     * Listen to the Certification saved event.
     *
     * @param  Certification  $Certification
     * @return void
     */
    public function saved(Certification $Certification)
    {
        //code...
    }

    /**
     * Listen to the Certification deleting event.
     *
     * @param  Certification  $Certification
     * @return void
     */
    public function deleting(Certification $Certification)
    {
        //code...
    }

    /**
     * Listen to the Certification deleted event.
     *
     * @param  Certification  $Certification
     * @return void
     */
    public function deleted(Certification $Certification)
    {
        //code...
    }

    /**
     * Listen to the Certification restoring event.
     *
     * @param  Certification  $Certification
     * @return void
     */
    public function restoring(Certification $Certification)
    {
        //code...
    }

    /**
     * Listen to the Certification restored event.
     *
     * @param  Certification  $Certification
     * @return void
     */
    public function restored(Certification $Certification)
    {
        //code...
    }
}