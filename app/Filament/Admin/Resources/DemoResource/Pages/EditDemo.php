<?php

namespace App\Filament\Admin\Resources\DemoResource\Pages;

use App\Filament\Admin\Resources\DemoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDemo extends EditRecord
{
    protected static string $resource = DemoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
