<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210709200428 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE affixe ADD race_id INT');
        $this->addSql('ALTER TABLE affixe ADD CONSTRAINT FK_E76DC1E86E59D40D FOREIGN KEY (race_id) REFERENCES race (id)');
        $this->addSql('CREATE INDEX IDX_E76DC1E86E59D40D ON affixe (race_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE affixe DROP FOREIGN KEY FK_E76DC1E86E59D40D');
        $this->addSql('DROP INDEX IDX_E76DC1E86E59D40D ON affixe');
        $this->addSql('ALTER TABLE affixe DROP race_id');
    }
}
