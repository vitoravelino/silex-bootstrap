<?php

namespace Xpto;

use Silex\Application as SilexApplication;

class Application extends SilexApplication
{
    use SilexApplication\TwigTrait;
    use SilexApplication\MonologTrait;
}
