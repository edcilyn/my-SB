<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Student extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'studentId',
        'studentName',
        'studentGender',
        'studentAddress',
        'studentCourse',
        'studentSection',
        'studentAge',
        'studentStatus'
    ];
}