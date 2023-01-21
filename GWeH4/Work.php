<?php

class Work
{
    private string $nameWork;
    private DateTime $startDate;
    private mixed $endDate;
    private string $description;

    function __construct($nameWork, $startDate, $endDate, $description)
    {
        $this->nameWork = $nameWork;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->description = $description;
    }

    public function getNameWork(): string
    {
        return $this->nameWork;
    }

    public function getStartDate(): string
    {
        return $this->startDate->format('d.m.Y');
    }

    public function getEndDate(): mixed
    {
        if ($this->endDate==null){
            return null;
        }
        return $this->endDate->format('d.m.Y');
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
