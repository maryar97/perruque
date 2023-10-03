<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230927102221 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie ADD parent_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE categorie ADD CONSTRAINT FK_497DD634727ACA70 FOREIGN KEY (parent_id) REFERENCES categorie (id)');
        $this->addSql('CREATE INDEX IDX_497DD634727ACA70 ON categorie (parent_id)');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D376858A8');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67DC8FB842C');
        $this->addSql('DROP INDEX IDX_6EEAA67D376858A8 ON commande');
        $this->addSql('DROP INDEX IDX_6EEAA67DC8FB842C ON commande');
        $this->addSql('ALTER TABLE commande ADD commande_id INT NOT NULL, ADD users_id INT NOT NULL, DROP idlivraison_id, DROP id_users_id');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D82EA2E54 FOREIGN KEY (commande_id) REFERENCES livraison (id)');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D67B3B43D FOREIGN KEY (users_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_6EEAA67D82EA2E54 ON commande (commande_id)');
        $this->addSql('CREATE INDEX IDX_6EEAA67D67B3B43D ON commande (users_id)');
        $this->addSql('ALTER TABLE livraison CHANGE modelivraison modepaiement VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC277674E434');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27BCF5E72D');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27481F68AA');
        $this->addSql('DROP INDEX IDX_29A5EC27481F68AA ON produit');
        $this->addSql('DROP INDEX IDX_29A5EC277674E434 ON produit');
        $this->addSql('DROP INDEX IDX_29A5EC27BCF5E72D ON produit');
        $this->addSql('ALTER TABLE produit ADD reffou VARCHAR(100) NOT NULL, DROP reffou_id, DROP idfournisseur_id, DROP categorie_id, DROP idcategorie');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E91CE10C7');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E9ACCA989B');
        $this->addSql('DROP INDEX IDX_1483A5E91CE10C7 ON users');
        $this->addSql('ALTER TABLE users DROP idcommercial_id, CHANGE email mail VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E9ACCA989B FOREIGN KEY (tauxcomm_id) REFERENCES fournisseur (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D82EA2E54');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D67B3B43D');
        $this->addSql('DROP INDEX IDX_6EEAA67D82EA2E54 ON commande');
        $this->addSql('DROP INDEX IDX_6EEAA67D67B3B43D ON commande');
        $this->addSql('ALTER TABLE commande ADD idlivraison_id INT NOT NULL, ADD id_users_id INT NOT NULL, DROP commande_id, DROP users_id');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D376858A8 FOREIGN KEY (id_users_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67DC8FB842C FOREIGN KEY (idlivraison_id) REFERENCES livraison (id)');
        $this->addSql('CREATE INDEX IDX_6EEAA67D376858A8 ON commande (id_users_id)');
        $this->addSql('CREATE INDEX IDX_6EEAA67DC8FB842C ON commande (idlivraison_id)');
        $this->addSql('ALTER TABLE produit ADD reffou_id INT NOT NULL, ADD idfournisseur_id INT NOT NULL, ADD categorie_id INT NOT NULL, ADD idcategorie INT NOT NULL, DROP reffou');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC277674E434 FOREIGN KEY (idfournisseur_id) REFERENCES fournisseur (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27481F68AA FOREIGN KEY (reffou_id) REFERENCES fournisseur (id)');
        $this->addSql('CREATE INDEX IDX_29A5EC27481F68AA ON produit (reffou_id)');
        $this->addSql('CREATE INDEX IDX_29A5EC277674E434 ON produit (idfournisseur_id)');
        $this->addSql('CREATE INDEX IDX_29A5EC27BCF5E72D ON produit (categorie_id)');
        $this->addSql('ALTER TABLE livraison CHANGE modepaiement modelivraison VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E9ACCA989B');
        $this->addSql('ALTER TABLE users ADD idcommercial_id INT NOT NULL, CHANGE mail email VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E91CE10C7 FOREIGN KEY (idcommercial_id) REFERENCES commercial (id)');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E9ACCA989B FOREIGN KEY (tauxcomm_id) REFERENCES commercial (id)');
        $this->addSql('CREATE INDEX IDX_1483A5E91CE10C7 ON users (idcommercial_id)');
        $this->addSql('ALTER TABLE categorie DROP FOREIGN KEY FK_497DD634727ACA70');
        $this->addSql('DROP INDEX IDX_497DD634727ACA70 ON categorie');
        $this->addSql('ALTER TABLE categorie DROP parent_id');
    }
}
