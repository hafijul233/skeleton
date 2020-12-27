<?php namespace Config;

use CodeIgniter\Config\BaseConfig;

/**
 * Short description of this class usages
 *
 * @class Toastr
 * @generated_by CI-Recharge
 * @package Config
 * @extend BaseConfig
 * " * @created_at 26 December, 2020 09:40"=> 02 PM
 */
class Toastr extends BaseConfig
{
    /**
     * @var array
     * Toastr Options
     */
    public $options = [
        "closeButton" => true,
        "newestOnTop" => false,
        "positionClass" => "toast-top-right",
        "preventDuplicates" => false,
        "onclick" => null,
        "timeOut" => "5000",
        "extendedTimeOut" => "1000",
        "tapToDismiss" => true,
        "toastClass" => "toast",
        "containerId" => "toast-container",
        "debug" => false,
        "showMethod" => "fadeIn",
        "showDuration" => 300,
        "showEasing" => "swing",
        "onShown" => null,
        "hideMethod" => "fadeOut",
        "hideDuration" => 1000,
        "hideEasing" => "swing",
        "onHidden" => null,
        "closeMethod" => false,
        "closeDuration" => false,
        "closeEasing" => false,
        "closeOnHover" => true,
        "iconClasses" => [
            "error" => "toast-error",
            "info" => "toast-info",
            "success" => "toast-success",
            "warning" => "toast-warning"
        ],
        "iconClass" => "toast-info",
        "titleClass" => "toast-title",
        "messageClass" => "toast-message",
        "escapeHtml" => true,
        "target" => "body",
        "closeHtml" => '<button type="button">&times;</button>',
        "closeClass" => "toast-close-button",
        "progressBar" => true,
        "progressClass" => "toast-progress",
        "rtl" => false
    ];

    /**
     * max number of notification
     * @var int|null $maxItems
     */
    public $maxItems = null;

}

