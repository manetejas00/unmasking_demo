<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamResource\Pages;
use App\Models\Team;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')->required(),
            Forms\Components\TextInput::make('designation')->required(),
            Forms\Components\FileUpload::make('image')->directory('team-images')->image()->preserveFilenames(),
            Forms\Components\TextInput::make('facebook')->url(),
            Forms\Components\TextInput::make('linkedin')->url(),
            Forms\Components\TextInput::make('twitter')->url(),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\ImageColumn::make('image'),
            Tables\Columns\TextColumn::make('name')->searchable(),
            Tables\Columns\TextColumn::make('designation'),
            Tables\Columns\TextColumn::make('facebook')->limit(30),
            Tables\Columns\TextColumn::make('linkedin')->limit(30),
            Tables\Columns\TextColumn::make('twitter')->limit(30),
        ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }
}
