<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210712131448 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reproduction (id INT AUTO_INCREMENT NOT NULL, mere_id INT, pere_id INT DEFAULT NULL, saillie_id INT, date_saillie DATETIME NOT NULL, date_mise_bas DATETIME DEFAULT NULL, cheval_ne TINYINT(1) DEFAULT NULL, INDEX IDX_A2403AE839DEC40E (mere_id), INDEX IDX_A2403AE83FD73900 (pere_id), INDEX IDX_A2403AE848B29F05 (saillie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE saillie (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reproduction ADD CONSTRAINT FK_A2403AE839DEC40E FOREIGN KEY (mere_id) REFERENCES cheval (id)');
        $this->addSql('ALTER TABLE reproduction ADD CONSTRAINT FK_A2403AE83FD73900 FOREIGN KEY (pere_id) REFERENCES cheval (id)');
        $this->addSql('ALTER TABLE reproduction ADD CONSTRAINT FK_A2403AE848B29F05 FOREIGN KEY (saillie_id) REFERENCES saillie (id)');
        $this->addSql('ALTER TABLE affixe CHANGE race_id race_id INT');
        $this->addSql('ALTER TABLE cheval ADD mere_id INT DEFAULT NULL, ADD pere_id INT DEFAULT NULL, ADD reproduction_id INT');
        $this->addSql('ALTER TABLE cheval ADD CONSTRAINT FK_F286849D39DEC40E FOREIGN KEY (mere_id) REFERENCES cheval (id)');
        $this->addSql('ALTER TABLE cheval ADD CONSTRAINT FK_F286849D3FD73900 FOREIGN KEY (pere_id) REFERENCES cheval (id)');
        $this->addSql('ALTER TABLE cheval ADD CONSTRAINT FK_F286849D92C5DB63 FOREIGN KEY (reproduction_id) REFERENCES reproduction (id)');
        $this->addSql('CREATE INDEX IDX_F286849D39DEC40E ON cheval (mere_id)');
        $this->addSql('CREATE INDEX IDX_F286849D3FD73900 ON cheval (pere_id)');
        $this->addSql('CREATE INDEX IDX_F286849D92C5DB63 ON cheval (reproduction_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cheval DROP FOREIGN KEY FK_F286849D92C5DB63');
        $this->addSql('ALTER TABLE reproduction DROP FOREIGN KEY FK_A2403AE848B29F05');
        $this->addSql('DROP TABLE reproduction');
        $this->addSql('DROP TABLE saillie');
        $this->addSql('ALTER TABLE affixe CHANGE race_id race_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cheval DROP FOREIGN KEY FK_F286849D39DEC40E');
        $this->addSql('ALTER TABLE cheval DROP FOREIGN KEY FK_F286849D3FD73900');
        $this->addSql('DROP INDEX IDX_F286849D39DEC40E ON cheval');
        $this->addSql('DROP INDEX IDX_F286849D3FD73900 ON cheval');
        $this->addSql('DROP INDEX IDX_F286849D92C5DB63 ON cheval');
        $this->addSql('ALTER TABLE cheval DROP mere_id, DROP pere_id, DROP reproduction_id');
    }
}
