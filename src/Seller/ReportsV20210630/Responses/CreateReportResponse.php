<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ReportsV20210630\Responses;

use SellingPartnerApi\Response;

final class CreateReportResponse extends Response
{
    /**
     * @param  string  $reportId  The identifier for the report. This identifier is unique only in combination with a seller ID.
     */
    public function __construct(
        public readonly string $reportId,
    ) {
    }
}
