<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210716104501 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (4,12)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (4,13)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (4,3)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (4,7)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (4,8)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (4,9)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (4,14)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (4,15)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (4,19)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (4,4)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (4,18)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (4,1)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (4,10)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (4,16)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (4,17)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (4,5)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (4,11)");

    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cheval CHANGE reproduction_id reproduction_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE personne CHANGE est_proprietaire est_proprietaire TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE reproduction CHANGE saillie_id saillie_id INT DEFAULT 0 NOT NULL');
    }
}
