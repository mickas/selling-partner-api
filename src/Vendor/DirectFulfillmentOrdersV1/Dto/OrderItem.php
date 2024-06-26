<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Dto;

use SellingPartnerApi\Dto;

final class OrderItem extends Dto
{
    /**
     * @param  string  $itemSequenceNumber  Numbering of the item on the purchase order. The first item will be 1, the second 2, and so on.
     * @param  ItemQuantity  $orderedQuantity  Details of quantity ordered.
     * @param  Money  $netPrice  An amount of money, including units in the form of currency.
     * @param  ?string  $buyerProductIdentifier  Buyer's standard identification number (ASIN) of an item.
     * @param  ?string  $vendorProductIdentifier  The vendor selected product identification of the item.
     * @param  ?string  $title  Title for the item.
     * @param  ?ScheduledDeliveryShipment  $scheduledDeliveryShipment  Dates for the scheduled delivery shipments.
     * @param  ?GiftDetails  $giftDetails  Gift details for the item.
     * @param  ?TaxDetails  $taxDetails  Total tax details for the line item.
     * @param  ?Money  $totalPrice  An amount of money, including units in the form of currency.
     */
    public function __construct(
        public readonly string $itemSequenceNumber,
        public readonly ItemQuantity $orderedQuantity,
        public readonly Money $netPrice,
        public readonly ?string $buyerProductIdentifier = null,
        public readonly ?string $vendorProductIdentifier = null,
        public readonly ?string $title = null,
        public readonly ?ScheduledDeliveryShipment $scheduledDeliveryShipment = null,
        public readonly ?GiftDetails $giftDetails = null,
        public readonly ?TaxDetails $taxDetails = null,
        public readonly ?Money $totalPrice = null,
    ) {
    }
}
