<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use SellingPartnerApi\Dto;

final class FeaturedOffer extends Dto
{
    /**
     * @param  OfferIdentifier  $offerIdentifier  Identifies an offer from a particular seller on an ASIN.
     * @param  ?string  $condition  The condition of the item.
     * @param  ?Price  $price
     */
    public function __construct(
        public readonly OfferIdentifier $offerIdentifier,
        public readonly ?string $condition = null,
        public readonly ?Price $price = null,
    ) {
    }
}
