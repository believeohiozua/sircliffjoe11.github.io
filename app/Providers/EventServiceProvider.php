<?php

namespace App\Providers;

use App\Events\DueForPayoutEvent;
use App\Events\PaymentIsDueEvent;
use App\Events\POPSubmittedEvent;
use App\Events\PackageClosedEvent;
use App\Events\UserRegisteredEvent;
use App\Events\GuestHasAppliedEvent;
use App\Events\PackageCompleteEvent;
use App\Events\PaymentIsOverdueEvent;
use App\Events\NewPackageCreatedEvent;
use App\Events\UserPasswordResetEvent;
use App\Listeners\NotifyAdminListener;
use Illuminate\Auth\Events\Registered;
use App\Events\OsusuPackageLaunchEvent;
use App\Events\PayoutConfirmationEvent;
use App\Events\ResendLoginDetailsEvent;
use App\Events\PaymentConfirmationEvent;
use App\Listeners\ActivateSlotsListener;
use App\Events\PackageOrderApprovedEvent;
use App\Events\PackagePayoutCompleteEvent;
use App\Listeners\SendSMSNotificationListener;
use App\Listeners\SendEmailNotificationListener;
use App\Listeners\GeneratePaymentRequestsListener;
use App\Listeners\ActivatePackageWithCarbonListener;
use App\Listeners\CreateTimelineNotificationListener;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

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
        GuestHasAppliedEvent::class => [
            NotifyAdminListener::class,
        ],
        UserRegisteredEvent::class => [
            CreateTimelineNotificationListener::class,
            SendSMSNotificationListener::class,
            SendEmailNotificationListener::class,
        ],
        ResendLoginDetailsEvent::class => [
            SendSMSNotificationListener::class,
            SendEmailNotificationListener::class,
        ],
        UserPasswordResetEvent::class => [
            SendSMSNotificationListener::class,
            SendEmailNotificationListener::class,
        ],
        NewPackageCreatedEvent::class => [
            NotifyAdminListener::class,
        ],
        PackageOrderApprovedEvent::class => [
            CreateTimelineNotificationListener::class,
        ],
        OsusuPackageLaunchEvent::class => [
            ActivatePackageWithCarbonListener::class,
            ActivateSlotsListener::class,
            GeneratePaymentRequestsListener::class,
            CreateTimelineNotificationListener::class,
            SendSMSNotificationListener::class,
            SendEmailNotificationListener::class,
            NotifyAdminListener::class,
        ],
        PaymentIsDueEvent::class => [
            CreateTimelineNotificationListener::class,
            SendSMSNotificationListener::class,
            SendEmailNotificationListener::class,
        ],
        PaymentIsOverdueEvent::class => [
            CreateTimelineNotificationListener::class,
            SendEmailNotificationListener::class,
        ],
        POPSubmittedEvent::class => [
            CreateTimelineNotificationListener::class,
        ],
        PaymentConfirmationEvent::class => [
            CreateTimelineNotificationListener::class,
            SendEmailNotificationListener::class,
        ],
        DueForPayoutEvent::class => [
            CreateTimelineNotificationListener::class,
            SendSMSNotificationListener::class,
            SendEmailNotificationListener::class,
        ],
        PayoutConfirmationEvent::class => [
            CreateTimelineNotificationListener::class,
            SendEmailNotificationListener::class,
        ],
        PackagePayoutCompleteEvent::class => [
            GeneratePaymentRequestsListener::class,
        ],
        PackageCompleteEvent::class => [
            NotifyAdminListener::class,
        ],
        PackageClosedEvent::class => [
            CreateTimelineNotificationListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
