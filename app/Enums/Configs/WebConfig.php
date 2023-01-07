<?php

namespace App\Enums\Configs;

use BenSampo\Enum\Enum;

final class WebConfig extends Enum
{
    const PaginateOnePageDefault = 8;
    const DefaultUploadPath = 'public/uploads';
}
