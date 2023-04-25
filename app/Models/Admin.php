<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends User
{
    use HasFactory;

    protected $attributes = [
        "name" => "Admin",
        "role" => "2",
    ];

    public function isAdmin()
    {
        return true;
    }
}
