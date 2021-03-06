<?php
declare(strict_types=1);

namespace Sirius\Orm\Entity;

class StateEnum
{
    const DELETED = 'deleted';
    const CHANGED = 'changed';
    const SYNCHRONIZED = 'synchronized';
}
