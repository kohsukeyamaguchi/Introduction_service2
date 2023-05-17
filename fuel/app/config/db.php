<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(
    'active' => 'mysqli',

    'pdo' => array(
        'type'           => 'pdo',
        'connection'     => array(
            'dsn'        => 'mysql:host=localhost;dbname=framework',
            'username'       => 'root',
            'password'       => 'root',
            'persistent'     => false,
            'compress'       => false,
        ),
        'table_prefix' => '',
        'charset'      => 'utf8',
        'caching'      => false,
        'profiling'    => true,
    ),
    'mysqli' => array(
        'type'           => 'mysqli',
        'connection'     => array(
            'hostname' => 'localhost',
            'database' => 'xs0553_introduction',
            'username'       => 'xs0553_root',
            'password'       => 'rootpass',
            'persistent'     => false,
            'compress'       => false,
        ),
        'table_prefix' => '',
        'charset'      => 'utf8',
        'caching'      => false,
        'profiling'    => true,
    ),
);
