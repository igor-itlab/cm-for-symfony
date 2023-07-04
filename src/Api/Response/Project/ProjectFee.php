<?php

namespace AcceptcoinApi\Api\Response\Project;

class ProjectFee
{
    /**
     * @var float
     */
    protected float $percent;

    /**
     * @var float
     */
    protected float $constant;

    /**
     * @var string
     */
    protected string $direction;

    /**
     * @var string
     */
    protected string $type;

    /**
     * @var Project
     */
    protected Project $project;

    /**
     * @return float
     */
    public function getPercent(): float
    {
        return $this->percent;
    }

    /**
     * @param float $percent
     */
    public function setPercent(float $percent): void
    {
        $this->percent = $percent;
    }

    /**
     * @return float
     */
    public function getConstant(): float
    {
        return $this->constant;
    }

    /**
     * @param float $constant
     */
    public function setConstant(float $constant): void
    {
        $this->constant = $constant;
    }

    /**
     * @return string
     */
    public function getDirection(): string
    {
        return $this->direction;
    }

    /**
     * @param string $direction
     */
    public function setDirection(string $direction): void
    {
        $this->direction = $direction;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return Project
     */
    public function getProject(): Project
    {
        return $this->project;
    }

    /**
     * @param Project $project
     */
    public function setProject(Project $project): void
    {
        $this->project = $project;
    }
}