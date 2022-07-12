<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220712161237 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user CHANGE name name VARCHAR(100) NOT NULL, CHANGE firstname firstname VARCHAR(100) NOT NULL, CHANGE mail mail VARCHAR(100) NOT NULL, CHANGE code code VARCHAR(10) NOT NULL, CHANGE code_activated code_activated VARCHAR(10) NOT NULL, CHANGE gain gain VARCHAR(100) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D6495126AC48 ON user (mail)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_8D93D6495126AC48 ON user');
        $this->addSql('ALTER TABLE user CHANGE name name VARCHAR(255) NOT NULL, CHANGE firstname firstname VARCHAR(255) NOT NULL, CHANGE mail mail VARCHAR(255) NOT NULL, CHANGE code code VARCHAR(255) NOT NULL, CHANGE code_activated code_activated VARCHAR(255) NOT NULL, CHANGE gain gain VARCHAR(255) NOT NULL');
    }
}
