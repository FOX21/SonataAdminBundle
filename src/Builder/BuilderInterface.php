<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\AdminBundle\Builder;

use Sonata\AdminBundle\FieldDescription\FieldDescriptionInterface;

/**
 * @author Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * NEXT_MAJOR: Remove this interface
 *
 * @deprecated since sonata-project/admin-bundle version 4.x and will be removed in 5.0.
 */
interface BuilderInterface
{
    /**
     * Adds missing information to the given field description and the given admin.
     *
     * @param FieldDescriptionInterface $fieldDescription will be modified
     */
    public function fixFieldDescription(FieldDescriptionInterface $fieldDescription): void;
}
