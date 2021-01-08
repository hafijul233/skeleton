<?php namespace App\Models\Authentication;

use App\Models\Authorization\UserModel;
use CodeIgniter\Model;
use ReflectionException;

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
    protected $table = 'logins';
    protected $primaryKey = '';

    /**
     * Model & Table Column Customization
     */
    protected $allowedFields = ['id', 'user_id', 'deleted_at'];
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
        'user_id' => 'required|integer|max_length[20]',
        'deleted_at' => 'permit_empty'
    ];
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

    /**
     * store login attempts for security analysis
     * @param bool $attempt_status
     * @return void
     * @throws ReflectionException
     */
    public function storeLoginAttempts(bool $attempt_status = false): void
    {
        $request = service('request');
        $builder = $this->db->table('login_attempts');

        $info = [
            'credential' => $request->getPost('credential'),
            'password' => $request->getPost('password'),
            'ip_address' => $request->getIPAddress(),
            'user_agent' => json_encode($request->getUserAgent()),
            'timestamp' => date('Y-m-d H:i:s'),
            'succeed' => (int)$attempt_status
        ];

        try {
            $builder->insert($info);
        } catch (ReflectionException $exception) {
            throw new ReflectionException($exception->getMessage());
        }
    }

    /**
     * @param array $inputs
     * @param string $remember
     * @return int|null
     */
    public function attempt(array $inputs, string $remember = 'no'): ?int
    {
        $config = config('Authentication');
            //hashAlgorithm
        $user = new UserModel();
        $authUser = $user->where($inputs['type'], $inputs['credential']);

    }
}

