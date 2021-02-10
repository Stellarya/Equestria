<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210210131141 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cheval ADD sexe_id INT NOT NULL');
        $this->addSql('ALTER TABLE cheval ADD CONSTRAINT FK_F286849D448F3B3C FOREIGN KEY (sexe_id) REFERENCES sexe (id)');
        $this->addSql('CREATE INDEX IDX_F286849D448F3B3C ON cheval (sexe_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cheval DROP FOREIGN KEY FK_F286849D448F3B3C');
        $this->addSql('DROP INDEX IDX_F286849D448F3B3C ON cheval');
        $this->addSql('ALTER TABLE cheval DROP sexe_id');
    }
}
