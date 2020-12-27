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
        "extendedTimeOut" => 10000,
        "iconClasses" => [
            "error" => "toast-error",
            "info" => "toast-info",
            "success" => "toast-success",
            "warning" => "toast-warning"
        ],
        "iconClass" => "toast-info",
        "positionClass" => "toast-top-right",
        "timeOut" => 5000,
        "titleClass" => "toast-title",
        "messageClass" => "toast-message",
        "escapeHtml" => false,
        "target" => "body",
        "closeHtml" => '<button type="button">&times;</button>',
        "closeClass" => "toast-close-button",
        "newestOnTop" => true,
        "preventDuplicates" => false,
        "progressBar" => false,
        "progressClass" => "toast-progress",
        "rtl" => false
    ];

    public $maxItems = null;

}

