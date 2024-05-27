<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Operator extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email'
    ];


    /**
     * Get all of the tickets for the Operator
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    public function getActiveTickets()
    {
        return $this->tickets()->where('status_id', '<>', '1')->where('status_id', '<>', '3');
    }

    public function isAvailable(){
        return count($this->getActiveTickets()->get()) === 0;
    }
}
