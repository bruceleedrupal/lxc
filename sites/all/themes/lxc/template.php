<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * lxc theme.
 */
function lxc_preprocess_views_view_table(&$vars) 
{
    $vars['classes_array'][] = 'table table-responsive';
}