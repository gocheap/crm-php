<?php
/* Copyright (C) 2012	Regis Houssin	<regis.houssin@capnetworks.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

$boxes = array(
		'CHARSET' => 'UTF-8',
		'BoxLastRssInfos' => 'Fils d\'informations RSS',
		'BoxLastProducts' => 'Les %s derniers produits/services enregistrés',
		'BoxProductsAlertStock' => 'Produits en alerte stock',
		'BoxLastProductsInContract' => 'Les %s derniers produits/services contractés',
		'BoxLastSupplierBills' => 'Dernières factures fournisseurs',
		'BoxLastCustomerBills' => 'Dernières factures clients',
		'BoxOldestUnpaidCustomerBills' => 'Plus anciennes factures clients impayées',
		'BoxOldestUnpaidSupplierBills' => 'Plus anciennes factures fournisseurs impayées',
		'BoxLastProposals' => 'Dernières propositions commerciales',
		'BoxLastProspects' => 'Derniers prospects modifiés',
		'BoxLastCustomers' => 'Derniers clients modifiés',
		'BoxLastSuppliers' => 'Derniers fournisseurs modifiées',
		'BoxLastCustomerOrders' => 'Dernières commandes',
		'BoxLastBooks' => 'Derniers livres',
		'BoxLastActions' => 'Derniers événements',
		'BoxLastContracts' => 'Derniers contrats',
		'BoxLastContacts' => 'Derniers contacts/adresses',
		'BoxLastMembers' => 'Derniers adhérents modifiés',
		'BoxCurrentAccounts' => 'Soldes Comptes courants',
		'BoxSalesTurnover' => 'Chiffre d\'affaires',
		'BoxTotalUnpaidCustomerBills' => 'Total des factures clients impayées',
		'BoxTotalUnpaidSuppliersBills' => 'Total des factures fournisseurs impayées',
		'BoxTitleLastBooks' => 'Les %s derniers ouvrages enregistrés',
		'BoxTitleNbOfCustomers' => 'Nombre de clients',
		'BoxTitleLastRssInfos' => 'Les %s dernières infos de %s',
		'BoxTitleLastProducts' => 'Les %s derniers produits/services enregistrés',
		'BoxTitleProductsAlertStock' => 'Produits en alerte stock',
		'BoxTitleLastCustomerOrders' => 'Les %s dernières commandes clients modifiées',
		'BoxTitleLastSuppliers' => 'Les %s derniers fournisseurs enregistrés',
		'BoxTitleLastCustomers' => 'Les %s derniers clients enregistrés',
		'BoxTitleLastModifiedSuppliers' => 'Les %s derniers fournisseurs modifiés',
		'BoxTitleLastModifiedCustomers' => 'Les %s derniers clients modifiés',
		'BoxTitleLastCustomersOrProspects' => 'Les %s derniers clients ou prospects modifiés',
		'BoxTitleLastPropals' => 'Les %s dernières propositions enregistrées',
		'BoxTitleLastCustomerBills' => 'Les %s dernières factures clients modifiées',
		'BoxTitleLastSupplierBills' => 'Les %s dernières factures fournisseurs modifiées',
		'BoxTitleLastProspects' => 'Les %s derniers prospects enregistrés',
		'BoxTitleLastModifiedProspects' => 'Les %s derniers prospects modifiés',
		'BoxTitleLastProductsInContract' => 'Les %s derniers produits/services contractés',
		'BoxTitleLastModifiedMembers' => 'Les %s derniers adhérents modifiés',
		'BoxTitleOldestUnpaidCustomerBills' => 'Les %s plus anciennes factures clients impayées',
		'BoxTitleOldestUnpaidSupplierBills' => 'Les %s plus anciennes factures fournisseurs impayées',
		'BoxTitleCurrentAccounts' => 'Les soldes de comptes courants',
		'BoxTitleSalesTurnover' => 'Le chiffre d\'affaires réalisé',
		'BoxTitleTotalUnpaidCustomerBills' => 'Impayés clients',
		'BoxTitleTotalUnpaidSuppliersBills' => 'Impayés fournisseurs',
		'BoxTitleLastModifiedContacts' => 'Les %s derniers contacts/adresses modifiés',
		'BoxMyLastBookmarks' => 'Mes %s derniers marque-pages',
		'BoxOldestExpiredServices' => 'Plus anciens services expirés',
		'BoxLastExpiredServices' => 'Les %s plus anciens contrats avec services actifs expirés',
		'BoxTitleLastActionsToDo' => 'Les %s derniers événements à réaliser',
		'BoxTitleLastContracts' => 'Les %s derniers contrats',
		'BoxTitleLastModifiedDonations' => 'Les %s derniers dons modifiés',
		'BoxTitleLastModifiedExpenses' => 'Les %s dernières note de frais modifiées',
		'BoxGlobalActivity' => 'Activité globale (factures, propositions, commandes)',
		'FailedToRefreshDataInfoNotUpToDate' => 'Échec du rafraichissement du flux RSS. Date du dernier rafraichissement: %s',
		'LastRefreshDate' => 'Date dernier rafraichissement',
		'NoRecordedBookmarks' => 'Pas de bookmarks personnels.',
		'ClickToAdd' => 'Cliquer ici pour ajouter.',
		'NoRecordedCustomers' => 'Pas de client enregistré',
		'NoRecordedContacts' => 'Pas de contact enregistré',
		'NoActionsToDo' => 'Pas d\'événements à réaliser',
		'NoRecordedOrders' => 'Pas de commande client enregistrée',
		'NoRecordedProposals' => 'Pas de proposition commerciale enregistrée',
		'NoRecordedInvoices' => 'Pas de facture client enregistrée',
		'NoUnpaidCustomerBills' => 'Pas de facture client impayée',
		'NoRecordedSupplierInvoices' => 'Pas de facture fournisseur enregistrée',
		'NoUnpaidSupplierBills' => 'Pas de facture fournisseur impayée',
		'NoModifiedSupplierBills' => 'Pas de facture fournisseur modifiée',
		'NoRecordedProducts' => 'Pas de produit/service enregistré',
		'NoRecordedProspects' => 'Pas de prospect enregistré',
		'NoContractedProducts' => 'Pas de produit/service contracté',
		'NoRecordedContracts' => 'Pas de contrat enregistré',
		// Latest supplier orders
		'BoxLatestSupplierOrders' => 'Dernières commandes fournisseur',
		'BoxTitleLatestSupplierOrders' => 'Les %s dernières commandes fournisseur enregistrées',
		'NoSupplierOrder' => 'Pas de commandes fournisseur enregistrées'
);
?>