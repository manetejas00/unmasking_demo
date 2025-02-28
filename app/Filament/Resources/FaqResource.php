<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FaqResource\Pages;
use App\Models\Faq;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;

class FaqResource extends Resource {
    protected static ?string $model = Faq::class;
    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';

    public static function form(Forms\Form $form): Forms\Form {
        return $form->schema([
            Forms\Components\TextInput::make('question')->required(),
            Forms\Components\Textarea::make('answer')->required(),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table {
        return $table->columns([
            Tables\Columns\TextColumn::make('question')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('answer')->limit(50)->sortable(),
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

    public static function getPages(): array {
        return [
            'index' => Pages\ListFaqs::route('/'),
            'create' => Pages\CreateFaq::route('/create'),
            'edit' => Pages\EditFaq::route('/{record}/edit'),
        ];
    }
}
