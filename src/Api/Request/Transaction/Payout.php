<?php

namespace AcceptcoinApi\Api\Request\Transaction;

use AcceptcoinApi\Api\AcceptcoinRequest;
use AcceptcoinApi\Services\Method;

class Payout extends AcceptcoinRequest
{
    /**
     * @param array|null $criteria
     * @return mixed
     */
    public function getAll(array $criteria = null): mixed
    {
        $rb = $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath('api/payouts');

        if ($criteria) {
            $rb->setQueryParams($criteria);
        }

        return $this->send();
    }

    /**
     * @param string $id
     * @return mixed
     */
    public function getById(string $id): mixed
    {
        $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/payouts/$id");

        return $this->send();
    }

    /**
     * @param string $returnUrl
     * @param string $amount
     * @param string $paymentSystemSubName
     * @param string $currencyAsset
     * @param array $attributes
     * @param string|null $note
     * @return mixed
     */
    public function create(
        string $returnUrl,
        string $amount,
        string $paymentSystemSubName,
        string $currencyAsset,
        array  $attributes,
        string $note = null
    ): mixed
    {
        $body = [
            'returnUrl'     => $returnUrl,
            'amount'        => $amount,
            'note'          => $note,
            'paymentSystem' => $paymentSystemSubName,
            'currency'      => $currencyAsset,
        ];

        if (!empty($attributes)) {
            $body['attributes'] = $attributes;
        }

        if ($note) {
            $body['note'] = $note;
        }

        $this->getRequestBuilder()
            ->setMethod(Method::POST())
            ->setPath('api/payouts')
            ->setBody($body);

        return $this->send();
    }

    /**
     * @param string $amount
     * @param string $balanceId
     * @param string $projectId
     * @return mixed
     */
    public function getPayoutAmount(string $amount, string $balanceId, string $projectId): mixed
    {
        $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/payout-amount")
            ->setQueryParams([
                'amount'    => $amount,
                'balanceId' => $balanceId,
                'projectId' => $projectId
            ]);

        return $this->send();
    }
}