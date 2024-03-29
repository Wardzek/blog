<?php

namespace ContainerY8tT6QA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XLGlD39Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xLGlD39' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xLGlD39'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\CategoryCrudController::autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController::batchDelete' => ['privates', '.service_locator.Olybskb', 'get_ServiceLocator_OlybskbService', true],
            'App\\Controller\\Admin\\CategoryCrudController::configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\CategoryCrudController::configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\CategoryCrudController::configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\CategoryCrudController::configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\CategoryCrudController::configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\CategoryCrudController::createEditForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\CategoryCrudController::createEditFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\CategoryCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.3on9uHL', 'get_ServiceLocator_3on9uHLService', true],
            'App\\Controller\\Admin\\CategoryCrudController::createNewForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\CategoryCrudController::createNewFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\CategoryCrudController::delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController::deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\CategoryCrudController::detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController::edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController::index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController::new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController::persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\CategoryCrudController::renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController::updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => ['privates', '.service_locator.q6hA_O0', 'get_ServiceLocator_Q6hAO0Service', true],
            'App\\Controller\\Admin\\LevelCrudController::autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\LevelCrudController::batchDelete' => ['privates', '.service_locator.Olybskb', 'get_ServiceLocator_OlybskbService', true],
            'App\\Controller\\Admin\\LevelCrudController::configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\LevelCrudController::configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\LevelCrudController::configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\LevelCrudController::configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\LevelCrudController::configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\LevelCrudController::createEditForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\LevelCrudController::createEditFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\LevelCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.3on9uHL', 'get_ServiceLocator_3on9uHLService', true],
            'App\\Controller\\Admin\\LevelCrudController::createNewForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\LevelCrudController::createNewFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\LevelCrudController::delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\LevelCrudController::deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\LevelCrudController::detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\LevelCrudController::edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\LevelCrudController::index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\LevelCrudController::new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\LevelCrudController::persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\LevelCrudController::renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\LevelCrudController::updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\PostCrudController::autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\PostCrudController::batchDelete' => ['privates', '.service_locator.Olybskb', 'get_ServiceLocator_OlybskbService', true],
            'App\\Controller\\Admin\\PostCrudController::configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\PostCrudController::configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\PostCrudController::configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\PostCrudController::configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\PostCrudController::configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\PostCrudController::createEditForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\PostCrudController::createEditFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\PostCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.3on9uHL', 'get_ServiceLocator_3on9uHLService', true],
            'App\\Controller\\Admin\\PostCrudController::createNewForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\PostCrudController::createNewFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\PostCrudController::delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\PostCrudController::deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\PostCrudController::detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\PostCrudController::edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\PostCrudController::index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\PostCrudController::new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\PostCrudController::persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\PostCrudController::renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\PostCrudController::updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\PostController::details' => ['privates', '.service_locator.E6OewJ8', 'get_ServiceLocator_E6OewJ8Service', true],
            'App\\Controller\\PostController::filter' => ['privates', '.service_locator.ja1C.mw', 'get_ServiceLocator_Ja1C_MwService', true],
            'App\\Controller\\PostController::index' => ['privates', '.service_locator.829r_dx', 'get_ServiceLocator_829rDxService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.TB2K.kG', 'get_ServiceLocator_TB2K_KGService', true],
            'App\\Controller\\RegistrationController::verifyUserEmail' => ['privates', '.service_locator.mzjt3rI', 'get_ServiceLocator_Mzjt3rIService', true],
            'App\\Controller\\ResetPasswordController::request' => ['privates', '.service_locator.D4nGOut', 'get_ServiceLocator_D4nGOutService', true],
            'App\\Controller\\ResetPasswordController::reset' => ['privates', '.service_locator.CRElsIS', 'get_ServiceLocator_CRElsISService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Controller\\Admin\\CategoryCrudController:autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController:batchDelete' => ['privates', '.service_locator.Olybskb', 'get_ServiceLocator_OlybskbService', true],
            'App\\Controller\\Admin\\CategoryCrudController:configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\CategoryCrudController:configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\CategoryCrudController:configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\CategoryCrudController:configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\CategoryCrudController:configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\CategoryCrudController:createEditForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\CategoryCrudController:createEditFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\CategoryCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.3on9uHL', 'get_ServiceLocator_3on9uHLService', true],
            'App\\Controller\\Admin\\CategoryCrudController:createNewForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\CategoryCrudController:createNewFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\CategoryCrudController:delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController:deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\CategoryCrudController:detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController:edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController:index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController:new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController:persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\CategoryCrudController:renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController:updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => ['privates', '.service_locator.q6hA_O0', 'get_ServiceLocator_Q6hAO0Service', true],
            'App\\Controller\\Admin\\LevelCrudController:autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\LevelCrudController:batchDelete' => ['privates', '.service_locator.Olybskb', 'get_ServiceLocator_OlybskbService', true],
            'App\\Controller\\Admin\\LevelCrudController:configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\LevelCrudController:configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\LevelCrudController:configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\LevelCrudController:configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\LevelCrudController:configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\LevelCrudController:createEditForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\LevelCrudController:createEditFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\LevelCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.3on9uHL', 'get_ServiceLocator_3on9uHLService', true],
            'App\\Controller\\Admin\\LevelCrudController:createNewForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\LevelCrudController:createNewFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\LevelCrudController:delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\LevelCrudController:deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\LevelCrudController:detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\LevelCrudController:edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\LevelCrudController:index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\LevelCrudController:new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\LevelCrudController:persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\LevelCrudController:renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\LevelCrudController:updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\PostCrudController:autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\PostCrudController:batchDelete' => ['privates', '.service_locator.Olybskb', 'get_ServiceLocator_OlybskbService', true],
            'App\\Controller\\Admin\\PostCrudController:configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\PostCrudController:configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\PostCrudController:configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\PostCrudController:configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\PostCrudController:configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\PostCrudController:createEditForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\PostCrudController:createEditFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\PostCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.3on9uHL', 'get_ServiceLocator_3on9uHLService', true],
            'App\\Controller\\Admin\\PostCrudController:createNewForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\PostCrudController:createNewFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\PostCrudController:delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\PostCrudController:deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\PostCrudController:detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\PostCrudController:edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\PostCrudController:index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\PostCrudController:new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\PostCrudController:persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\PostCrudController:renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\PostCrudController:updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\PostController:details' => ['privates', '.service_locator.E6OewJ8', 'get_ServiceLocator_E6OewJ8Service', true],
            'App\\Controller\\PostController:filter' => ['privates', '.service_locator.ja1C.mw', 'get_ServiceLocator_Ja1C_MwService', true],
            'App\\Controller\\PostController:index' => ['privates', '.service_locator.829r_dx', 'get_ServiceLocator_829rDxService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.TB2K.kG', 'get_ServiceLocator_TB2K_KGService', true],
            'App\\Controller\\RegistrationController:verifyUserEmail' => ['privates', '.service_locator.mzjt3rI', 'get_ServiceLocator_Mzjt3rIService', true],
            'App\\Controller\\ResetPasswordController:request' => ['privates', '.service_locator.D4nGOut', 'get_ServiceLocator_D4nGOutService', true],
            'App\\Controller\\ResetPasswordController:reset' => ['privates', '.service_locator.CRElsIS', 'get_ServiceLocator_CRElsISService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
        ], [
            'App\\Controller\\Admin\\CategoryCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::delete' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::detail' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::edit' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::index' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::new' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => '?',
            'App\\Controller\\Admin\\LevelCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\LevelCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\LevelCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\LevelCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\LevelCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\LevelCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\LevelCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\LevelCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\LevelCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\LevelCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\LevelCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\LevelCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\LevelCrudController::delete' => '?',
            'App\\Controller\\Admin\\LevelCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\LevelCrudController::detail' => '?',
            'App\\Controller\\Admin\\LevelCrudController::edit' => '?',
            'App\\Controller\\Admin\\LevelCrudController::index' => '?',
            'App\\Controller\\Admin\\LevelCrudController::new' => '?',
            'App\\Controller\\Admin\\LevelCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\LevelCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\LevelCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\PostCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\PostCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\PostCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\PostCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\PostCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\PostCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\PostCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\PostCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\PostCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\PostCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\PostCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\PostCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\PostCrudController::delete' => '?',
            'App\\Controller\\Admin\\PostCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\PostCrudController::detail' => '?',
            'App\\Controller\\Admin\\PostCrudController::edit' => '?',
            'App\\Controller\\Admin\\PostCrudController::index' => '?',
            'App\\Controller\\Admin\\PostCrudController::new' => '?',
            'App\\Controller\\Admin\\PostCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\PostCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\PostCrudController::updateEntity' => '?',
            'App\\Controller\\PostController::details' => '?',
            'App\\Controller\\PostController::filter' => '?',
            'App\\Controller\\PostController::index' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\RegistrationController::verifyUserEmail' => '?',
            'App\\Controller\\ResetPasswordController::request' => '?',
            'App\\Controller\\ResetPasswordController::reset' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:delete' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:detail' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:edit' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:index' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:new' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => '?',
            'App\\Controller\\Admin\\LevelCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\LevelCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\LevelCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\LevelCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\LevelCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\LevelCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\LevelCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\LevelCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\LevelCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\LevelCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\LevelCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\LevelCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\LevelCrudController:delete' => '?',
            'App\\Controller\\Admin\\LevelCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\LevelCrudController:detail' => '?',
            'App\\Controller\\Admin\\LevelCrudController:edit' => '?',
            'App\\Controller\\Admin\\LevelCrudController:index' => '?',
            'App\\Controller\\Admin\\LevelCrudController:new' => '?',
            'App\\Controller\\Admin\\LevelCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\LevelCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\LevelCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\PostCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\PostCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\PostCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\PostCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\PostCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\PostCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\PostCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\PostCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\PostCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\PostCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\PostCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\PostCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\PostCrudController:delete' => '?',
            'App\\Controller\\Admin\\PostCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\PostCrudController:detail' => '?',
            'App\\Controller\\Admin\\PostCrudController:edit' => '?',
            'App\\Controller\\Admin\\PostCrudController:index' => '?',
            'App\\Controller\\Admin\\PostCrudController:new' => '?',
            'App\\Controller\\Admin\\PostCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\PostCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\PostCrudController:updateEntity' => '?',
            'App\\Controller\\PostController:details' => '?',
            'App\\Controller\\PostController:filter' => '?',
            'App\\Controller\\PostController:index' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\RegistrationController:verifyUserEmail' => '?',
            'App\\Controller\\ResetPasswordController:request' => '?',
            'App\\Controller\\ResetPasswordController:reset' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
