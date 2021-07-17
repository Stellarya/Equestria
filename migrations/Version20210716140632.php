<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210716140632 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (17,13)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (17,6)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (17,14)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (17,7)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (17,10)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (17,1)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (17,15)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (17,12)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (18,6)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (18,13)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (18,8)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (18,7)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (18,1)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (18,12)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (18,15)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (18,3)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (18,4)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (18,5)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (18,19)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (19,12)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (19,1)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (19,6)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (19,3)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (19,7)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (19,13)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (19,10)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (19,15)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (19,11)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (19,8)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (19,14)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (24,18)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (24,17)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (24,15)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (24,16)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (30,19)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (30,6)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (30,10)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (30,7)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (30,8)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (30,14)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (30,4)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (34,1)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (34,3)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (34,12)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (34,10)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (38,1)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (38,3)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (38,7)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (15,7)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (15,8)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (15,6)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (15,13)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (15,12)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (15,3)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (15,14)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (15,1)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (15,4)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (15,15)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (15,10)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (15,16)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (15,19)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (15,17)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (15,5)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (20,13)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (20,12)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (20,11)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (20,1)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (20,6)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (20,7)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (20,3)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (20,8)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (20,19)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (20,4)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (20,14)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (20,15)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (20,5)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (20,10)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (20,18)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (31,3)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (31,12)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (31,6)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (31,7)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (31,1)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (31,8)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (31,13)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (31,14)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (31,11)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (47,6)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (47,19)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (47,7)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (47,12)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (47,3)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (47,1)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (47,13)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (47,14)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (47,8)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (47,17)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (47,18)");
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cheval CHANGE reproduction_id reproduction_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE personne CHANGE est_proprietaire est_proprietaire TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE reproduction CHANGE saillie_id saillie_id INT DEFAULT 0 NOT NULL');
    }
}
