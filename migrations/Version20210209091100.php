<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210209091100 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cheval (id INT AUTO_INCREMENT NOT NULL, race_id INT NOT NULL, robe_id INT NOT NULL, nom VARCHAR(255) NOT NULL, affixe VARCHAR(255) DEFAULT NULL, is_pure_race TINYINT(1) NOT NULL, poids INT DEFAULT NULL, taille INT DEFAULT NULL, sexe VARCHAR(255) NOT NULL, is_reproducteur TINYINT(1) NOT NULL, INDEX IDX_F286849D6E59D40D (race_id), INDEX IDX_F286849D69339CCD (robe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE race (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE robe (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, criniere VARCHAR(255) NOT NULL, corps VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, roles LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cheval ADD CONSTRAINT FK_F286849D6E59D40D FOREIGN KEY (race_id) REFERENCES race (id)');
        $this->addSql('ALTER TABLE cheval ADD CONSTRAINT FK_F286849D69339CCD FOREIGN KEY (robe_id) REFERENCES robe (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cheval DROP FOREIGN KEY FK_F286849D6E59D40D');
        $this->addSql('ALTER TABLE cheval DROP FOREIGN KEY FK_F286849D69339CCD');
        $this->addSql('DROP TABLE cheval');
        $this->addSql('DROP TABLE race');
        $this->addSql('DROP TABLE robe');
        $this->addSql('DROP TABLE user');
    }
}
