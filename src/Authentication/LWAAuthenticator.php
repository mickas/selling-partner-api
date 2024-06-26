<?php

declare(strict_types=1);

namespace SellingPartnerApi\Authentication;

use DateTime;
use Illuminate\Support\Arr;
use SellingPartnerApi\SellingPartnerApi;

class LWAAuthenticator extends AbstractAuthenticator
{
    /**
     * A map of refresh tokens to access tokens. Used to cache access tokens
     * for multiple sets of credentials.
     *
     * @var array[string => AccessToken]
     */
    private static array $accessTokens = [];

    public function __construct(protected SellingPartnerApi $connector)
    {
    }

    /**
     * Gets the access token for OAuth
     */
    protected function getAccessToken(): ?string
    {
        $refreshToken = $this->connector->refreshToken;
        $accessToken = Arr::get(static::$accessTokens, $refreshToken);
        if (! $accessToken || $accessToken->expired()) {
            $jsonData = [
                'grant_type' => 'refresh_token',
                'client_id' => $this->connector->clientId,
                'client_secret' => $this->connector->clientSecret,
                'refresh_token' => $this->connector->refreshToken,
            ];

            $data = $this->makeTokenRequest($jsonData);

            $accessToken = new AccessToken(
                $data['access_token'],
                new DateTime("+{$data['expires_in']} seconds")
            );

            $accessToken = static::$accessTokens[$refreshToken] = $accessToken;
        }

        return $accessToken->token;
    }
}
