<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkProcessResource\Pages;
use App\Models\WorkProcess;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class WorkProcessResource extends Resource
{
    protected static ?string $model = WorkProcess::class;
    protected static ?string $navigationGroup = 'Services';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            TextInput::make('title')->required(),
            Textarea::make('description')->required(),
            FileUpload::make('image')->directory('work')->image()->required()->preserveFilenames(),
            TextInput::make('step_number')
                ->integer()
                ->required()
                ->rule('min:1'),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('step_number')->sortable(),
                TextColumn::make('title')->sortable(),
                ImageColumn::make('image'),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWorkProcesses::route('/'),
            'create' => Pages\CreateWorkProcess::route('/create'),
            'edit' => Pages\EditWorkProcess::route('/{record}/edit'),
        ];
    }
}
