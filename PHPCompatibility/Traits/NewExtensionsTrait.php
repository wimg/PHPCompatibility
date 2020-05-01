<?php
/**
 * PHPCompatibility, an external standard for PHP_CodeSniffer.
 *
 * @package   PHPCompatibility
 * @copyright 2012-2020 PHPCompatibility Contributors
 * @license   https://opensource.org/licenses/LGPL-3.0 LGPL3
 * @link      https://github.com/PHPCompatibility/PHPCompatibility
 */

namespace PHPCompatibility\Traits;

/**
 * Trait used in new extension sniffs
 */
trait NewExtensionsTrait
{

    /**
     * A list of new PHP extensions.
     *
     * The array lists : version number with false (available in PECL) and true (shipped with PHP).
     * If's sufficient to list the first version where the extension was introduced.
     *
     * Optionally, an `alternative` key can be added to add the name of an alternative which can be
     * used before this extension became available in PHP Core.
     *
     * @since 10.0.0
     *
     * @var array(string => array(string => bool|string|null))
     */
    public $newExtensions = array(
        'csprng' => array(
            '7.0'         => true,
            'alternative' => 'https://github.com/paragonie/random_compat',
        ),
        'dom' => array(
            '5.0' => true,
        ),
        'enchant' => array(
            '5.3'         => true,
            'alternative' => 'pecl/enchant',
        ),
        'ffi' => array(
            '7.4' => true,
        ),
        'fileinfo' => array(
            '5.3'         => true,
            'alternative' => 'pecl/fileinfo',
        ),
        'filter' => array(
            '5.2' => true,
        ),
        'fpm' => array(
            '5.3.3' => true,
        ),
        'hash' => array(
            '5.1.2'       => true,
            'alternative' => 'pecl/hash',
        ),
        'intl' => array(
            '5.3'         => true,
            'alternative' => 'pecl/intl',
        ),
        'json' => array(
            '5.2' => true,
        ),
        'libxml' => array(
            '5.1' => true,
        ),
        'mysqli' => array(
            '5.0'         => true,
            'alternative' => 'mysql',
        ),
        'mysqlnd' => array(
            '5.3' => true,
        ),
        'opcache' => array(
            '5.5'         => true,
            'alternative' => 'pecl/opcache',
        ),
        'password' => array(
            '5.5'         => true,
            'alternative' => 'https://github.com/ircmaxell/password_compat',
        ),
        'pdo' => array(
            '5.1' => true,
        ),
        'phar' => array(
            '5.3'         => true,
            'alternative' => 'pecl/phar',
        ),
        'phpdbg' => array(
            '5.6' => true,
        ),
        'reflection' => array(
            '5.0' => true,
        ),
        'simplexml' => array(
            '5.0' => true,
        ),
        'soap' => array(
            '5.0' => true,
        ),
        'sodium' => array(
            '7.2'         => true,
            'alternative' => 'pecl/libsodium or https://github.com/paragonie/sodium_compat/',
        ),
        'spl' => array(
            '5.0' => true,
        ),
        'sqlite' => array(
            '5.0' => true,
        ),
        'sqlite3' => array(
            '5.3'         => true,
            'alternative' => 'sqlite',
        ),
        'tidy' => array(
            '5.0' => true,
        ),
        'xmlreader' => array(
            '5.1'         => true,
            'alternative' => 'pecl/xmlreader',
        ),
        'xmlwriter' => array(
            '5.1.2'       => true,
            'alternative' => 'pecl/xmlwriter',
        ),
        'xsl' => array(
            '5.0' => true,
        ),
    );

    /**
     * Get an array of the non-PHP-version array keys used in a sub-array.
     *
     * By default, new feature version arrays, contain a potential 'extension' array key.
     *
     * @since 10.0.0
     *
     * @return array
     */
    protected function getNonVersionArrayKeys()
    {
        return array('extension');
    }

    /*
     * TODO:
     * - add function to check if an error message needs to be adjusted as something is a new extension.
     * - add function to adjust the error message
     * - implement use of the trait in the relevant sniffs.
     */
}
