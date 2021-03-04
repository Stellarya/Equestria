<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210302165538 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE type_race (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE race ADD type_race_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE race ADD CONSTRAINT FK_DA6FBBAF4678BBF8 FOREIGN KEY (type_race_id) REFERENCES type_race (id)');
        $this->addSql('CREATE INDEX IDX_DA6FBBAF4678BBF8 ON race (type_race_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE race DROP FOREIGN KEY FK_DA6FBBAF4678BBF8');
        $this->addSql('DROP TABLE type_race');
        $this->addSql('DROP INDEX IDX_DA6FBBAF4678BBF8 ON race');
        $this->addSql('ALTER TABLE race DROP type_race_id');
    }
}
