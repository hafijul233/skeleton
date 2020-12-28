<?php namespace App\Models;

use CodeIgniter\Model;

/**
 * Short description of this class usages
 *
 * @class PermissionModel
 * @generated_by CI-Recharge
 * @package App
 * @extend Model
 * @created_at 27 December, 2020 10:59:24 PM
 */

class PermissionModel extends Model
{
    /**
     * Table Configuration
     */
    protected $table = '';
    protected $primaryKey = '';

    /**
     * Model & Table Column Customization
     */
    protected $allowedFields = [];
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    

    /**
     * Return Configuration
     */
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $validationRules = [];
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
