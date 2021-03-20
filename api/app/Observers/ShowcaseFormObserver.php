<?php

namespace App\Observers;

use App\Models\ShowcaseForm;

class ShowcaseFormObserver
{
    /**
     * Handle the ShowcaseForm "created" event.
     *
     * @param  \App\Models\ShowcaseForm  $showcaseForm
     * @return void
     */
    public function created(ShowcaseForm $showcaseForm)
    {
        $trello = app('trello');
        $showcaseCardId = config('trello.list_ids.showcase');
        $trello->addCardToList($showcaseCardId, [
            'name' => "$showcaseForm->name > $showcaseForm->creator",
            'desc' => $showcaseForm->comments,
            'urlSource' => $showcaseForm->link
        ]);
    }

    /**
     * Handle the ShowcaseForm "updated" event.
     *
     * @param  \App\Models\ShowcaseForm  $showcaseForm
     * @return void
     */
    public function updated(ShowcaseForm $showcaseForm)
    {
        //
    }

    /**
     * Handle the ShowcaseForm "deleted" event.
     *
     * @param  \App\Models\ShowcaseForm  $showcaseForm
     * @return void
     */
    public function deleted(ShowcaseForm $showcaseForm)
    {
        //
    }

    /**
     * Handle the ShowcaseForm "restored" event.
     *
     * @param  \App\Models\ShowcaseForm  $showcaseForm
     * @return void
     */
    public function restored(ShowcaseForm $showcaseForm)
    {
        //
    }

    /**
     * Handle the ShowcaseForm "force deleted" event.
     *
     * @param  \App\Models\ShowcaseForm  $showcaseForm
     * @return void
     */
    public function forceDeleted(ShowcaseForm $showcaseForm)
    {
        //
    }
}
