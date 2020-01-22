<?php

namespace Quill\SampleModule\Models;

use Illuminate\Support\Str;
use Quill\SampleModule\Events\SampleModuleCreating;
use Quill\SampleModule\Events\SampleModuleCreated;
use Quill\SampleModule\Events\SampleModuleSaving;
use Quill\SampleModule\Events\SampleModuleSaved;
use Quill\SampleModule\Events\SampleModuleUpdating;
use Quill\SampleModule\Events\SampleModuleUpdated;
use Quill\SampleModule\Models\SampleModule;

class SampleModuleObserver
{

    public function creating(SampleModule $samplemodule)
    {
        // creating logic... 
        event(new SampleModuleCreating($samplemodule));
    }

    public function created(SampleModule $samplemodule)
    {
        // created logic...
        event(new SampleModuleCreated($samplemodule));
    }

    public function saving(SampleModule $samplemodule)
    {
        // saving logic...
        event(new SampleModuleSaving($samplemodule));
    }

    public function saved(SampleModule $samplemodule)
    {
        // saved logic...
        event(new SampleModuleSaved($samplemodule));
    }

    public function updating(SampleModule $samplemodule)
    {
        // updating logic...
        event(new SampleModuleUpdating($samplemodule));
    }

    public function updated(SampleModule $samplemodule)
    {
        // updated logic...
        event(new SampleModuleUpdated($samplemodule));
    }

}