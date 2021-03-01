<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210228185109 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE couleur (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cheval ADD date_naissance DATETIME NOT NULL, ADD date_deces DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE personne ADD date_naissance DATETIME DEFAULT NULL, ADD adresse VARCHAR(255) DEFAULT NULL, ADD code_postal INT DEFAULT NULL, ADD ville VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE race ADD origine VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE robe ADD criniere_id INT NOT NULL, ADD corps_id INT NOT NULL, DROP criniere, DROP corps');
        $this->addSql('ALTER TABLE robe ADD CONSTRAINT FK_C9EAA7E43551AE65 FOREIGN KEY (criniere_id) REFERENCES couleur (id)');
        $this->addSql('ALTER TABLE robe ADD CONSTRAINT FK_C9EAA7E4190A1B68 FOREIGN KEY (corps_id) REFERENCES couleur (id)');
        $this->addSql('CREATE INDEX IDX_C9EAA7E43551AE65 ON robe (criniere_id)');
        $this->addSql('CREATE INDEX IDX_C9EAA7E4190A1B68 ON robe (corps_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE robe DROP FOREIGN KEY FK_C9EAA7E43551AE65');
        $this->addSql('ALTER TABLE robe DROP FOREIGN KEY FK_C9EAA7E4190A1B68');
        $this->addSql('DROP TABLE couleur');
        $this->addSql('ALTER TABLE cheval DROP date_naissance, DROP date_deces');
        $this->addSql('ALTER TABLE personne DROP date_naissance, DROP adresse, DROP code_postal, DROP ville');
        $this->addSql('ALTER TABLE race DROP origine');
        $this->addSql('DROP INDEX IDX_C9EAA7E43551AE65 ON robe');
        $this->addSql('DROP INDEX IDX_C9EAA7E4190A1B68 ON robe');
        $this->addSql('ALTER TABLE robe ADD criniere VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD corps VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP criniere_id, DROP corps_id');
    }
}
