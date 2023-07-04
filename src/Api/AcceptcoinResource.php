<?php

namespace App\Api;


use App\Api\Request\Attribute;
use App\Api\Request\Balances\BalanceHistory;
use App\Api\Request\Balances\Balances;
use App\Api\Request\Batches;
use App\Api\Request\Invoice\IframeInvoice;
use App\Api\Request\PaymentMethod\PaymentMethod;
use App\Api\Request\PaymentMethod\ProjectPaymentMethods;
use App\Api\Request\Project\Project;
use App\Api\Request\Project\ProjectFee;
use App\Api\Request\Project\ProjectSettings;
use App\Api\Request\Status;
use App\Api\Request\Transaction\Payment;
use App\Api\Request\Transaction\Payout;
use App\Api\Request\Transaction\Transaction;
use App\Api\Request\User;
use App\ApiResource;

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