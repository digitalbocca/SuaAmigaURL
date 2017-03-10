<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit359aa1b28a829409f17726bdc65e2ad6
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'EstudioDigitalBocca\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'EstudioDigitalBocca\\' => 
        array (
            0 => __DIR__ . '/../..' . '/EstudioDigitalBocca',
        ),
    );

    public static $classMap = array (
        'EstudioDigitalBocca\\Traits\\ExtraiPrimeiraPosicao' => __DIR__ . '/../..' . '/EstudioDigitalBocca/Traits/ExtraiPrimeiraPosicao.php',
        'EstudioDigitalBocca\\Traits\\ExtraiUltimaPosicao' => __DIR__ . '/../..' . '/EstudioDigitalBocca/Traits/ExtraiUltimaPosicao.php',
        'EstudioDigitalBocca\\Traits\\RemoveBarraFinal' => __DIR__ . '/../..' . '/EstudioDigitalBocca/Traits/RemoveBarraFinal.php',
        'EstudioDigitalBocca\\Traits\\RemoveBarraInicial' => __DIR__ . '/../..' . '/EstudioDigitalBocca/Traits/RemoveBarraInicial.php',
        'EstudioDigitalBocca\\URLAmigavel\\Interfaces\\AtualizarValorInterface' => __DIR__ . '/../..' . '/EstudioDigitalBocca/URLAmigavel/Interfaces/AtualizarValorInterface.php',
        'EstudioDigitalBocca\\URLAmigavel\\Interfaces\\ObterValorInterface' => __DIR__ . '/../..' . '/EstudioDigitalBocca/URLAmigavel/Interfaces/ObterValorInterface.php',
        'EstudioDigitalBocca\\URLAmigavel\\Interfaces\\URLAmigavelInterface' => __DIR__ . '/../..' . '/EstudioDigitalBocca/URLAmigavel/Interfaces/URLAmigavelInterface.php',
        'EstudioDigitalBocca\\URLAmigavel\\RemovedorDeBarras' => __DIR__ . '/../..' . '/EstudioDigitalBocca/URLAmigavel/RemovedorDeBarras.php',
        'EstudioDigitalBocca\\URLAmigavel\\RemovedorDeNivel' => __DIR__ . '/../..' . '/EstudioDigitalBocca/URLAmigavel/RemovedorDeNivel.php',
        'EstudioDigitalBocca\\URLAmigavel\\URLAmigavel' => __DIR__ . '/../..' . '/EstudioDigitalBocca/URLAmigavel/URLAmigavel.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit359aa1b28a829409f17726bdc65e2ad6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit359aa1b28a829409f17726bdc65e2ad6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit359aa1b28a829409f17726bdc65e2ad6::$classMap;

        }, null, ClassLoader::class);
    }
}
