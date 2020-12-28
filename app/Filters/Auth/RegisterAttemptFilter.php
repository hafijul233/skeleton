<?php namespace App\Filters\Auth;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Services;

/**
 * Short description of this class usages
 *
 * @class RegisterAttemptFilter
 * @generated_by CI-Recharge
 * @package App
 * @implements FilterInterface
 * @created_at 26 December, 2020 12:54:59 PM
 */
class RegisterAttemptFilter implements FilterInterface
{
    /**
     * @param RequestInterface $request
     * @param null $arguments
     *
     * @return mixed
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        if ($request->getMethod() === 'post') {
            $validator = service('validation');
            helper('toastr');

            $ruleSet['password'] = ['label' => 'Password', 'rules' => 'required|min_length[8]|max_length[100]|string|alpha_numeric_punct'];

            //Confirm Email Address or Username
            if (filter_input(INPUT_POST, 'credential', FILTER_VALIDATE_EMAIL) === false)
                $ruleSet['credential'] = ['label' => 'Username', 'rules' => 'required|min_length[5]|max_length[100]|string|alpha_dash'];
            else
                $ruleSet['credential'] = ['label' => 'Email Address', 'rules' => 'required|min_length[5]|max_length[255]|string|valid_email'];

            //sending rules to validation object
            $validator->setRules($ruleSet);

            if (!$validator->withRequest($request)->run()) {
                return redirect()->back()->withInput()->with('errors', $validator->getErrors());
            }
        }
    }

    //--------------------------------------------------------------------

    /**
     * Allows After filters to inspect and modify the response
     * object as needed. This method does not allow any way
     * to stop execution of other after filters, short of
     * throwing an Exception or Error.
     *
     * @param RequestInterface $request
     * @param ResponseInterface $response
     * @param null $arguments
     *
     * @return mixed
     */
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //
    }
}
