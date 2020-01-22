<?php

namespace Quill\SampleModule\Resource;

use Quill\Html\Fields\ID;
use Quill\Html\Fields\Select;
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
            Text::make('slug')->sortable(),
            Text::make('url')->sortable(),
            Text::make('name')->sortable(),
            Text::make('Meta Title', 'title')->sortable()->hideFromIndex(),
            Text::make('Meta Description', 'description')->sortable()->hideFromIndex(),
            Text::make('Meta Keywords', 'keywords')->sortable()->hideFromIndex(),
            Text::make('order')->sortable(),
            Text::make('status')->sortable(),
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
