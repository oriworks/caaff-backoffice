<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class Event extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Event>
     */
    public static $model = \App\Models\Event::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('Name', 'name'),

            Image::make('Poster')->disk('public'),

            Date::make('Começa a', 'date_in')->sortable(),
            Date::make('Termina a', 'date_out')->sortable(),

            Boolean::make('Página do evento', 'page_info'),

            Trix::make('Detalhes', 'schema_event'),

            File::make('Regulamento', 'regulation')->disk('public'),
            File::make('Formulário de Inscrição', 'subscriber_form')->disk('public'),
            File::make('Inscritos', 'subscribers')->disk('public'),
            File::make('Classificação', 'rating')->disk('public'),

            Text::make('Titulo Doc 1', 'name_partial1'),
            File::make('Doc 1', 'partial1')->disk('public'),

            Text::make('Titulo Doc 2', 'name_partial2'),
            File::make('Doc 2', 'partial2')->disk('public'),
            
            Text::make('Titulo Doc 3', 'name_partial3'),
            File::make('Doc 3', 'partial3')->disk('public'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
