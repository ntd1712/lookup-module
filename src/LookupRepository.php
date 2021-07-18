<?php

namespace Chaos\Modules\Lookup;

use Chaos\Repository\AbstractEntityRepository;

/**
 * Class LookupRepository.
 */
class LookupRepository extends AbstractEntityRepository
{
    /**
     * @var string
     */
    protected $_entityName = 'Chaos\Modules\Lookup\Entity\Lookup';
}
