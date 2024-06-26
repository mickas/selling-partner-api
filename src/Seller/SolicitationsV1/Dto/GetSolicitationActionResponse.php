<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SolicitationsV1\Dto;

use SellingPartnerApi\Dto;

final class GetSolicitationActionResponse extends Dto
{
    protected static array $attributeMap = ['links' => '_links', 'embedded' => '_embedded'];

    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?Links  $links
     * @param  ?Embedded  $embedded
     * @param  ?SolicitationsAction  $payload  A simple object containing the name of the template.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?Links $links = null,
        public readonly ?Embedded $embedded = null,
        public readonly ?SolicitationsAction $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
