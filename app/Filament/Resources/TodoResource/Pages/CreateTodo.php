<?php

namespace App\Filament\Resources\TodoResource\Pages;

use App\Filament\Resources\TodoResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Facades\Filament;
class CreateTodo extends CreateRecord
{
    protected static string $resource = TodoResource::class;
    public function mutateFormDataBeforeCreate(array $data) : array{
        $user = Filament::auth()->user();
        $data['user_id'] = $user['id'];
        return $data;
    }

}
