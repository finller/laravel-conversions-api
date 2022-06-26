<?php

namespace Esign\ConversionsApi\Objects;

use FacebookAds\Object\ServerSide\UserData;

class DefaultUserData extends UserData
{
    public static function create(): self
    {
        return (new self())
            ->setClientIpAddress(request()->ip())
            ->setClientUserAgent(request()->userAgent());
    }
}
