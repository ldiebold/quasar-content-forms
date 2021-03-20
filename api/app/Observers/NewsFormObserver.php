<?php

namespace App\Observers;

use App\Models\NewsForm;

class NewsFormObserver
{
    /**
     * Handle the NewsForm "created" event.
     *
     * @param  \App\Models\NewsForm  $newsForm
     * @return void
     */
    public function created(NewsForm $newsForm)
    {
        $trello = app('trello');
        $newsCardId = config('trello.list_ids.news');
        $trello->addCardToList($newsCardId, [
            'name' => "$newsForm->title > $newsForm->author",
            'desc' => $newsForm->comments,
            'urlSource' => $newsForm->link
        ]);
    }

    /**
     * Handle the NewsForm "updated" event.
     *
     * @param  \App\Models\NewsForm  $newsForm
     * @return void
     */
    public function updated(NewsForm $newsForm)
    {
        //
    }

    /**
     * Handle the NewsForm "deleted" event.
     *
     * @param  \App\Models\NewsForm  $newsForm
     * @return void
     */
    public function deleted(NewsForm $newsForm)
    {
        //
    }

    /**
     * Handle the NewsForm "restored" event.
     *
     * @param  \App\Models\NewsForm  $newsForm
     * @return void
     */
    public function restored(NewsForm $newsForm)
    {
        //
    }

    /**
     * Handle the NewsForm "force deleted" event.
     *
     * @param  \App\Models\NewsForm  $newsForm
     * @return void
     */
    public function forceDeleted(NewsForm $newsForm)
    {
        //
    }
}
