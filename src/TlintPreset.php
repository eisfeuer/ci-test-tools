<?php

namespace Elbgoods\CiTestTools;

use Tighten\Linters\NoInlineVarDocs;
use Tighten\Linters\NoParensEmptyInstantiations;
use Tighten\Linters\RestControllersMethodOrder;
use Tighten\Presets\LaravelPreset;

class TlintPreset extends LaravelPreset
{
    public function getLinters(): array
    {
        return array_filter(parent::getLinters(), static function (string $linter): bool {
            return ! in_array($linter, [
                NoInlineVarDocs::class,
                NoParensEmptyInstantiations::class,
                RestControllersMethodOrder::class,
            ]);
        });
    }
}
