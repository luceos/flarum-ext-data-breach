<?php

namespace Luceos\Breached;

use Flarum\Extend;

return [
    (new Extend\Console)->command(ReporterCommand::class)
];