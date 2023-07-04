<?php

namespace AcceptcoinApi\Api;


use AcceptcoinApi\Api\Request\Attribute;
use AcceptcoinApi\Api\Request\Balances\BalanceHistory;
use AcceptcoinApi\Api\Request\Balances\Balances;
use AcceptcoinApi\Api\Request\Batches;
use AcceptcoinApi\Api\Request\Invoice\IframeInvoice;
use AcceptcoinApi\Api\Request\PaymentMethod\PaymentMethod;
use AcceptcoinApi\Api\Request\PaymentMethod\ProjectPaymentMethods;
use AcceptcoinApi\Api\Request\Project\Project;
use AcceptcoinApi\Api\Request\Project\ProjectFee;
use AcceptcoinApi\Api\Request\Project\ProjectSettings;
use AcceptcoinApi\Api\Request\Status;
use AcceptcoinApi\Api\Request\Transaction\Payment;
use AcceptcoinApi\Api\Request\Transaction\Payout;
use AcceptcoinApi\Api\Request\Transaction\Transaction;
use AcceptcoinApi\Api\Request\User;
use AcceptcoinApi\ApiResource;

class AcceptcoinResource extends ApiResource
{
    /**
     * @var string|null
     */
    private $projectId;
    /**
     * @var string|null
     */
    private $secret;

    /**
     * @param string|null $secret
     * @param string|null $projectId
     */
    public function __construct(string $secret = null, string $projectId = null)
    {
        $this->secret = $secret;
        $this->projectId = $projectId;
    }

    /**
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
     * @param string|null $projectId
     * @return AcceptcoinResource
     */
    public function setProjectId(string $projectId): AcceptcoinResource
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSecret(): string
    {
        return $this->secret;
    }

    /**
     * @param string|null $secret
     * @return AcceptcoinResource
     */
    public function setSecret(string $secret): AcceptcoinResource
    {
        $this->secret = $secret;
        return $this;
    }

    /**
     * @return Project
     */
    public function project(): Project
    {
        return new Project($this);
    }

    /**
     * @return ProjectFee
     */
    public function projectFee(): ProjectFee
    {
        return new ProjectFee($this);
    }

    /**
     * @return ProjectSettings
     */
    public function projectSettings(): ProjectSettings
    {
        return new ProjectSettings($this);
    }

    /**
     * @return IframeInvoice
     */
    public function iframeInvoice(): IframeInvoice
    {
        return new IframeInvoice($this);
    }


    /**
     * @return BalanceHistory
     */
    public function balanceHistory(): BalanceHistory
    {
        return new BalanceHistory($this);
    }

    /**
     * @return Balances
     */
    public function balances(): Balances
    {
        return new Balances($this);
    }

    /**
     * @return PaymentMethod
     */
    public function paymentMethod(): PaymentMethod
    {
        return new PaymentMethod($this);
    }

    /**
     * @return ProjectPaymentMethods
     */
    public function projectPaymentMethod(): ProjectPaymentMethods
    {
        return new ProjectPaymentMethods($this);
    }

    /**
     * @return Payment
     */
    public function payment(): Payment
    {
        return new Payment($this);
    }

    /**
     * @return Payout
     */
    public function payout(): Payout
    {
        return new Payout($this);
    }

    /**
     * @return Transaction
     */
    public function transaction(): Transaction
    {
        return new Transaction($this);
    }

    /**
     * @return Attribute
     */
    public function attribute(): Attribute
    {
        return new Attribute($this);
    }

    /**
     * @return Batches
     */
    public function batches(): Batches
    {
        return new Batches($this);
    }

    /**
     * @return User
     */
    public function user(): User
    {
        return new User($this);
    }

    /**
     * @return Status
     */
    public function status(): Status
    {
        return new Status($this);
    }
}