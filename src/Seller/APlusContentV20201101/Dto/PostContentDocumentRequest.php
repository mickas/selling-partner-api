<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PostContentDocumentRequest extends BaseDto
{
    /**
     * @param  ContentDocument  $contentDocument The A+ Content document. This is the enhanced content that is published to product detail pages.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ContentDocument $contentDocument,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
