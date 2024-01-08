<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class SearchContentDocumentsResponse extends BaseResponse
{
    /**
     * @param  Error[]  $messageSet A set of messages to the user, such as warnings or comments.
     * @param  ?string  $pageToken A page token that is returned when the results of the call exceed the page size. To get another page of results, call the operation again, passing in this value with the pageToken parameter.
     * @param  ContentMetadataRecord[]  $contentMetadataRecord A list of A+ Content metadata records.
     */
    public function __construct(
        public readonly ?array $messageSet = null,
        public readonly ?string $pageToken = null,
        public readonly ?array $contentMetadataRecord = null,
    ) {
    }
}
