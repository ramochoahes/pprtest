<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    // seeder fields I want to fill
    protected $fillable = ['comp', 'question', 'answer', 'choice1', 'choice2', 'choice3', 'choice4'];
}
