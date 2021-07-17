<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210716104214 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (2,13)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (2,4)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (2,1)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (2,19)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (2,6)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (2,7)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (2,14)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (2,8)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (2,5)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (2,15)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (2,10)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (2,12)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (2,18)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (3,13)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (3,6)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (3,7)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (3,8)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (3,14)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (3,15)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (3,12)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (3,1)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (3,19)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (3,3)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (3,21)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (3,22)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (3,23)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (3,24)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (3,25)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (3,4)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (3,10)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (3,18)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (3,16)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (3,17)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (3,29)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (3,30)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (3,5)");
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cheval CHANGE reproduction_id reproduction_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE personne CHANGE est_proprietaire est_proprietaire TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE reproduction CHANGE saillie_id saillie_id INT DEFAULT 0 NOT NULL');
    }
}
