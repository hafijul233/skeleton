<?php namespace App\Filters\Auth;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

/**
 * Short description of this class usages
 *
 * @class LoginAttemptFilter
 * @generated_by CI-Recharge
 * @package App
 * @implements FilterInterface
 * @created_at 26 December, 2020 12:54:47 PM
 */
class LoginAttemptFilter implements FilterInterface
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

            /**
             * Manual Putting has email or not
             */
            $hasEmail = true;

            //Confirm Email Address or Username
            if (filter_input(INPUT_POST, 'credential', FILTER_VALIDATE_EMAIL) === false) {
                $ruleSet['credential'] = ['label' => 'Username', 'rules' => 'required|min_length[5]|max_length[100]|string|alpha_dash'];
                $hasEmail = false;
            } else
                $ruleSet['credential'] = ['label' => 'Email Address', 'rules' => 'required|min_length[5]|max_length[255]|string|valid_email'];

            $request->setGlobal('post', '500'/*['has_email' => $hasEmail]*/);

            //sending rules to validation object
            $validator->setRules($ruleSet);
            if (!$validator->withRequest($request)->run()) {
                toastError('Invalid Form Submission', 'Validation!');
                return redirect()->back()->withInput()->with('errors', $validator->getErrors());
            } else {
                return $request;
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
