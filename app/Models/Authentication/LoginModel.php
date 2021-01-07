<?php namespace App\Models\Authentication;

use CodeIgniter\Model;

/**
 * Short description of this class usages
 *
 * @class LoginModel
 * @generated_by CI-Recharge
 * @package App
 * @extend Model
 * @created_at 06 January, 2021 10:48:20 PM
 */
class LoginModel extends Model
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
    protected $beforeInsert = ['storeLoginAttempts'];

    protected $afterInsert = [];

    protected $beforeUpdate = [];

    protected $afterUpdate = [];

    protected $afterFind = [];

    protected $afterDelete = [];

    public function storeLoginAttempts()
    {
        $request = service('request');
        $info = [
            'credential' => $request->getPost('credential'),
            'password' => $request->getPost('password'),
            'ip_address' => $request->getIPAddress(),
            'user_agent' => $request->getUserAgent(),
            'timestamp' => date('Y-m-d H:i:s'),
            'succeed' => false
        ];

        if ($this->db->table('login_attempts')->insert($info)) {

        }
    }
}

