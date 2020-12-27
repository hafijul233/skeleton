<?php

use App\Libraries\Toastr;

if (! function_exists('toastr')) {
    /**
     * @param string $message
     * @param string $type
     * @param string $title
     * @param array  $options
     *
     * @return Toastr
     */
    function toastr(string $message = null, string $type = 'success', string $title = '', array $options = []): Toastr
    {
        if (is_null($message)) {
            return service('toastr');
        }

        return service('toastr')->addNotification($type, $message, $title, $options);
    }
}

if (! function_exists('toastInfo')) {
    /**
     * @param string $message
     * @param string $title
     * @param array  $options
     *
     * @return Toastr
     */
    function toastInfo(string $message = null, string $title = '', array $options = []): Toastr
    {
        return service('toastr')->addNotification(Toastr::INFO, $message, $title, $options);
    }
}

if (! function_exists('toastSuccess')) {
    /**
     * @param string $message
     * @param string $title
     * @param array  $options
     *
     * @return Toastr
     */
    function toastSuccess(string $message = null, string $title = '', array $options = []): Toastr
    {
        return service('toastr')->addNotification(Toastr::SUCCESS, $message, $title, $options);
    }
}

if (! function_exists('toastWarning')) {
    /**
     * @param string $message
     * @param string $title
     * @param array  $options
     *
     * @return Toastr
     */
    function toastWarning(string $message = null, string $title = '', array $options = []): Toastr
    {
        return service('toastr')->addNotification(Toastr::WARNING, $message, $title, $options);
    }
}

if (! function_exists('toastError')) {
    /**
     * @param string $message
     * @param string $title
     * @param array  $options
     *
     * @return Toastr
     */
    function toastError(string $message = null, string $title = '', array $options = []): Toastr
    {
        return service('toastr')->addNotification(Toastr::ERROR, $message, $title, $options);
    }
}
