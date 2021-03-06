<?php

namespace Innova\CollecticielBundle\Migrations\mysqli;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated migration based on mapping information: modify it with caution
 *
 * Generation date: 2015/03/10 01:52:20
 */
class Version20150310135217 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $this->addSql("
            ALTER TABLE innova_collecticielbundle_comment CHANGE commenttext comment_text LONGTEXT DEFAULT NULL
        ");
    }

    public function down(Schema $schema)
    {
        $this->addSql("
            ALTER TABLE innova_collecticielbundle_comment CHANGE comment_text commentText LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci
        ");
    }
}