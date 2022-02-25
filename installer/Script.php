<?php

declare(strict_types=1);
/**
 * This file is part of Gb-Partner.
 *
 * @link     https://www.greenbirds.cn
 * @document https://e-7.work
 * @contact  liushaofan@greenbirds.cn
 * @license  https://github.com/shaofan7
 */
namespace Installer;

use Composer\Script\Event;

class Script
{
    public static function install(Event $event)
    {
        $installer = new OptionalPackages($event->getIO(), $event->getComposer());

        $installer->io->write('<info>正在创建 GbPartner 插件</info>');

        $installer->setUpComposerJson();
        $installer->mkdir();
        $installer->removeDevDependencies();
        $installer->promptForOptionalPackages();
        $installer->updateRootPackage();
        $installer->removeInstallerFromDefinition();
        $installer->finalizePackage();
    }

    public static function cleanUp(Event $event)
    {
        $installer = new OptionalPackages($event->getIO(), $event->getComposer());
        $installer->cleanUp();
        $installer->io->write('<info>插件创建成功！</info>');
    }
}
