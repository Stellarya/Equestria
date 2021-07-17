<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210715132800 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Fjord','Norvège',1)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Haflinger','Autriche',1)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Dartmoor','Angleterre',1)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Welsh','Pays de Galle',1)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Pottok','France',1)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Francais de Selle','France',1)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Quarter Pony','USA',1)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Selle Belge','Belgique',1)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Kerry Bog','Irlande',1)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Highland Pony','Ecosse',1)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Terre-Neuve','Canada',1)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Fjord','Islande',1)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Trotteur Français','France',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Trotteur Américain','USA',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Trotteur Orlov','Russie',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Anglo-Arabe','Angleterre',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Pur-Sang Anglais','Angleterre',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Pur-Sang Arabe','Arabie',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Appaloosa','USA',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Palomino','USA',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Trakhener','Allemagne',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Quarter Horse','USA',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('KWPN','Pays-Bas',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Mustang','USA',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('ONC','-',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Henson','France',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Lipizzan','Espagne',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Pure Race Espagnole','Espagne',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Paint Horse','France',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Hanovrien','Allemagne',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Percheron','France',3)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Trait Breton','Bretagne',3)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Postier Breton','Bretagne',3)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Shire','Angleterre',3)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Ardenais','France',3)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Hunter','Irlande',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Barbe','Egypte',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Brumby','Australie',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Marwari','Inde',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Akhal-Téké','Turkmenistan',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Morgan','USA',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Paso Péruvien','Pérou',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Lusitanien','Espagne',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Tinker','Irlande',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Curly','USA',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Holstein','Allemagne',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Knabstrup','Danemark',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Tennessee Walker','USA',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Criollo','Argentine',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Cheval Islandais','Islande',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Oldenburg','Allemagne',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Cheval Canadien','Canadien',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Donskaya','Russie',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Hackney','Angleterre',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Cheval Finlandais','Finlande',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Comtois','Francais',3)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Clysdesdale','Angleterre',3)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Burgette','Espagne',3)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Boulonnais','France',3)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Auxois','France',3)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Franches Montagnes','Suisse',3)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Camargue','France',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Merens','France',2)");
        $this->addSql("INSERT INTO race(libelle, origine, type_race_id) VALUES ('Falabella','Argentine',3)");

    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cheval CHANGE reproduction_id reproduction_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE personne CHANGE est_proprietaire est_proprietaire TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE reproduction CHANGE saillie_id saillie_id INT DEFAULT 0 NOT NULL');
    }
}
