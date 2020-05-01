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
 * Trait used in removed extension sniffs
 */
trait RemovedExtensionsTrait
{

    /**
     * A list of removed extensions with their alternative, if any.
     *
     * The array lists : version number with false (deprecated) and true (removed).
     * If's sufficient to list the first version where the extension was deprecated/removed.
     *
     * Optionally, an `alternative` key can be added to add the name of an alternative which can be
     * used after this extension was removed from PHP Core.
     *
     * @since 10.0.0 This array in a slightly different form previously existed in the RemovedExtensionsSniff.
     *
     * @var array(string => array(string => bool|string|null))
     */
    public $removedExtensions = array(
        'cpdf' => array(
            '5.1'         => true,
            'alternative' => 'pecl/pdflib',
        ),
        'crack' => array(
            '5.0'         => true,
            'alternative' => 'pecl/crack',
        ),
        'dbase' => array(
            '5.3'         => true,
            'alternative' => 'pecl/dbase',
        ),
        'dbx' => array(
            '5.1'         => true,
            'alternative' => 'pecl/dbx',
        ),
        'dio' => array(
            '5.1'         => true,
            'alternative' => 'pecl/dio',
        ),
        'ereg' => array(
            '5.3'         => false,
            '7.0'         => true,
            'alternative' => 'pcre',
        ),
        'fam' => array(
            '5.1' => true,
        ),
        'fbsql' => array(
            '5.3'         => true,
            'alternative' => 'pecl/fbsql',
        ),
        'fdf' => array(
            '5.3'         => true,
            'alternative' => 'pecl/fdf',
        ),
        'filepro' => array(
            '5.2'         => true,
            'alternative' => 'pecl/filepro',
        ),
        'hwapi' => array(
            '5.2'         => true,
            'alternative' => 'pecl/hwapi',
        ),
        'ibase' => array(
            '7.4'         => true,
            'alternative' => 'pecl/ibase',
        ),
        'ifx' => array(
            '5.2.1'       => true,
            'alternative' => 'pecl/ifx',
        ),
        'ingres' => array(
            '5.1'         => true,
            'alternative' => 'pecl/ingres',
        ),
        'ircg' => array(
            '5.1' => true,
        ),
        'mcrypt' => array(
            '7.1'         => false,
            '7.2'         => true,
            'alternative' => 'the sodium or openssl extensions (preferred) or pecl/mcrypt',
        ),
        'mcve' => array(
            '5.1'         => true,
            'alternative' => 'pecl/mcve',
        ),
        'mimetype' => array(
            '5.3'         => true,
            'alternative' => 'fileinfo',
        ),
        'ming' => array(
            '5.3'         => true,
            'alternative' => 'pecl/ming',
        ),
        'mnogosearch' => array(
            '5.1' => true,
        ),
        'msession' => array(
            '5.1.3'       => true,
            'alternative' => 'pecl/msession',
        ),
        'msql' => array(
            '5.3' => true,
        ),
        'mssql' => array(
            '7.0' => true,
        ),
        'mysql' => array(
            '5.5'         => false,
            '7.0'         => true,
            'alternative' => 'mysqli',
        ),
        'ncurses' => array(
            '5.3'         => true,
            'alternative' => 'pecl/ncurses',
        ),
        'oracle' => array(
            '5.1'         => true,
            'alternative' => 'oci8 or pdo_oci',
        ),
        'ovrimos' => array(
            '5.1'         => true,
            'alternative' => 'pecl/ovrimos',
        ),
        'pfpro' => array(
            '5.1' => true,
        ),
        'recode' => array(
            '7.4'         => true,
            'alternative' => 'iconv or mbstring',
        ),
        'sqlite' => array(
            '5.4'         => true,
            'alternative' => 'sqlite3, PDO sqlite or pecl/sqlite',
        ),
        /*
         * This also covers sybase_ct.
         * The sybase extension was removed in 5.3, sybase_ct in 7.0 but function names were identical.
         */
        'sybase' => array(
            '7.0' => true,
        ),
        'w32api' => array(
            '5.1'         => true,
            'alternative' => 'pecl/ffi',
        ),
        'wddx' => array(
            '7.4'         => true,
            'alternative' => 'pecl/wddx',
        ),
        'yp' => array(
            '5.1' => true,
        ),
    );

    /**
     * Get an array of the non-PHP-version array keys used in a sub-array.
     *
     * By default, removed feature version arrays, contain an additional 'alternative' and a potential
     * 'extension' array key.
     *
     * @since 10.0.0
     *
     * @return array
     */
    protected function getNonVersionArrayKeys()
    {
        return array('alternative', 'extension');
    }


    /*
     * TODO:
     * - add function to check if an error message needs to be adjusted as something is a removed extension.
     * - add function to adjust the error message
     * - implement use of the trait in the relevant sniffs.
     */
}
