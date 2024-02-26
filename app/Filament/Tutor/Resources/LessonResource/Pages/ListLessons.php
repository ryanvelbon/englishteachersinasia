<?php

namespace App\Filament\Tutor\Resources\LessonResource\Pages;

use App\Filament\Tutor\Resources\LessonResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLessons extends ListRecords
{
    protected static string $resource = LessonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
