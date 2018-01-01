<?php
/**
 * Genial Framework.
 *
 * @author    Nicholas English <https://github.com/Nenglish7>
 * @author    Genial Contributors <https://github.com/orgs/Genial-Framework/people>
 *
 * @link      <https://github.com/Genial-Framework/Config> for the canonical source repository.
 * @copyright Copyright (c) 2017-2018 Genial Framework. <https://github.com/Genial-Framework>
 * @license   <https://github.com/Genial-Framework/Config/blob/master/LICENSE> New BSD License.
 */

namespace Genial\Config\Dependent;

use Genial\Config\Exception;

/**
 * Session.
 */
class Session implements DependentInterface, SessionDependentInterface
{
    
    /**
     * __construct().
     *
     * Check to see if the env function exists.
     *
     * @throws RuntimeException If the env function does not exist.
     *
     * @return void.
     */
    function __construct()
    {
        if (!function_exists('env'))
        {
            throw new Exception\RuntimeException(sprintf(
                '`%s` The `env()` function does not exist.',
                __METHOD__
            ));
        }
        $this->config = env('session');
    }
    
    /**
     * run().
     *
     * Run the session configuration.
     *
     * @return void.
     */
    public function run()
    {
        if (isset($this->config['session_name']))
        {
            session_name($this->config['session_name']);   
        }
        if (isset($this->config['session_encrypt'])
        {
            $encrypt = true;
        }
        if ()
        {
                
        }
        
        if ($this->config['session_handler'] == 'files'))
        {
            ini_set('session.save_path', APP_ROOT . '/temp');
            if (version_compare(PHP_VERSION, '7.2.0') >= 0)
            {
                session_gc();
            } else
            {
                ini_set('session.gc_maxlifetime', 0);
            }
        } elseif (defined('DATABASE_DEPENDENT_ACTIVE') && $this->config['session_handler'] == 'db')
        {
            $table = env('database', 'table_prefix', 'genial') . '_session';
            /* ... */
        }
        
    }

}

