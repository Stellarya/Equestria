<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210716191646 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (22,3)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (22,11)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (22,12)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (22,6)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (22,13)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (22,14)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (22,15)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (22,16)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (22,7)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (22,8)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (22,1)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (22,4)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (22,5)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (22,19)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (22,10)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (23,1)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (23,21)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (23,22)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (23,23)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (23,24)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (23,25)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (23,26)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (23,27)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (23,28)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (23,29)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (23,30)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (23,31)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (23,32)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (25,6)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (25,7)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (25,1)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (25,13)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (25,8)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (25,12)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (25,14)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (25,15)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (25,19)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (25,4)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (25,3)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (25,10)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (25,5)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (25,17)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (25,16)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (25,18)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (26,13)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (26,15)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (26,6)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (26,1)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (26,7)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (26,8)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (26,14)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (26,18)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (26,4)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (26,12)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (26,5)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (26,3)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (26,10)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (26,19)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (26,16)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (26,17)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (27,12)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (27,13)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (27,6)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (27,14)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (27,1)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (27,3)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (27,15)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (27,8)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (27,4)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (27,19)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (27,10)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (27,18)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (27,16)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (27,17)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (28,21)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (28,22)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (28,23)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (28,24)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (28,25)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (28,26)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (28,27)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (28,28)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (28,29)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (28,30)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (28,31)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (28,32)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (28,7)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (28,13)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (28,6)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (28,14)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (28,3)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (28,19)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (28,1)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (28,8)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (28,4)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (28,15)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (28,5)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (28,12)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (28,10)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (28,18)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (28,17)");


    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cheval CHANGE reproduction_id reproduction_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE personne CHANGE est_proprietaire est_proprietaire TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE reproduction CHANGE saillie_id saillie_id INT DEFAULT 0 NOT NULL');
    }
}
