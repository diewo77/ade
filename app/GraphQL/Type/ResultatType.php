<?php
/**
 * Created by PhpStorm.
 * User: Taki
 * Date: 20/02/2019
 * Time: 21:48
 */


namespace App\GraphQL\Type;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class UserType extends GraphQLType
{
    protected $attributes = [
        'date_document' => 'Date du document'
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of a user'
            ],
            'centre_id' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'l\'id du résultat'
            ],
            'date_document' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'la date'
            ],
            'date_prelevement' => [
                'type' => Type::string(),
                'description' => 'la date'
            ],
            'date_passage' => [
                'type' => Type::string(),
                'description' => 'la date'
            ],
            'date_lecture' => [
                'type' => Type::string(),
                'description' => 'la date'
            ],
            'nom_preleveur' => [
                'type' => Type::string(),
                'description' => 'Nom'
            ],
            'passage_par' => [
                'type' => Type::string(),
                'description' => 'Nom'
            ],
            'lecture_par' => [
                'type' => Type::string(),
                'description' => 'Nom'
            ],
            'confirme_par' => [
                'type' => Type::string(),
                'description' => 'Nom'
            ],
            'created_at' => [
                'type' => Type::string(),
                'description' => 'Date a was created'
            ],
            'updated_at' => [
                'type' => Type::string(),
                'description' => 'Date a was updated'
            ],
        ];
    }

    protected function resolveCreatedAtField($root, $args)
    {
        return (string)$root->created_at;
    }

    protected function resolveUpdatedAtField($root, $args)
    {
        return (string)$root->updated_at;
    }
}