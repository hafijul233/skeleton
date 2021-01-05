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
 * Error display function remove if statement and format
 * input field name
 */
if (!function_exists('error')) {

    function error(string $field, string $jquery_id = null)
    {
        $id = ($jquery_id != null) ? "id='$jquery_id'" : null;
        return "<span class='invalid-feedback' $id >" . esc(session('errors.' . $field)) . "</span>";
    }
}

/**
 * Error display function remove if statement and format
 * input field name
 */
if (!function_exists('errors')) {

    function errors()
    {
        echo '<div class="alert alert-danger bg-white errors" role="alert">';
        echo '<ul class="list-group">';

        foreach (session('errors') as $error)
            echo '<li class="text-danger">' . esc($error) . '</li>';

        echo '</ul>';
        echo '</div>';
    }
}

