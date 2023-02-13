<?php declare(strict_types=1);

namespace Swag\BasicExample\Checkout\Customer\SalesChannel;

use Shopware\Core\Checkout\Customer\SalesChannel\AbstractRegisterRoute;
use Shopware\Core\Checkout\Customer\SalesChannel\CustomerResponse;
use Shopware\Core\Framework\Validation\DataBag\RequestDataBag;
use Shopware\Core\Framework\Validation\DataValidationDefinition;
use Shopware\Core\System\SalesChannel\SalesChannelContext;

/**
 * @Route(defaults={"_routeScope"={"store-api"}, "_contextTokenRequired"=true})
 */
class RegisterRouteDecorator extends AbstractRegisterRoute
{
    private AbstractRegisterRoute $decoratedService;

    public function __construct(AbstractRegisterRoute $exampleService)
    {
        $this->decoratedService = $exampleService;
    }

    public function getDecorated(): AbstractRegisterRoute
    {
        return $this->decoratedService;
    }

    public function register(
        RequestDataBag $data,
        SalesChannelContext $context,
        bool $validateStorefrontUrl = true,
        ?DataValidationDefinition $additionalValidationDefinitions = null
    ): CustomerResponse {
       $response= $this->getDecorated()->register($data,$context,$validateStorefrontUrl,$additionalValidationDefinitions);
       $response->getCustomer()->setCompany("mycompany");
       return $response;
    }
}
