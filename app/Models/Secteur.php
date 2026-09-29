<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Secteur extends Model
{
    protected $fillable = [
        'nom', 'slug', 'icone', 'description_courte', 'description',
        'services', 'avantages', 'ordre', 'is_active',
        'meta_title', 'meta_description',
    ];

    protected $casts = [
        'services'  => 'array',
        'avantages' => 'array',
        'is_active' => 'boolean',
    ];

    public function scopeActif(Builder $query): Builder
    {
        return $query->where('is_active', true)->orderBy('ordre');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}