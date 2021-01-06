<?php
/**
 * --------------------------------------------------------------------
 * Error Helper functions
 * --------------------------------------------------------------------
 */

/**
 * Error display function if statement and format
 * @input field name
 */
if (!function_exists('error')) {
    /**
     * @param string $field
     * @param string|null $jquery_id
     * @return string
     */
    function error(string $field, string $jquery_id = null): string
    {
        $id = ($jquery_id != null) ? "id=\"$jquery_id\"" : null;
        return "<span class=\"invalid-feedback\" $id >"
            . esc(session('errors.' . $field))
            . "</span>";
    }
}

/**
 * Error display function remove if statement and format
 * input field name
 */
if (!function_exists('errors')) {

    function errors(): ?string
    {
        $errors = session('errors');
        if (!empty($errors)) {
            $output = '<div class="alert alert-danger bg-white errors" role="alert">';
            $output .= '<ul class="list-group">';

            foreach ($errors as $error)
                $output .= '<li class="text-danger">' . esc($error) . '</li>';

            $output .= '</ul>';
            $output .= '</div>';

            return $output;
        }

        return null;
    }
}

/**
 * Error custom class that add is-invalid
 * class  for bootstrap4
 * @input field name
 */
if (!function_exists('invalid')) {
    /**
     * @param string $field
     * @return string
     */
    function invalid(string $field): ?string
    {
        return (session('errors.' . $field) != null) ? 'is-invalid' : null;
    }
}
