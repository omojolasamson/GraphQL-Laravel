<?php


namespace App\GraphQL\Types;

use App\Models\Student;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class StudentType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Student',
        'description' => 'Collection of students',
        'model' => Student::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'ID of Student'
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'name of the Student'
            ],
            'email' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'email of Student'
            ],
            'age' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'age of student'
            ],
            'country' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'country of Student'
            ],
        ];
    }
}
