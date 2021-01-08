<?php namespace App\Models\Authorization;

use CodeIgniter\Model;

/**
 * Short description of this class usages
 *
 * @class UserModel
 * @generated_by CI-Recharge
 * @package App
 * @extend Model
 * @created_at 27 December, 2020 10:58:49 PM
 */
class UserModel extends Model
{
    /**
     * Table Configuration
     */
    protected $table = 'users';
    protected $primaryKey = 'id';

    /**
     * Model & Table Column Customization
     */
    protected $allowedFields = ['email', 'username', 'password', 'force_reset', 'status', 'status_message', 'deleted_at'];
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    /**
     * Return Configuration
     */
    protected $returnType = 'object';
    protected $useSoftDeletes = true;
    protected $validationRules = [
        'id' => 'required|integer|max_length[20]',
        'email' => 'permit_empty|string|max_length[255]',
        'username' => 'permit_empty|string|max_length[255]',
        'password' => 'required|string|max_length[255]',
        'force_reset' => 'required|integer|max_length[1]',
        'status' => 'permit_empty|string|max_length[255]',
        'status_message' => 'permit_empty|string|max_length[255]',
        'deleted_at' => 'permit_empty'
    ];
    protected $validationMessages = [];
    protected $skipValidation = true;

    /**
     * Events Configurations
     */
    protected $beforeInsert = ['hashPassword'];

    protected $afterInsert = [];

    protected $beforeUpdate = [];

    protected $afterUpdate = [];

    protected $afterFind = [];

    protected $afterDelete = [];

    protected function hashPassword(array $data)
    {
        $config = config('Authentication');
        if (!isset($data['data']['password'])) return $data;
        $data['data']['password'] = password_hash($data['data']['password'], $config->hashAlgorithm);

        return $data;
    }
}

