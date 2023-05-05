<?php

namespace App\Providers;
use Filament\Tables\Columns\Column;
use Filament\Forms\Components\Field;
use Filament\Tables\Filters\BaseFilter;
use Illuminate\Support\ServiceProvider;
use Filament\Support\Actions\BaseAction;
use Filament\Forms\Components\Placeholder;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->autoTranslateLabels();
    }
 
    /**
     * translate labels functions
     */

     private function autoTranslateLabels()
    {
        $this->translateLabels([
            Field::class,
            BaseFilter::class,
            Placeholder::class,
            Column::class,
            BaseAction::class,
        ]);
    }
    
    private function translateLabels(array $components = [])
    {
        foreach($components as $component) {
            $component::configureUsing(function ($c): void {
                $c->translateLabel();
            });
        }
    }
}