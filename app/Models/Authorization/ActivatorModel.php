<?php namespace App\Models\Authorization;

use CodeIgniter\Model;

/**
 * Short description of this class usages
 *
 * @class ActivatorModel
 * @generated_by CI-Recharge
 * @package App
 * @extend Model
 * @created_at 08 January, 2021 12:53:59 AM
 */

class ActivatorModel extends Model
{
    /**
     * Table Configuration
     */
    protected $table = 'user_activations';
    protected $primaryKey = 'id';

    /**
     * Model & Table Column Customization
     */
    protected $allowedFields = [ 'user_id', 'email', 'token', 'verify_ip', 'verify_agent', 'deleted_at'];
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField  = 'deleted_at';

    /**
     * Return Configuration
     */
    protected $returnType = 'object';
    protected $useSoftDeletes = true;
    protected $validationRules = [ 'id' => 'required|integer|max_length[20]','user_id' => 'required|integer|max_length[20]','email' => 'required|string|max_length[255]','token' => 'required|string|max_length[255]','verify_ip' => 'permit_empty|string|max_length[64]','verify_agent' => 'required','deleted_at' => 'permit_empty'];
    protected $validationMessages = [];
    protected $skipValidation = true;

    /**
     * Events Configurations
     */
    protected $beforeInsert = [];

    protected $afterInsert = [];

    protected $beforeUpdate = [];

    protected $afterUpdate = [];

    protected $afterFind = [];

    protected $afterDelete = [];
}

