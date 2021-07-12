<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210712185920 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE personne ADD est_cavalier TINYINT(1) NOT NULL, ADD est_proprietaire TINYINT(1) NOT NULL DEFAULT false ');
        $this->addSql('ALTER TABLE reproduction CHANGE mere_id mere_id INT NOT NULL, CHANGE saillie_id saillie_id INT NOT NULL DEFAULT false ');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE affixe CHANGE race_id race_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cheval CHANGE reproduction_id reproduction_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE personne DROP est_cavalier, DROP est_proprietaire');
        $this->addSql('ALTER TABLE reproduction CHANGE mere_id mere_id INT DEFAULT NULL, CHANGE saillie_id saillie_id INT DEFAULT NULL');
    }
}
