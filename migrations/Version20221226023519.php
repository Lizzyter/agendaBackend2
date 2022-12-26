<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221226023519 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE contacto (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, numero VARCHAR(255) NOT NULL, apellido VARCHAR(255) DEFAULT NULL, direccion VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contacto_otros_numeros (contacto_id INT NOT NULL, otros_numeros_id INT NOT NULL, INDEX IDX_431BC23F6B505CA9 (contacto_id), INDEX IDX_431BC23F17582735 (otros_numeros_id), PRIMARY KEY(contacto_id, otros_numeros_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE otros_numeros (id INT AUTO_INCREMENT NOT NULL, telefono VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE text (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contacto_otros_numeros ADD CONSTRAINT FK_431BC23F6B505CA9 FOREIGN KEY (contacto_id) REFERENCES contacto (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE contacto_otros_numeros ADD CONSTRAINT FK_431BC23F17582735 FOREIGN KEY (otros_numeros_id) REFERENCES otros_numeros (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contacto_otros_numeros DROP FOREIGN KEY FK_431BC23F6B505CA9');
        $this->addSql('ALTER TABLE contacto_otros_numeros DROP FOREIGN KEY FK_431BC23F17582735');
        $this->addSql('DROP TABLE contacto');
        $this->addSql('DROP TABLE contacto_otros_numeros');
        $this->addSql('DROP TABLE otros_numeros');
        $this->addSql('DROP TABLE text');
    }
}
