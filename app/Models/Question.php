<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    /**
     * The label of a question.
     *
     * @var string
     */
    protected $label = 'label';
      
    /**
     * Get the type that owns the question.
     */
    public function Type()
    {
        return $this->belongsTo(Type::class);
    }
    /**
     * get answers of one question
     */
    public function Anwers()
    {
        return $this->hasMany(Answer::class);
    }
   
}
