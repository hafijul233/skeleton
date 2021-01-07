<?php namespace App\Models\Authentication;

use CodeIgniter\Model;

/**
 * Short description of this class usages
 *
 * @class PassResetModel
 * @generated_by CI-Recharge
 * @package App
 * @extend Model
 * @created_at 08 January, 2021 12:56:23 AM
 */

class PassResetModel extends Model
{
    /**
     * Table Configuration
     */
    protected $table = 'password_resets';
    protected $primaryKey = 'id';

    /**
     * Model & Table Column Customization
     */
    protected $allowedFields = [ 'email', 'token', 'meta_data', 'request_ip', 'request_agent', 'verify_ip', 'verify_agent', 'expired_at', 'deleted_at'];
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
    protected $validationRules = [ 'id' => 'required|integer|max_length[20]','email' => 'required|string|max_length[255]','token' => 'required|string|max_length[255]','meta_data' => 'required|string','request_ip' => 'permit_empty|string|max_length[64]','request_agent' => 'required','verify_ip' => 'permit_empty|string|max_length[64]','verify_agent' => 'required','expired_at' => 'required','deleted_at' => 'permit_empty'];
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

