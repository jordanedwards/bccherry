<?php
namespace App\Observers;

use App\Member as member;

class memberObserver
{
    
    /**
     * Listen to the member creating event.
     *
     * @param  member  $member
     * @return void
     */
    public function creating(member $member)
    {
        //code...
    }

     /**
     * Listen to the member created event.
     *
     * @param  member  $member
     * @return void
     */
    public function created(member $member)
    {
        //code...
    }

    /**
     * Listen to the member updating event.
     *
     * @param  member  $member
     * @return void
     */
    public function updating(member $member)
    {
        //code...
    }

    /**
     * Listen to the member updated event.
     *
     * @param  member  $member
     * @return void
     */
    public function updated(member $member)
    {
        //code...
    }

    /**
     * Listen to the member saving event.
     *
     * @param  member  $member
     * @return void
     */
    public function saving(member $member)
    {
        //code...
    }

    /**
     * Listen to the member saved event.
     *
     * @param  member  $member
     * @return void
     */
    public function saved(member $member)
    {
        //code...
    }

    /**
     * Listen to the member deleting event.
     *
     * @param  member  $member
     * @return void
     */
    public function deleting(member $member)
    {
        //code...
    }

    /**
     * Listen to the member deleted event.
     *
     * @param  member  $member
     * @return void
     */
    public function deleted(member $member)
    {
        //code...
    }

    /**
     * Listen to the member restoring event.
     *
     * @param  member  $member
     * @return void
     */
    public function restoring(member $member)
    {
        //code...
    }

    /**
     * Listen to the member restored event.
     *
     * @param  member  $member
     * @return void
     */
    public function restored(member $member)
    {
        //code...
    }
}