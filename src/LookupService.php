<?php

namespace Chaos\Modules\Lookup;

use Chaos\Service\AbstractEntityRepositoryService;

/**
 * Class LookupService.
 */
class LookupService extends AbstractEntityRepositoryService
{
    /**
     * @param LookupRepository $lookupRepository The repository to use.
     * @param LookupSubscriber $lookupSubscriber The subscriber to use.
     */
    public function __construct(LookupRepository $lookupRepository, LookupSubscriber $lookupSubscriber)
    {
        $this->repository = $lookupRepository;
        $this->subscriber = $lookupSubscriber;
    }
}
