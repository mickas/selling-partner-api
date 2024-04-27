<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use SellingPartnerApi\Dto;

final class StandardHeaderImageTextModule extends Dto
{
    /**
     * @param  ?TextComponent  $headline  Rich text content.
     * @param  ?StandardImageTextBlock  $block  The A+ Content standard image and text box block.
     */
    public function __construct(
        public readonly ?TextComponent $headline = null,
        public readonly ?StandardImageTextBlock $block = null,
    ) {
    }
}