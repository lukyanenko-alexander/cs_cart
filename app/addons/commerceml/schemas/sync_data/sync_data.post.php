<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

use Tygh\Registry;

defined('BOOTSTRAP') or die('Access denied');

include_once Registry::get('config.dir.addons') . 'commerceml/schemas/sync_data/sync_data.functions.php';

/**
 * @var array<string, string|array> $schema
 */
$schema['commerceml'] = [
    'name'            => __('commerceml.sync_data_name'),
    'update_template' => 'addons/commerceml/views/sync_data/components/update.tpl',
    'last_sync_info'  => [
        'function' => 'fn_sync_data_commerceml_get_last_sync_info',
    ],
];

return $schema;
