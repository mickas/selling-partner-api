<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MessagingV1\Dto;

use SellingPartnerApi\Dto;

final class Links extends Dto
{
    protected static array $complexArrayTypes = ['actions' => [LinkObject::class]];

    /**
     * @param  LinkObject  $self  A Link object.
     * @param  LinkObject[]  $actions  Eligible actions for the specified amazonOrderId.
     */
    public function __construct(
        public readonly LinkObject $self,
        public readonly array $actions,
    ) {
    }
}