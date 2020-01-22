<?php

namespace Quill\SampleModule\Resource;

use Quill\Html\Fields\ID;
use Quill\Html\Fields\Text;
use Quill\Html\Fields\Textarea;
use Quill\SampleModule\Models\SampleModule;
use Vellum\Contracts\Formable;

class SampleModuleResource extends SampleModule implements Formable
{
    public function fields()
    {
        return [
            ID::make()->sortable()->searchable(),

            Text::make('title')->sortable(),

            Textarea::make('content')->searchable()->help('this is info')->hideFromIndex(),
        ];
    }

    public function filters()
    {
        return [
            //
        ];
    }

    public function actions()
    {
        return [
            new \Vellum\Actions\EditAction,
            new \Vellum\Actions\ViewAction,
            new \Vellum\Actions\DeleteAction,
        ];
    }

}
