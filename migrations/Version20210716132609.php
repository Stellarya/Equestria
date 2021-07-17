<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210716132609 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (10,13)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (10,6)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (10,7)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (10,14)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (10,1)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (10,8)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (10,12)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (10,3)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (10,5)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (10,4)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (10,15)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (10,23)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (10,31)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (10,21)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (10,24)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (10,10)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (10,19)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (10,11)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (10,28)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (10,29)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (10,17)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (11,6)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (11,13)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (11,12)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (11,14)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (11,7)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (11,18)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (11,8)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (11,1)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (11,19)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (11,4)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (11,5)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (11,23)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (11,15)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (11,3)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (11,22)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (11,25)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (11,10)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (11,21)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (11,24)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (11,29)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (11,11)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (11,16)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (11,17)");
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cheval CHANGE reproduction_id reproduction_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE personne CHANGE est_proprietaire est_proprietaire TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE reproduction CHANGE saillie_id saillie_id INT DEFAULT 0 NOT NULL');
    }
}
