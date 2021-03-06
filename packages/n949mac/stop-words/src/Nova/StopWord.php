<?php

namespace N949mac\StopWords\Nova;

use App\Nova\Resource;
use Bytelaunch\ElysiumCore\Models\Team;
use Bytelaunch\ElysiumMailTemplates\Nova\Actions\TestProcess;
use Bytelaunch\ElysiumProcesses\Nova\Process;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Pktharindu\NovaPermissions\Role;
use Silvanite\NovaFieldCheckboxes\Checkboxes;
use \Superlatif\NovaTagInput\Tags;

class StopWord extends Resource
{


    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \N949mac\StopWords\Models\StopWord::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'word';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'word',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
      return [
          ID::make()->sortable(),
          Text::make('Word')->sortable(),
          Select::make('Action')->options([
              'Flag' => 'Flag',
              'Drop' => 'Drop',
          ])->sortable(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [
//            new TestMailTemplate()
        ];
    }
}
