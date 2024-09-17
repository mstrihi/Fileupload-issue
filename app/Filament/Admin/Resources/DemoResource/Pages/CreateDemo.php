<?php

namespace App\Filament\Admin\Resources\DemoResource\Pages;

use App\Filament\Admin\Resources\DemoResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDemo extends CreateRecord
{
    protected static string $resource = DemoResource::class;
}
