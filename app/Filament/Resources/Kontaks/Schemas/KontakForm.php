<?php

namespace App\Filament\Resources\Kontaks\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class KontakForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('alamat')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('no_telepon')
                    ->tel()
                    ->default(null),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->default(null),
                TextInput::make('facebook')
                    ->default(null),
                TextInput::make('instagram')
                    ->default(null),
                TextInput::make('youtube')
                    ->default(null),
            ]);
    }
}
