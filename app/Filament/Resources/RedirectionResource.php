<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RedirectionResource\Pages;
use App\Filament\Resources\RedirectionResource\RelationManagers;
use App\Models\Redirection;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RedirectionResource extends Resource
{
    protected static ?string $model = Redirection::class;

    protected static ?string $navigationIcon = 'heroicon-o-link';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('source')
                    ->label('Source URL')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->helperText('Start url with "/"'),
                Forms\Components\TextInput::make('target')
                    ->label('Target URL')
                    ->required()
                    ->helperText('Start url with "/"'),
                Forms\Components\Toggle::make('is_active'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('source')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('target'),
                Tables\Columns\IconColumn::make('is_active')->boolean(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRedirections::route('/'),
            'create' => Pages\CreateRedirection::route('/create'),
            'edit' => Pages\EditRedirection::route('/{record}/edit'),
        ];
    }
}
