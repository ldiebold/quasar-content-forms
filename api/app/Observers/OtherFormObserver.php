<?php

namespace App\Observers;

use App\Models\OtherForm;

class OtherFormObserver
{
    /**
     * Handle the OtherForm "created" event.
     *
     * @param  \App\Models\OtherForm  $otherForm
     * @return void
     */
    public function created(OtherForm $otherForm)
    {
        $trello = app('trello');
        $otherCardId = config('trello.list_ids.other');
        $trello->addCardToList($otherCardId, [
            'name' => $otherForm->name_of_sender,
            'desc' => $otherForm->text
        ]);
    }

    /**
     * Handle the OtherForm "updated" event.
     *
     * @param  \App\Models\OtherForm  $otherForm
     * @return void
     */
    public function updated(OtherForm $otherForm)
    {
        //
    }

    /**
     * Handle the OtherForm "deleted" event.
     *
     * @param  \App\Models\OtherForm  $otherForm
     * @return void
     */
    public function deleted(OtherForm $otherForm)
    {
        //
    }

    /**
     * Handle the OtherForm "restored" event.
     *
     * @param  \App\Models\OtherForm  $otherForm
     * @return void
     */
    public function restored(OtherForm $otherForm)
    {
        //
    }

    /**
     * Handle the OtherForm "force deleted" event.
     *
     * @param  \App\Models\OtherForm  $otherForm
     * @return void
     */
    public function forceDeleted(OtherForm $otherForm)
    {
        //
    }
}
