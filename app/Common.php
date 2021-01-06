<?php

/**
 * The goal of this file is to allow developers a location
 * where they can overwrite core procedural functions and
 * replace them with their own. This file is loaded during
 * the bootstrap process and is called during the frameworks
 * execution.
 *
 * This can be looked at as a `master helper` file that is
 * loaded early on, and may also contain additional functions
 * that you'd like to use throughout your entire application
 *
 * @link: https://codeigniter4.github.io/CodeIgniter4/
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

