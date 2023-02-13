<?php declare(strict_types=1);

namespace Swag\BasicExample\Content\Example;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;
use Swag\BasicExample\Content\Example\ExampleEntity;

/**
 * @method void               add(ExampleEntity $entity)
 * @method void               set(string $key, ExampleEntity $entity)
 * @method ExampleEntity[]    getIterator()
 * @method ExampleEntity[]    getElements()
 * @method ExampleEntity|null get(string $key)
 * @method ExampleEntity|null first()
 * @method ExampleEntity|null last()
 */
class ExampleCollection extends EntityCollection
{
    public function getApiAlias(): string
    {
        return 'example_collection';
    }

    protected function getExpectedClass(): string
    {
        return ExampleEntity::class;
    }
}