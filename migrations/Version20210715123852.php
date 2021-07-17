<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210715123852 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql("INSERT INTO robe(libelle, criniere_id, corps_id) VALUES ('Rouan',21,21)");
        $this->addSql("INSERT INTO robe(libelle, criniere_id, corps_id) VALUES ('Aubère',22,22)");
        $this->addSql("INSERT INTO robe(libelle, criniere_id, corps_id) VALUES ('Bai',1,6)");
        $this->addSql("INSERT INTO robe(libelle, criniere_id, corps_id) VALUES ('Bai Brun',1,5)");
        $this->addSql("INSERT INTO robe(libelle, criniere_id, corps_id) VALUES ('Bai Cerise',1,20)");
        $this->addSql("INSERT INTO robe(libelle, criniere_id, corps_id) VALUES ('Rouan',21,21)");
        $this->addSql("INSERT INTO robe(libelle, criniere_id, corps_id) VALUES ('Gris Souris',1,3)");
        $this->addSql("INSERT INTO robe(libelle, criniere_id, corps_id) VALUES ('Gris Truité',2,19)");
        $this->addSql("INSERT INTO robe(libelle, criniere_id, corps_id) VALUES ('Gris Pommelé',2,10)");
        $this->addSql("INSERT INTO robe(libelle, criniere_id, corps_id) VALUES ('Alezan',6,6)");
        $this->addSql("INSERT INTO robe(libelle, criniere_id, corps_id) VALUES ('Alezan Brulé',5,5)");
        $this->addSql("INSERT INTO robe(libelle, criniere_id, corps_id) VALUES ('Alezan Crin Lavé',8,6)");
        $this->addSql("INSERT INTO robe(libelle, criniere_id, corps_id) VALUES ('Alezan Brulé Crin Lavé',8,5)");
        $this->addSql("INSERT INTO robe(libelle, criniere_id, corps_id) VALUES ('Cremelo',8,8)");
        $this->addSql("INSERT INTO robe(libelle, criniere_id, corps_id) VALUES ('Palomino',2,7)");
        $this->addSql("INSERT INTO robe(libelle, criniere_id, corps_id) VALUES ('Isabelle',1,7)");
        $this->addSql("INSERT INTO robe(libelle, criniere_id, corps_id) VALUES ('Café au lait',7,7)");
        $this->addSql("INSERT INTO robe(libelle, criniere_id, corps_id) VALUES ('Pie Noir',2,12)");
        $this->addSql("INSERT INTO robe(libelle, criniere_id, corps_id) VALUES ('Pie Bai',2,11)");
        $this->addSql("INSERT INTO robe(libelle, criniere_id, corps_id) VALUES ('Pie Alezan',2,13)");
        $this->addSql("INSERT INTO robe(libelle, criniere_id, corps_id) VALUES ('Pie Alezan Brulé',2,14)");
        $this->addSql("INSERT INTO robe(libelle, criniere_id, corps_id) VALUES ('Pie Bai Brun',2,15)");
        $this->addSql("INSERT INTO robe(libelle, criniere_id, corps_id) VALUES ('Pie Crème',2,16)");
        $this->addSql("INSERT INTO robe(libelle, criniere_id, corps_id) VALUES ('Pie Gris Clair',2,17)");
        $this->addSql("INSERT INTO robe(libelle, criniere_id, corps_id) VALUES ('Pie Gris Pommelé',2,18)");

    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cheval CHANGE reproduction_id reproduction_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE personne CHANGE est_proprietaire est_proprietaire TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE reproduction CHANGE saillie_id saillie_id INT DEFAULT 0 NOT NULL');
    }
}
