<?php

namespace Spatie\ImageOptimizer;

use Spatie\ImageOptimizer\Optimizers\Avifenc;
use Spatie\ImageOptimizer\Optimizers\Cwebp;
use Spatie\ImageOptimizer\Optimizers\Gifsicle;
use Spatie\ImageOptimizer\Optimizers\Jpegoptim;
use Spatie\ImageOptimizer\Optimizers\Optipng;
use Spatie\ImageOptimizer\Optimizers\Pngquant;
use Spatie\ImageOptimizer\Optimizers\Svgo;

class OptimizerChainFactory
{
    public static function create(array $config = []): OptimizerChain
    {
        $jpegQuality = '--max=85';
        $pngQuality = '--quality=85';
        $webpQuality = '-q 80';
        $avifQuality = '-a cq-level=23';
        if (isset($config['quality'])) {
            $jpegQuality = '--max='.$config['quality'];
            $pngQuality = '--quality='.$config['quality'];
            $webpQuality = '-q '.$config['quality'];
            $avifQuality = '-a cq-level='.round(63 - $config['quality'] * 0.63);
        }

        return (new OptimizerChain())
            ->addOptimizer(new Jpegoptim([
                $jpegQuality,
                '--strip-all',
                '--all-progressive',
            ]))

            ->addOptimizer(new Pngquant([
                $pngQuality,
                '--force',
                '--skip-if-larger',
            ]))

            ->addOptimizer(new Optipng([
                '-i0',
                '-o2',
                '-quiet',
            ]))

            ->addOptimizer(new Svgo([
                '--config=svgo.config.js',
            ]))

            ->addOptimizer(new Gifsicle([
                '-b',
                '-O3',
            ]))
            ->addOptimizer(new Cwebp([
                $webpQuality,
                '-m 6',
                '-pass 10',
                '-mt',
            ]))
            ->addOptimizer(new Avifenc([
                $avifQuality,
                '-j all',
                '--min 0',
                '--max 63',
                '--minalpha 0',
                '--maxalpha 63',
                '-a end-usage=q',
                '-a tune=ssim',
            ]));
    }
}
