<?php declare(strict_types=1);

namespace Swag\BasicExample\Service;

use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Core\System\SystemConfig\SystemConfigService;

class ExampleService
{
    private SystemConfigService $systemConfigService;

    public function __construct(SystemConfigService $systemConfigService)
    {
        $this->systemConfigService = $systemConfigService;
    }

    public function getShopname(SalesChannelContext $context): string
    {
        return $this->systemConfigService->getString('core.basicInformation.shopName', $context->getSalesChannel()->getId());
    }
}