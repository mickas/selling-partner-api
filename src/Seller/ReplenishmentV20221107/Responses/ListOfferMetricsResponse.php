<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\ReplenishmentV20221107\Dto\ListOfferMetricsResponseOffer;
use SellingPartnerApi\Seller\ReplenishmentV20221107\Dto\PaginationResponse;

final class ListOfferMetricsResponse extends Response
{
    protected static array $complexArrayTypes = ['offers' => [ListOfferMetricsResponseOffer::class]];

    /**
     * @param  ListOfferMetricsResponseOffer[]|null  $offers  A list of offers and associated metrics.
     * @param  ?PaginationResponse  $pagination  Use these parameters to paginate through the response.
     */
    public function __construct(
        public readonly ?array $offers = null,
        public readonly ?PaginationResponse $pagination = null,
    ) {
    }
}