<?php

namespace Quill\SampleModule\Models;

use Vellum\Models\BaseModel;

class SampleModule extends BaseModel
{

    protected $table = 'samplemodules';

    public function history()
    {
        return $this->morphOne('Quill\History\Models\History', 'historyable');
    }

    public function resourceLock()
    {
        return $this->morphOne('Vellum\Models\ResourceLock', 'resourceable');
    }

}
