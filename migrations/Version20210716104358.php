<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210716104358 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {

        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (9,13)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (9,14)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (9,15)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (9,16)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (9,6)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (9,7)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (9,8)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (9,21)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (9,22)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (9,23)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (9,24)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (9,25)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (9,28)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (9,29)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (9,1)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (9,12)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (9,3)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (9,10)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (9,5)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (9,19)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (9,17)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (9,4)");
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cheval CHANGE reproduction_id reproduction_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE personne CHANGE est_proprietaire est_proprietaire TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE reproduction CHANGE saillie_id saillie_id INT DEFAULT 0 NOT NULL');
    }
}
