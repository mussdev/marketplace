<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20181105173601 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE annonce_calendrier ADD CONSTRAINT FK_AC01E93A8805AB2F FOREIGN KEY (annonce_id) REFERENCES annonce (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE annonce_calendrier ADD CONSTRAINT FK_AC01E93AFF52FC51 FOREIGN KEY (calendrier_id) REFERENCES calendrier (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE annonce_prix ADD CONSTRAINT FK_CD9A36C08805AB2F FOREIGN KEY (annonce_id) REFERENCES annonce (id)');
        $this->addSql('ALTER TABLE annonce_prix_public_mairie ADD CONSTRAINT FK_1F646C2E6E28B892 FOREIGN KEY (annonce_prix_id) REFERENCES annonce_prix (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE annonce_prix_public_mairie ADD CONSTRAINT FK_1F646C2E235DA22A FOREIGN KEY (public_mairie_id) REFERENCES publicmairie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE annonce_prix_public_administre ADD CONSTRAINT FK_CF9369E86E28B892 FOREIGN KEY (annonce_prix_id) REFERENCES annonce_prix (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE annonce_prix_public_administre ADD CONSTRAINT FK_CF9369E8A08CF4F FOREIGN KEY (public_administre_id) REFERENCES publicadministre (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE calendrier ADD CONSTRAINT FK_B2753CB9F6203804 FOREIGN KEY (statut_id) REFERENCES statut (id)');
        $this->addSql('DROP INDEX UNIQ_F6B4FB295126AC48 ON membre');
        $this->addSql('ALTER TABLE membre CHANGE mail fonction VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE tarif_administre_epci ADD CONSTRAINT FK_574D41FA8805AB2F FOREIGN KEY (annonce_id) REFERENCES annonce (id)');
        $this->addSql('ALTER TABLE tarif_administre_non_epci ADD CONSTRAINT FK_75AB1B478805AB2F FOREIGN KEY (annonce_id) REFERENCES annonce (id)');
        $this->addSql('ALTER TABLE tarif_non_administre ADD CONSTRAINT FK_DE4FA49B8805AB2F FOREIGN KEY (annonce_id) REFERENCES annonce (id)');
        $this->addSql('ALTER TABLE tarif_non_epci ADD CONSTRAINT FK_71723D488805AB2F FOREIGN KEY (annonce_id) REFERENCES annonce (id)');
        $this->addSql('ALTER TABLE user ADD membre_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6496A99F74A FOREIGN KEY (membre_id) REFERENCES membre (id)');
        $this->addSql('CREATE INDEX IDX_8D93D6496A99F74A ON user (membre_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE annonce_calendrier DROP FOREIGN KEY FK_AC01E93A8805AB2F');
        $this->addSql('ALTER TABLE annonce_calendrier DROP FOREIGN KEY FK_AC01E93AFF52FC51');
        $this->addSql('ALTER TABLE annonce_prix DROP FOREIGN KEY FK_CD9A36C08805AB2F');
        $this->addSql('ALTER TABLE annonce_prix_public_administre DROP FOREIGN KEY FK_CF9369E86E28B892');
        $this->addSql('ALTER TABLE annonce_prix_public_administre DROP FOREIGN KEY FK_CF9369E8A08CF4F');
        $this->addSql('ALTER TABLE annonce_prix_public_mairie DROP FOREIGN KEY FK_1F646C2E6E28B892');
        $this->addSql('ALTER TABLE annonce_prix_public_mairie DROP FOREIGN KEY FK_1F646C2E235DA22A');
        $this->addSql('ALTER TABLE calendrier DROP FOREIGN KEY FK_B2753CB9F6203804');
        $this->addSql('ALTER TABLE membre CHANGE fonction mail VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F6B4FB295126AC48 ON membre (mail)');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FA76ED395');
        $this->addSql('ALTER TABLE tarif_administre_epci DROP FOREIGN KEY FK_574D41FA8805AB2F');
        $this->addSql('ALTER TABLE tarif_administre_non_epci DROP FOREIGN KEY FK_75AB1B478805AB2F');
        $this->addSql('ALTER TABLE tarif_non_administre DROP FOREIGN KEY FK_DE4FA49B8805AB2F');
        $this->addSql('ALTER TABLE tarif_non_epci DROP FOREIGN KEY FK_71723D488805AB2F');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6496A99F74A');
        $this->addSql('DROP INDEX IDX_8D93D6496A99F74A ON user');
        $this->addSql('ALTER TABLE user DROP membre_id');
    }
}
