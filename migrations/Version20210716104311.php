<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210716104311 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs

        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (29,1)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (29,2)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (29,3)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (29,4)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (29,5)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (29,6)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (29,7)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (29,8)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (29,9)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (29,10)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (29,11)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (29,12)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (29,13)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (29,14)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (29,15)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (29,16)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (29,17)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (29,18)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (29,19)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (29,20)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (29,21)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (29,22)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (29,23)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (29,24)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (29,25)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (29,26)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (29,27)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (29,28)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (29,29)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (29,30)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (67,1)");
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cheval CHANGE reproduction_id reproduction_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE personne CHANGE est_proprietaire est_proprietaire TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE reproduction CHANGE saillie_id saillie_id INT DEFAULT 0 NOT NULL');
    }
}
