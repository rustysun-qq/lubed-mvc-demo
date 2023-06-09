<?php
$root_path=dirname(__DIR__);
$autoload_file=sprintf('%s/vendor/autoload.php',$root_path);

if (!file_exists($autoload_file))
{
    echo '{"code":9999,"msg":"please run command \"composer update\" first!"}', "\n";
    exit(1);
}

require_once($autoload_file);

use Lubed\HttpApplication\HttpApplicationStarter;

//config(TODO:AUTO CONFIGURATOR WILL BY COMPOSER "discovery" COMPONENT)
$config_data = [
    //APPLICATION ROOT PATH
    'root_path' => $root_path,
    //HTTP MVC kernel
    'kernel' => [
        'starter' =>[
            'class'=> '\\Lubed\\MVCKernel\\MVCStarter',
            'parameters'=>[
                'view' => [
                    'class' => '\\Lubed\\MVCKernel\\HtmlView',
                    'path' =>[
                        'source'=> sprintf('%s/resource/views',$root_path),//views source path
                        'cached' => sprintf('%s/runtime/cached/views',$root_path),//views cached path
                    ],
                    'parser'=>'\\Lubed\\BladeParser\\BladeParser'
                ],
            ]
        ]
    ],
    //HTTP ROUTER
    'router' => [
        'class'=> '\\Lubed\\Router\\RouterStarter',
        'parameters'=> sprintf('%s/resource/config/routes.php',$root_path),
    ]
];

$starter = new HTTPApplicationStarter($config_data);

return $starter;
