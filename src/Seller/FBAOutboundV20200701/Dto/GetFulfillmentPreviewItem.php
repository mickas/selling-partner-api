<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class GetFulfillmentPreviewItem extends Dto
{
    /**
     * @param  string  $sellerSku  The seller SKU of the item.
     * @param  int  $quantity  The item quantity.
     * @param  string  $sellerFulfillmentOrderItemId  A fulfillment order item identifier that the seller creates to track items in the fulfillment preview.
     * @param  ?Money  $perUnitDeclaredValue  An amount of money, including units in the form of currency.
     */
    public function __construct(
        public readonly string $sellerSku,
        public readonly int $quantity,
        public readonly string $sellerFulfillmentOrderItemId,
        public readonly ?Money $perUnitDeclaredValue = null,
    ) {
    }
}
