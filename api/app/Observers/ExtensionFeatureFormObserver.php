<?php

namespace App\Observers;

use App\Models\ExtensionFeatureForm;

class ExtensionFeatureFormObserver
{
    /**
     * Handle the ExtensionFeatureForm "created" event.
     *
     * @param  \App\Models\ExtensionFeatureForm  $extensionFeatureForm
     * @return void
     */
    public function created(ExtensionFeatureForm $extensionFeatureForm)
    {
        $trello = app('trello');
        $extensionFeatureCardId = config('trello.list_ids.extension-feature');
        $trello->addCardToList($extensionFeatureCardId, [
            'name' => "$extensionFeatureForm->author",
            'desc' => "**What Changed**\n$extensionFeatureForm->what_changed\n\n**Comments**\n$extensionFeatureForm->comments",
            'urlSource' => $extensionFeatureForm->link
        ]);
    }

    /**
     * Handle the ExtensionFeatureForm "updated" event.
     *
     * @param  \App\Models\ExtensionFeatureForm  $extensionFeatureForm
     * @return void
     */
    public function updated(ExtensionFeatureForm $extensionFeatureForm)
    {
        //
    }

    /**
     * Handle the ExtensionFeatureForm "deleted" event.
     *
     * @param  \App\Models\ExtensionFeatureForm  $extensionFeatureForm
     * @return void
     */
    public function deleted(ExtensionFeatureForm $extensionFeatureForm)
    {
        //
    }

    /**
     * Handle the ExtensionFeatureForm "restored" event.
     *
     * @param  \App\Models\ExtensionFeatureForm  $extensionFeatureForm
     * @return void
     */
    public function restored(ExtensionFeatureForm $extensionFeatureForm)
    {
        //
    }

    /**
     * Handle the ExtensionFeatureForm "force deleted" event.
     *
     * @param  \App\Models\ExtensionFeatureForm  $extensionFeatureForm
     * @return void
     */
    public function forceDeleted(ExtensionFeatureForm $extensionFeatureForm)
    {
        //
    }
}
