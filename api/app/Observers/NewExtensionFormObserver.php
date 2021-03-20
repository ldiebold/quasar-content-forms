<?php

namespace App\Observers;

use App\Models\NewExtensionForm;

class NewExtensionFormObserver
{
    /**
     * Handle the NewExtensionForm "created" event.
     *
     * @param  \App\Models\NewExtensionForm  $newExtensionForm
     * @return void
     */
    public function created(NewExtensionForm $newExtensionForm)
    {
        $trello = app('trello');
        $extensionId = config('trello.list_ids.new-extension');
        $trello->addCardToList($extensionId, [
            'name' => "$newExtensionForm->author",
            'desc' => "**What It Does**\n$newExtensionForm->what_extension_does\n\n**Comments**\n$newExtensionForm->comments",
            'urlSource' => $newExtensionForm->link
        ]);
    }

    /**
     * Handle the NewExtensionForm "updated" event.
     *
     * @param  \App\Models\NewExtensionForm  $newExtensionForm
     * @return void
     */
    public function updated(NewExtensionForm $newExtensionForm)
    {
        //
    }

    /**
     * Handle the NewExtensionForm "deleted" event.
     *
     * @param  \App\Models\NewExtensionForm  $newExtensionForm
     * @return void
     */
    public function deleted(NewExtensionForm $newExtensionForm)
    {
        //
    }

    /**
     * Handle the NewExtensionForm "restored" event.
     *
     * @param  \App\Models\NewExtensionForm  $newExtensionForm
     * @return void
     */
    public function restored(NewExtensionForm $newExtensionForm)
    {
        //
    }

    /**
     * Handle the NewExtensionForm "force deleted" event.
     *
     * @param  \App\Models\NewExtensionForm  $newExtensionForm
     * @return void
     */
    public function forceDeleted(NewExtensionForm $newExtensionForm)
    {
        //
    }
}
