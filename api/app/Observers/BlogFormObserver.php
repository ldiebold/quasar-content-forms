<?php

namespace App\Observers;

use App\Models\BlogForm;
use App\Services\Trello\Trello;

class BlogFormObserver
{
    /**
     * Handle the BlogForm "created" event.
     *
     * @param  \App\Models\BlogForm  $blogForm
     * @return void
     */
    public function created(BlogForm $blogForm)
    {
        $trello = app('trello');
        $blogId = config('trello.list_ids.blog');
        $trello->addCardToList($blogId, [
            'name' => "$blogForm->author",
            'desc' => $blogForm->comments,
            'urlSource' => $blogForm->link
        ]);
    }

    /**
     * Handle the BlogForm "updated" event.
     *
     * @param  \App\Models\BlogForm  $blogForm
     * @return void
     */
    public function updated(BlogForm $blogForm)
    {
        //
    }

    /**
     * Handle the BlogForm "deleted" event.
     *
     * @param  \App\Models\BlogForm  $blogForm
     * @return void
     */
    public function deleted(BlogForm $blogForm)
    {
        //
    }

    /**
     * Handle the BlogForm "restored" event.
     *
     * @param  \App\Models\BlogForm  $blogForm
     * @return void
     */
    public function restored(BlogForm $blogForm)
    {
        //
    }

    /**
     * Handle the BlogForm "force deleted" event.
     *
     * @param  \App\Models\BlogForm  $blogForm
     * @return void
     */
    public function forceDeleted(BlogForm $blogForm)
    {
        //
    }
}
