<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210715113421 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE race_robe (race_id INT NOT NULL, robe_id INT NOT NULL, INDEX IDX_9497B7AB6E59D40D (race_id), INDEX IDX_9497B7AB69339CCD (robe_id), PRIMARY KEY(race_id, robe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE race_robe ADD CONSTRAINT FK_9497B7AB6E59D40D FOREIGN KEY (race_id) REFERENCES race (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE race_robe ADD CONSTRAINT FK_9497B7AB69339CCD FOREIGN KEY (robe_id) REFERENCES robe (id) ON DELETE CASCADE');

        $this->addSql("INSERT INTO couleur(libelle) VALUES ('Gris Truité')");
        $this->addSql("INSERT INTO couleur(libelle) VALUES ('Gris Pommelé')");
        $this->addSql("INSERT INTO couleur(libelle) VALUES ('Pie Bai')");
        $this->addSql("INSERT INTO couleur(libelle) VALUES ('Pie Noir')");
        $this->addSql("INSERT INTO couleur(libelle) VALUES ('Pie Alezan')");
        $this->addSql("INSERT INTO couleur(libelle) VALUES ('Pie Alezan Brulé')");
        $this->addSql("INSERT INTO couleur(libelle) VALUES ('Pie Bai Brun')");
        $this->addSql("INSERT INTO couleur(libelle) VALUES ('Pie Crème')");
        $this->addSql("INSERT INTO couleur(libelle) VALUES ('Pie Gris Clair')");
        $this->addSql("INSERT INTO couleur(libelle) VALUES ('Pie Gris Pommelé')");
        $this->addSql("INSERT INTO couleur(libelle) VALUES ('Gris Truité')");
        $this->addSql("INSERT INTO couleur(libelle) VALUES ('Cerise')");
        $this->addSql("INSERT INTO couleur(libelle) VALUES ('Rouan')");
        $this->addSql("INSERT INTO couleur(libelle) VALUES ('Aubère')");
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE race_robe');
        $this->addSql('ALTER TABLE cheval CHANGE reproduction_id reproduction_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE personne CHANGE est_proprietaire est_proprietaire TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE reproduction CHANGE saillie_id saillie_id INT DEFAULT 0 NOT NULL');
    }
}
