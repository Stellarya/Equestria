<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210210131034 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cheval DROP sexe_id');
        $this->addSql('ALTER TABLE cheval ADD CONSTRAINT FK_F286849D2195E0F0 FOREIGN KEY (specialite_id) REFERENCES specialite (id)');
        $this->addSql('CREATE INDEX IDX_F286849D2195E0F0 ON cheval (specialite_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cheval DROP FOREIGN KEY FK_F286849D2195E0F0');
        $this->addSql('DROP INDEX IDX_F286849D2195E0F0 ON cheval');
        $this->addSql('ALTER TABLE cheval ADD sexe_id INT NOT NULL');
    }
}
