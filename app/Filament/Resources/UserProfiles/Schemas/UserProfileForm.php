<?php

namespace App\Filament\Resources\UserProfiles\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class UserProfileForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                TextInput::make('nik')
                    ->default(null),
                Select::make('jenis_kelamin')
                    ->options(['L' => 'L', 'P' => 'P'])
                    ->default(null),
                TextInput::make('tempat_lahir')
                    ->default(null),
                DatePicker::make('tanggal_lahir'),
                Textarea::make('alamat')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('no_hp')
                    ->default(null),
                TextInput::make('foto')
                    ->default(null),
            ]);
    }
}
