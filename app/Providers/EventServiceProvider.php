<?php

namespace App\Providers;

<<<<<<< HEAD
use App\Events\NewOrder;
use App\Listeners\SendNewOrder;
=======
>>>>>>> d9a8d6e (create api login, order detail)
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
<<<<<<< HEAD
     * @var array
=======
     * @var array<class-string, array<int, class-string>>
>>>>>>> d9a8d6e (create api login, order detail)
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
<<<<<<< HEAD
        NewOrder::class => [
            SendNewOrder::class,
        ],
=======
>>>>>>> d9a8d6e (create api login, order detail)
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
<<<<<<< HEAD
        parent::boot();

=======
>>>>>>> d9a8d6e (create api login, order detail)
        //
    }
}
