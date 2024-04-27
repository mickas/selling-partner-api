<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use SellingPartnerApi\Dto;

final class PrepDetails extends Dto
{
    protected static array $attributeMap = ['prepInstruction' => 'PrepInstruction', 'prepOwner' => 'PrepOwner'];

    /**
     * @param  string  $prepInstruction  Preparation instructions for shipping an item to Amazon's fulfillment network. For more information about preparing items for shipment to Amazon's fulfillment network, see the Seller Central Help for your marketplace.
     * @param  string  $prepOwner  Indicates who will prepare the item.
     */
    public function __construct(
        public readonly string $prepInstruction,
        public readonly string $prepOwner,
    ) {
    }
}