<?php

namespace App\Filament\Resources\PerangkatDesas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PerangkatDesaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->required(),
                TextInput::make('jabatan')
                    ->required(),
                TextInput::make('foto')
                    ->default(null),
                TextInput::make('urutan')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
