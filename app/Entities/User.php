<?php namespace App\Entities;

use CodeIgniter\Entity;

/**
 * Short description of this class usages
 *
 * @class User
 * @generated_by CI-Recharge
 * @package App
 * @extend Entity
 * @created_at 08 January, 2021 12:18:52 AM
 */
class User extends Entity
{
    /**
     * Database Table Column names
     */
    protected $attributes = ['id', 'email', 'username', 'password', 'force_reset', 'status', 'status_message', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * Database Table Column To Property Mapper
     */
    protected $datamap = [];

    /**
     * Property That will use timestamp
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * Property Types Casted
     */
    protected $casts = [
        'force_reset' => 'boolean',
        'created_at' => '?datetime',
        'updated_at' => '?datetime',
        'deleted_at' => '?datetime'
    ];

}
