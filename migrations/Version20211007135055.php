<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211007135055 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_framework (user_id INT NOT NULL, framework_id INT NOT NULL, INDEX IDX_9D96E3FDA76ED395 (user_id), INDEX IDX_9D96E3FD37AECF72 (framework_id), PRIMARY KEY(user_id, framework_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_framework ADD CONSTRAINT FK_9D96E3FDA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_framework ADD CONSTRAINT FK_9D96E3FD37AECF72 FOREIGN KEY (framework_id) REFERENCES framework (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user_framework');
    }
}
