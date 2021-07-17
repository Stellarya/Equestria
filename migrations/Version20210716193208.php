<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210716193208 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (32,12)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (32,3)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (32,8)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (32,1)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (32,7)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (32,6)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (32,10)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (32,19)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (32,13)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (32,14)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (32,15)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (32,16)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (32,17)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (32,18)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (33,21)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (33,22)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (33,23)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (33,24)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (33,25)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (33,26)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (33,27)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (33,28)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (33,29)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (33,30)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (33,31)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (33,32)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (40,12)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (40,13)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (40,3)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (40,6)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (40,1)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (40,7)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (40,8)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (40,15)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (40,14)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (40,4)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (40,10)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (40,19)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (40,18)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (40,5)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (40,16)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (40,11)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (40,17)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (41,7)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (41,1)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (41,6)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (41,11)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (41,12)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (41,8)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (41,13)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (41,3)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (41,18)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (41,15)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (41,14)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (41,10)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (42,7)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (42,6)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (42,14)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (42,12)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (42,13)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (42,8)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (42,4)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (42,19)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (42,3)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (42,1)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (42,10)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (42,15)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (42,5)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (42,17)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (42,18)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (42,11)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (43,21)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (43,22)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (43,23)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (43,24)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (43,25)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (43,26)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (43,27)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (43,28)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (43,29)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (43,30)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (43,31)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (43,32)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (43,13)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (43,6)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (43,14)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (43,7)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (43,1)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (43,8)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (43,15)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (43,12)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (43,19)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (43,3)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (43,10)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (43,17)");
        $this->addSql("INSERT INTO race_robe(race_id, robe_id) VALUES (43,18)");


    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
