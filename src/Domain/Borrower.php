<?php

namespace Library\Domain;

final class Borrower
{
    private $borrowerName;

    private $borrowerMembershipId;

    private $status;

    public function __construct(BorrowerBuilder $builder)
    {
        $this->borrowerName = $builder->getBorrowerName();
        $this->borrowerMembershipId = $builder->getBorrowerMembershipId();
        $this->status = $builder->getStatus();
    }

    public function getBorrowerName()
    {
        return $this->borrowerName;
    }

    public function getBorrowerMembershipId()
    {
        return $this->borrowerMembershipId;
    }

    public function getStatus()
    {
        return $this->status;
    }
}
