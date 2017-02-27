<?php
namespace App\Observers;

use App\NewsItem;

class NewsItemObserver
{
    
    /**
     * Listen to the NewsItem creating event.
     *
     * @param  NewsItem  $NewsItem
     * @return void
     */
    public function creating(NewsItem $NewsItem)
    {
        //code...
    }

     /**
     * Listen to the NewsItem created event.
     *
     * @param  NewsItem  $NewsItem
     * @return void
     */
    public function created(NewsItem $NewsItem)
    {
        //code...
    }

    /**
     * Listen to the NewsItem updating event.
     *
     * @param  NewsItem  $NewsItem
     * @return void
     */
    public function updating(NewsItem $NewsItem)
    {
        //code...
    }

    /**
     * Listen to the NewsItem updated event.
     *
     * @param  NewsItem  $NewsItem
     * @return void
     */
    public function updated(NewsItem $NewsItem)
    {
        //code...
    }

    /**
     * Listen to the NewsItem saving event.
     *
     * @param  NewsItem  $NewsItem
     * @return void
     */
    public function saving(NewsItem $NewsItem)
    {
        //code...
    }

    /**
     * Listen to the NewsItem saved event.
     *
     * @param  NewsItem  $NewsItem
     * @return void
     */
    public function saved(NewsItem $NewsItem)
    {
        //code...
    }

    /**
     * Listen to the NewsItem deleting event.
     *
     * @param  NewsItem  $NewsItem
     * @return void
     */
    public function deleting(NewsItem $NewsItem)
    {
        //code...
    }

    /**
     * Listen to the NewsItem deleted event.
     *
     * @param  NewsItem  $NewsItem
     * @return void
     */
    public function deleted(NewsItem $NewsItem)
    {
        //code...
    }

    /**
     * Listen to the NewsItem restoring event.
     *
     * @param  NewsItem  $NewsItem
     * @return void
     */
    public function restoring(NewsItem $NewsItem)
    {
        //code...
    }

    /**
     * Listen to the NewsItem restored event.
     *
     * @param  NewsItem  $NewsItem
     * @return void
     */
    public function restored(NewsItem $NewsItem)
    {
        //code...
    }
}