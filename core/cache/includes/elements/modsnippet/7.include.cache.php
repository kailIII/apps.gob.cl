<?php
function elements_modsnippet_7($scriptProperties= array()) {
global $modx;
if (is_array($scriptProperties)) {
extract($scriptProperties, EXTR_SKIP);
}
/**
 * MY_GetQueryStringValue
 *
 * DESCRIPTION
 *
 * This snippet returns a value from a query string
 *
 * USAGE:
 *
 * [[!MY_GetQueryStringValue? &field=``]]
 */
 
return isset($_GET[$field]) ? $_GET[$field] : '';
}
