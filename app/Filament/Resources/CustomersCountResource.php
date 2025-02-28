<?php
namespace App\Filament\Resources;

use App\Filament\Resources\CustomersCountResource\Pages;
use App\Models\CustomersCount;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

class CustomersCountResource extends Resource
{
    protected static ?string $model = CustomersCount::class;
    protected static ?string $navigationGroup = 'Statistics';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            TextInput::make('title')->required(),
            TextInput::make('count')->numeric()->required(),
            Select::make('suffix')
                ->options([
                    '+' => '+',
                    'K+' => 'K+',
                    'M' => 'M',
                ])
                ->nullable()
                ->searchable()
                ->preload(),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->sortable(),
                TextColumn::make('count')->sortable(),
                TextColumn::make('suffix'),
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
            'index' => Pages\ListCustomersCounts::route('/'),
            'create' => Pages\CreateCustomersCount::route('/create'),
            'edit' => Pages\EditCustomersCount::route('/{record}/edit'),
        ];
    }
}
