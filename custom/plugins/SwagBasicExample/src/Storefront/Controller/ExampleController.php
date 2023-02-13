<?php declare(strict_types=1);

namespace Swag\BasicExample\Storefront\Controller;


use Ramsey\Uuid\Uuid;
use Shopware\Core\Content\Content;
use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Shopware\Core\Framework\Routing\Annotation\Since;
use Shopware\Core\System\SystemConfig\SystemConfigService;
use Shopware\Storefront\Controller\StorefrontController;
use Symfony\Component\HttpFoundation\Request;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route(defaults={"_routeScope"={"storefront"}})
 */
class ExampleController extends StorefrontController
{
    private SystemConfigService $systemConfigService;
    private EntityRepository $entityRepository;

    public function __construct(SystemConfigService $systemConfigService,EntityRepository $entityRepository)
    {
        $this->systemConfigService = $systemConfigService;
        $this->entityRepository=$entityRepository;
    }

    /**
     * @Route("/newhello", name="frontend.newhello", methods={"GET"}, defaults={"_routeScope"={"storefront"}})
     */
    public function showExample(Request $request)
    {
        /** json response controller */
        return new JsonResponse(['helo' => 'kko']);

        /** Forward response controller */
         //return $this->forwardToRoute('frontend.account.login.page',['sucess' => true]);
       // $id= \Shopware\Core\Framework\Uuid\Uuid::randomHex();

        /** Add new entry in the custom table */
        $name="hello";
        $nationality="paki";
//        $this->entityRepository->create([
//            [
//            'id'=> $id,
//            'name'=> $name,
//            'nationality'=> $nationality
//            ]
//        ],Context::createDefaultContext());

        /** update entry in the custom table */
//        $this->entityRepository->update([[
//            'id' => '0xEE8AD11E57A6400490BB6AF42FBB6E95',
//            'name' => 'worls',
//        ]],Context::createDefaultContext());


        /** display data on view.html.twig from contoller */


//        $name = 'Matheus Gontijo';
//        $randomNumber = rand(0, 999);
//        $shop=$this->systemConfigService->get('SwagBasicExample.config.email');
//        return $this->renderStorefront('@Storefront/storefront/page/hello-world/view.html.twig', [
//            'name' => $name,
//            'randomNumber' => $randomNumber,
//            'shop' => $shop,
//        ]);
    }
}