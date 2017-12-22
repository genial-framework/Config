<?php
/**
 * Genial Framework.
 *
 * @author    Nicholas English <https://github.com/Nenglish7>
 * @author    Genial Contributors <https://github.com/orgs/Genial-Framework/people>
 *
 * @link      <https://github.com/Genial-Framework/Config> for the canonical source repository.
 *
 * @copyright Copyright (c) 2017-2018 Genial Framework. <https://github.com/Genial-Framework>
 * @license   <https://github.com/Genial-Framework/Config/blob/master/LICENSE> New BSD License.
 */
 define('CONFIG_CONTROLLER_ACTIVE', true);
 
 if (!function_exists('env'))
 {
     trigger_error(
         'The `env()` function does not exist.',
         E_USER_ERROR
     );
 }
