<?php

namespace App\Filament\Resources\DataPenduduks\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class DataPendudukForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nik')
                    ->required(),
                TextInput::make('nama')
                    ->required(),
                Select::make('jenis_kelamin')
                    ->options(['L' => 'L', 'P' => 'P'])
                    ->required(),
                TextInput::make('tempat_lahir')
                    ->default(null),
                DatePicker::make('tanggal_lahir'),
                Textarea::make('alamat')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('rt')
                    ->default(null),
                TextInput::make('rw')
                    ->default(null),
                TextInput::make('status_keluarga')
                    ->default(null),
                TextInput::make('pekerjaan')
                    ->default(null),
                TextInput::make('agama')
                    ->default(null),
            ]);
    }
}
