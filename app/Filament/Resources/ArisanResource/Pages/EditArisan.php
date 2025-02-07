<?php

namespace App\Filament\Resources\ArisanResource\Pages;

use App\Filament\Resources\ArisanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArisan extends EditRecord
{
    protected static string $resource = ArisanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
