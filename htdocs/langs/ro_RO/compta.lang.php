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

$compta = array(
		'CHARSET' => 'UTF-8',
		'Accountancy' => 'Contabilitate',
		'AccountancyCard' => 'Fişa Contabilitate',
		'Treasury' => 'Trezoreria',
		'MenuFinancial' => 'Financiar',
		'TaxModuleSetupToModifyRules' => 'Du-te la <a href="%s">Configurare  modul</a> pentru  modifica regulile de calcul',
		'OptionMode' => 'Opţiune contabilitate',
		'OptionModeTrue' => 'Opţiunea Venituri-Cheltuieli',
		'OptionModeVirtual' => 'Opţiunea Creante-Debite',
		'OptionModeTrueDesc' => 'În acest mod, C A se calculează pe baza plăţilor (data plăţi). Valabilitatea a cifrelor este asigurată numai în cazul în care cartea-ţinerea este analizată prin intrare / ieşire de pe conturi, prin intermediul facturilor.',
		'OptionModeVirtualDesc' => 'În acest context, cifra de afaceri se calculează pe facturi (data de validare). Când aceste facturi se datorează, indiferent dacă acestea au fost plătite sau nu, ele sunt enumerate în cifra de afaceri de ieşire.',
		'FeatureIsSupportedInInOutModeOnly' => 'Caracteristicã disponibil doar în CREDITE-DEBTS Mod de contabilitate (a se vedea modul de configurare de contabilitate)',
		'VATReportBuildWithOptionDefinedInModule' => 'Sumele prezentate aici sunt calculate folosind regulile definite de modul de configurare fiscale.',
		'Param' => 'Setup',
		'RemainingAmountPayment' => 'Suma rămasă de plată:',
		'AmountToBeCharged' => 'Suma totală pentru plata:',
		'AccountsGeneral' => 'Conturi',
		'Account' => 'Cont',
		'Accounts' => 'Conturi',
		'Accountparent' => 'Account parent',
		'Accountsparent' => 'Accounts parent',
		'BillsForSuppliers' => 'Notele de plata pentru furnizorii',
		'Income' => 'Venituri',
		'Outcome' => 'Rezultat',
		'ReportInOut' => 'Venituri / Rezultate',
		'ReportTurnover' => 'Cifra de afaceri',
		'PaymentsNotLinkedToInvoice' => 'Plăţile nu sunt legate de orice factură, astfel încât nu au legătură cu o terţă parte',
		'PaymentsNotLinkedToUser' => 'Plăţile nu sunt legate de orice utilizator',
		'Profit' => 'Profit',
		'Balance' => 'Balanţa',
		'Debit' => 'Debit',
		'Credit' => 'De credit',
		'Withdrawal' => 'Retragerea',
		'Withdrawals' => 'Retrageri',
		'AmountHTVATRealReceived' => 'HT colectate',
		'AmountHTVATRealPaid' => 'HT platite',
		'VATToPay' => 'La plata TVA-ului',
		'VATReceived' => 'TVA-ul a primit',
		'VATToCollect' => 'TVA-ul pentru a colecta',
		'VATSummary' => 'TVA Sumar',
		'LT2SummaryES' => 'Balanţa IRPF',
		'VATPaid' => 'Plata TVA-ului',
		'LT2PaidES' => 'IRPF plătit',
		'LT2CustomerES' => 'IRPF de vânzări',
		'LT2SupplierES' => 'IRPF achiziţii',
		'VATCollected' => 'TVA colectat',
		'ToPay' => 'Pentru a plăti',
		'ToGet' => 'Pentru a primi înapoi',
		'TaxAndDividendsArea' => 'De impozitare, contribuţii sociale şi dividende zona',
		'SocialContribution' => 'Social contribuţie',
		'SocialContributions' => 'Contribuţii sociale',
		'MenuTaxAndDividends' => 'Impozite şi dividende',
		'MenuSocialContributions' => 'Contribuţii sociale',
		'MenuNewSocialContribution' => 'New contribuţie',
		'NewSocialContribution' => 'New contribuţiilor sociale',
		'ContributionsToPay' => 'Contribuţii la plata',
		'AccountancyTreasuryArea' => 'Contabilitate / Trezoreria zona',
		'AccountancySetup' => 'Contabilitate setup',
		'NewPayment' => 'New plată',
		'Payments' => 'Plăţi',
		'PaymentCustomerInvoice' => 'Clientul facturii de plată',
		'PaymentSupplierInvoice' => 'Furnizor facturii de plată',
		'PaymentSocialContribution' => 'Social plata contribuţiei',
		'PaymentVat' => 'TVA de plată',
		'ListPayment' => 'Lista de plăţi',
		'ListOfPayments' => 'Lista de plăţi',
		'ListOfCustomerPayments' => 'Lista de clienţi de plăţi',
		'ListOfSupplierPayments' => 'Lista de furnizor de plăţi',
		'DatePayment' => 'Plata data',
		'NewVATPayment' => 'New plata TVA',
		'newLT2PaymentES' => 'Nou IRPF plată',
		'LT2PaymentES' => 'IRPF de plata',
		'LT2PaymentsES' => 'IRPF Plăţi',
		'VATPayment' => 'TVA de plată',
		'VATPayments' => 'TVA Plăţi',
		'SocialContributionsPayments' => 'Contribuţii sociale plăţi',
		'ShowVatPayment' => 'Arata plata TVA',
		'TotalToPay' => 'Total de a plăti',
		'TotalVATReceived' => 'Total TVA primit',
		'CustomerAccountancyCode' => 'Clientul contabile cod',
		'SupplierAccountancyCode' => 'Furnizor de contabilitate cod',
		'AlreadyPaid' => 'Deja platite',
		'AccountNumberShort' => 'Numărul de cont',
		'AccountNumber' => 'Numărul de cont',
		'NewAccount' => 'Cont nou',
		'SalesTurnover' => 'Vanzari cifra de afaceri',
		'ByThirdParties' => 'Bu terţi',
		'ByUserAuthorOfInvoice' => 'Prin factura autor',
		'AccountancyExport' => 'Contabilitate export',
		'ErrorWrongAccountancyCodeForCompany' => 'Bad client contabile cod pentru %s',
		'SuppliersProductsSellSalesTurnover' => 'A cifrei de afaceri generate de vânzările de furnizorii de produse.',
		'CheckReceipt' => 'Verificaţi depozit',
		'CheckReceiptShort' => 'Verificaţi depozit',
		'NewCheckReceipt' => 'Noua reducere',
		'NewCheckDeposit' => 'New verifica depozit',
		'NewCheckDepositOn' => 'New verifica depozit în contul: %s',
		'NoWaitingChecks' => 'Nu controale de aşteptare pentru depozit.',
		'DateChequeReceived' => 'Cec Recepţie data de intrare',
		'NbOfCheques' => 'Nb de cecuri',
		'PaySocialContribution' => 'Plătesc o contribuţie socială',
		'ConfirmPaySocialContribution' => 'Sunteţi sigur că doriţi pentru a clasifica această contribuţie socială ca platite?',
		'DeleteSocialContribution' => 'Ştergeţi o contribuţie socială',
		'ConfirmDeleteSocialContribution' => 'Sunteţi sigur că doriţi să ştergeţi această contribuţie socială?',
		'ExportDataset_tax_1' => 'Contribuţii sociale, cât şi plăţile',
		'AnnualSummaryDueDebtMode' => 'Bilan des recettes et dpenses, rsum annuel, en <b>Mod %sCrances-Dettes %s</b> dit <b>comptabilit de angajament.</b>',
		'AnnualSummaryInputOutputMode' => 'Bilan des recettes et dpenses, rsum annuel, en <b>Mod %sRecettes-Dpenses %s</b> dit <b>comptabilit de Caisse.</b>',
		'AnnualByCompaniesDueDebtMode' => 'Bilan des recettes et dpenses, dtail par niveluri, en <b>Mod %sCrances-Dettes %s</b> dit <b>comptabilit de angajament.</b>',
		'AnnualByCompaniesInputOutputMode' => 'Bilan des recettes et dpenses, dtail par niveluri, en <b>Mod %sRecettes-Dpenses %s</b> dit <b>comptabilit de Caisse.</b>',
		'SeeReportInInputOutputMode' => 'Voir le <b>Rapport %sRecettes-Dpenses %s</b> dit <b>comptabilit de Caisse</b> turna un calcul sur les paiements effectivement raliss',
		'SeeReportInDueDebtMode' => 'Voir le <b>Rapport %sCrances-Dettes %s</b> dit <b>comptabilit d\'angajament</b> turna un calcul sur les factures mises',
		'RulesResultDue' => '- Sumele indicate sunt cu toate taxele incluse <br> - Ea include facturilor restante, a cheltuielilor şi a TVA-ului, indiferent dacă acestea sunt plătite sau nu. <br> - Se bazează pe data de validare de facturi si TVA-ul şi cu privire la data scadentă pentru cheltuieli.',
		'RulesResultInOut' => '- Sumele indicate sunt cu toate taxele incluse <br> - Ea include real plăţile efectuate de pe facturi, cheltuielilor şi a TVA-ului. <br> - Se bazează pe datele de plată a facturilor, cheltuielile anf TVA. <br>',
		'RulesCADue' => '- Ea include clientilor din cauza facturilor, indiferent dacă acestea sunt plătite sau nu. <br> - Se bazează pe data de validare a acestor facturi. <br>',
		'RulesCAIn' => '- Ea include toate plăţile efective a facturilor primite de la clienti. <br> - Se bazează pe data de plată a acestor facturi <br>',
		'DepositsAreNotIncluded' => '- Facturile de depozit sunt nici nu sunt incluse',
		'DepositsAreIncluded' => '- Facturile de depozit sunt incluse',
		'LT2ReportByCustomersInInputOutputModeES' => 'Raport de terţă parte IRPF',
		'VATReportByCustomersInInputOutputMode' => 'Raport de TVA clientului colectate şi plătite (TVA primire)',
		'VATReportByCustomersInDueDebtMode' => 'Raport de TVA clientului colectate şi plătite (TVA)',
		'VATReportByQuartersInInputOutputMode' => 'Raport de rata a TVA colectate şi plătite (TVA primire)',
		'VATReportByQuartersInDueDebtMode' => 'Raport de rata a TVA colectate şi plătite (TVA)',
		'SeeVATReportInInputOutputMode' => 'A se vedea raportul <b>%sVAT encasement%s</b> pentru un calcul standard',
		'SeeVATReportInDueDebtMode' => 'A se vedea raportul <b>privind %sVAT flow%s</b> pentru un calcul, cu o opţiune de pe fluxul',
		'RulesVATInServices' => '- Pentru servicii, raportul include reglementări de TVA efectiv primite sau emise pe baza de data plăţii. <br> - Pentru activele materiale, aceasta include TVA facturile pe baza de data facturii.',
		'RulesVATInProducts' => '- Pentru activele materiale, aceasta include TVA facturile pe baza de data facturii.',
		'RulesVATDueServices' => '- Pentru servicii, raportul include facturi TVA-ului datorat, plătite sau nu, în funcţie de data facturii.',
		'RulesVATDueProducts' => '- Pentru activele materiale, aceasta include facturi cu TVA, pe baza data facturii.',
		'OptionVatInfoModuleComptabilite' => 'Notă: Pentru bunuri materiale, ar trebui să utilizeze la data livrării să fie mai echitabil.',
		'PercentOfInvoice' => '%%/factura',
		'NotUsedForGoods' => 'Nu sunt utilizate pentru cumpărarea de bunuri',
		'ProposalStats' => 'Statistici privind propunerile',
		'OrderStats' => 'Statistici privind ordinele de',
		'InvoiceStats' => 'Statistici privind facturile',
		'Dispatch' => 'Dispecerizare',
		'Dispatched' => 'Expediate',
		'ToDispatch' => 'Pentru a expedierii',
		'ThirdPartyMustBeEditAsCustomer' => 'A treia parte trebuie să fie definit ca un client',
		'SellsJournal' => 'Jurnalul de vânzări',
		'PurchasesJournal' => 'Cumparari Jurnalul',
		'DescSellsJournal' => 'Jurnalul de vânzări',
		'DescPurchasesJournal' => 'Cumparari Jurnalul',
		'InvoiceRef' => 'Factură ref.',
		'CodeNotDef' => 'Nu a fost definit',
		'AddRemind' => 'Expedierea Suma disponibilă',
		'RemainToDivide' => 'Ramaneti la expediere:',
		'WarningDepositsNotIncluded' => 'Depozitele facturile nu sunt incluse in aceasta versiune cu acest modul de contabilitate.',
		'DatePaymentTermCantBeLowerThanObjectDate' => 'Payment term date can\'t be lower than object date.',
		'Pcg_version' => 'Pcg version',
		'Pcg_type' => 'Pcg type',
		'Pcg_subtype' => 'Pcg subtype',
		'Withdrawl' => 'Prélèvement',
		'Withdrawls' => 'Prélèvements',
		'ToGetBack' => 'A récupérer',
		'Journaux' => 'Journaux',
		'Piece' => 'Piece compta',
		'JournalNum' => 'Journal',
		'COMPTA_JOURNAL_SELL' => 'Numéro comptable du Journal des Achats',
		'COMPTA_JOURNAL_BUY' => 'Numéro comptable du Journal des Ventes',
		'COMPTA_PRODUCT_BUY_ACCOUNT' => 'Compte comptable par défaut pour produits achetés (si non défini sur fiche produit)',
		'COMPTA_PRODUCT_SOLD_ACCOUNT' => 'Compte comptable par défaut pour produits vendus (si non défini sur fiche produit)',
		'COMPTA_SERVICE_BUY_ACCOUNT' => 'Compte comptable par défaut pour services achetés (si non défini sur fiche service)',
		'COMPTA_SERVICE_SOLD_ACCOUNT' => 'Compte comptable par défaut pour services vendus (si non défini sur fiche service)',
		'COMPTA_VAT_ACCOUNT' => 'Compte comptable par défaut pour TVA (si non défini dans dictionnaire "Taux de TVA")',
		'COMPTA_ACCOUNT_CUSTOMER' => 'Compte comptable client par défaut (si non défini sur fiche tiers)',
		'COMPTA_ACCOUNT_SUPPLIER' => 'Compte comptable fournisseur par défaut (si non défini sur fiche tiers)',
);
?>