<?php

namespace App\Providers;

use App\Models\BlogForm;
use App\Models\ExtensionFeatureForm;
use App\Models\NewExtensionForm;
use App\Models\NewsForm;
use App\Models\OtherForm;
use App\Models\ShowcaseForm;
use App\Observers\BlogFormObserver;
use App\Observers\ExtensionFeatureFormObserver;
use App\Observers\NewExtensionFormObserver;
use App\Observers\NewsFormObserver;
use App\Observers\OtherFormObserver;
use App\Observers\ShowcaseFormObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        BlogForm::observe(BlogFormObserver::class);
        NewExtensionForm::observe(NewExtensionFormObserver::class);
        ExtensionFeatureForm::observe(ExtensionFeatureFormObserver::class);
        ShowcaseForm::observe(ShowcaseFormObserver::class);
        NewsForm::observe(NewsFormObserver::class);
        OtherForm::observe(OtherFormObserver::class);
    }
}
