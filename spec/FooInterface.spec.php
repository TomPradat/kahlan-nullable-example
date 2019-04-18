<?php

namespace Spec;

use App\FooInterface;
use Kahlan\Plugin\Double;

describe('Foo interface', function () {
    it('must not throw', function () {
        $fooImplementation = Double::instance(['implements' => FooInterface::class]);

        allow($fooImplementation)->toReceive('getFoo')->andReturn(null);

        $fooImplementation->getFoo();
    });
});
