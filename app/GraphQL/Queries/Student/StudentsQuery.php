<?php


namespace App\GraphQL\Queries\Student;


use App\Models\Student;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class StudentsQuery extends Query
{
    protected $attributes = [
        'name' => 'students',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Student'));
    }

    public function resolve($root, $args)
    {
        return Student::all();
    }
}

