<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ReportsV20210630\Responses;

use SellingPartnerApi\Response;

final class ReportScheduleList extends Response
{
    protected static array $complexArrayTypes = ['reportSchedules' => [ReportSchedule::class]];

    /**
     * @param  ReportSchedule[]  $reportSchedules
     */
    public function __construct(
        public readonly array $reportSchedules,
    ) {
    }
}
