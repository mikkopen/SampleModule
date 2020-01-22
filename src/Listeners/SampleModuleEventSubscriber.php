<?php

namespace Quill\SampleModule\Listeners;
use Illuminate\Support\Facades\Log;

class SampleModuleEventSubscriber
{
    /**
     * Handle the event.
     */
    public function handleCreated($event) 
    {
        //
    } 

    /**
     * Register the listeners for the subscriber.
     *
     * @param  \Illuminate\Events\Dispatcher  $events
     */
    public function subscribe($events)
    {
        $events->listen(
            'Quill\SampleModule\Events\SampleModuleCreated',
            'Quill\SampleModule\Listeners\SampleModuleEventSubscriber@handleCreated'
        ); 
    }
}