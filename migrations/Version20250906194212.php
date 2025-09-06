<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250906194212 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id SERIAL NOT NULL, category_name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE dish (id SERIAL NOT NULL, category_id INT NOT NULL, name VARCHAR(255) NOT NULL, description TEXT NOT NULL, image VARCHAR(255) DEFAULT NULL, price NUMERIC(5, 2) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_957D8CB812469DE2 ON dish (category_id)');
        $this->addSql('ALTER TABLE dish ADD CONSTRAINT FK_957D8CB812469DE2 FOREIGN KEY (category_id) REFERENCES category (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE dish DROP CONSTRAINT FK_957D8CB812469DE2');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE dish');
    }
}
