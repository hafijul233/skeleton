<?php namespace App\Middleware;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

/**
 * Class Ajax
 * Convert All AJAX Response to JSON
 * and control segments
 *
 * @generated_by CI-Recharge
 * @package App/Middleware
 * @implements FilterInterface
 * @created_at 04 January, 2021 11:55:42 PM
 */
class Ajax implements FilterInterface
{
    /**
     * @param RequestInterface $request
     * @param null $arguments
     *
     * @return mixed
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        if ($request->isAJAX() === true) {

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
        //Convert All Ajax response to json
        if ($request->isAJAX() === true) {
            $response->setJSON($response->getBody())
                ->setHeader('Cache-Control', 'no-cache')
                ->appendHeader('Cache-Control', 'must-revalidate')
                ->setContentType('application/json');

            return $response;
        }

        return $response;
    }
}
