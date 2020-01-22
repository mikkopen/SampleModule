<?php 

namespace Quill\SampleModule\Events;


use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Quill\SampleModule\Models\SampleModule;

class SampleModuleCreating
{
    // use Dispatchable, InteractsWithSockets, 
    use SerializesModels;
 
    public $data;

    /**
     * Create a new event instance.
     *
     * @param  \Quill\SampleModule\Models\SampleModule  $data
     * @return void
     */
    public function __construct(SampleModule $data) 
    {
        $this->data = $data;  
    }
}
