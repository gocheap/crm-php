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

$users = array(
		'CHARSET' => 'UTF-8',
		'UserCard' => 'Fitxa usuari',
		'ContactCard' => 'Fitxa contacte',
		'GroupCard' => 'Fitxa grup',
		'NoContactCard' => 'No hi ha fitxa entre els contactes',
		'Permission' => 'Dret',
		'Permissions' => 'Drets',
		'EditPassword' => 'Canviar contrasenya',
		'SendNewPassword' => 'Enviar una contrasenya nova',
		'ReinitPassword' => 'Generar una contrasenya nova',
		'PasswordChangedTo' => 'Contrasenya modificada en: %s',
		'SubjectNewPassword' => 'La seva contrasenya Speedealing',
		'AvailableRights' => 'Permisos disponibles',
		'OwnedRights' => 'Permisos tinguts',
		'GroupRights' => 'Permisos de grup',
		'UserRights' => 'Permisos usuari',
		'UserGUISetup' => 'Interface usuari',
		'DisableUser' => 'Desactivar',
		'DisableAUser' => 'Desactivar un usuari',
		'DeleteUser' => 'Eliminar',
		'DeleteAUser' => 'Eliminar un usuari',
		'DisableGroup' => 'Desactivar',
		'DisableAGroup' => 'Desactivar un grup',
		'EnableAUser' => 'Reactivar un usuari',
		'EnableAGroup' => 'Reactivar un grup',
		'DeleteGroup' => 'Eliminar',
		'DeleteAGroup' => 'Eliminar un grup',
		'ConfirmDisableUser' => 'Esteu segur de voler desactivar l\'usuari <b>%s</b> ?',
		'ConfirmDisableGroup' => 'Esteu segur de voler desactivar al grup <b>%s</b> ?',
		'ConfirmDeleteUser' => 'Esteu segur de voler suprimir l\'usuari <b>%s</b> ?',
		'ConfirmDeleteGroup' => 'Esteu segur de voler eliminar el grup <b>%s</b> ?',
		'ConfirmEnableUser' => 'Esteu segur de voler reactivar l\'usuari <b>%s</b> ?',
		'ConfirmEnableGroup' => '¿Esteu segur de voler reactiar el grup <b>%s</b> ?',
		'ConfirmReinitPassword' => 'Esteu segur de voler generar una nova contrasenya a l\'usuari <b>%s</b> ?',
		'ConfirmSendNewPassword' => 'Esteu segur de voler enviar una nova contrasenya a l\'usuari <b>%s</b> ?',
		'NewUser' => 'Nou usuari',
		'CreateUser' => 'Crear usuari',
		'SearchAGroup' => 'Cercar un grup',
		'SearchAUser' => 'Cercar un usuari',
		'LoginNotDefined' => 'L\'usuari no està definit',
		'NameNotDefined' => 'El nom no està definit',
		'ListOfUsers' => 'Llistat d\'usuaris',
		'Administrator' => 'Administrador',
		'SuperAdministrator' => 'Super Administrador',
		'SuperAdministratorDesc' => 'Administrador global',
		'AdministratorDesc' => 'Administrador de l\'entitat',
		'DefaultRights' => 'Permisos per defecte',
		'DefaultRightsDesc' => 'Definiu aquí els permisos <b>per defecte</b>, és a dir: els permisos que s\'assignaran automàticament a un nou usuari en el moment de la seva creació (Veure la fitxa usuari per canviar els permisos a un usuari existent).',
		'SpeedealingUsers' => 'Speedealing users',
		'LastName' => 'Cognoms',
		'FirstName' => 'Nom',
		'ListOfGroups' => 'Llistat de grups',
		'NewGroup' => 'Nou grup',
		'CreateGroup' => 'Crear el grup',
		'RemoveFromGroup' => 'Eliminar del grup',
		'PasswordChangedAndSentTo' => 'Contrasenya canviada i enviada a <b>%s</b>.',
		'PasswordChangeRequestSent' => 'Petició de canvi de contrasenya per a <b>%s</b> enviada a <b>%s</b>.',
		'MenuUsersAndGroups' => 'Usuaris i grups',
		'LastGroupsCreated' => 'Els %s darrers grups creats',
		'LastUsersCreated' => 'Els %s darrers usuaris creats',
		'ShowGroup' => 'Veure grup',
		'ShowUser' => 'Veure usuari',
		'NonAffectedUsers' => 'Usuaris no destinats al grup',
		'UserModified' => 'Usuari correctament modificat',
		'GroupModified' => 'Grup %s modificat',
		'PhotoFile' => 'Arxiu foto',
		'UserWithSpeedealingAccess' => 'User with Speedealing access',
		'ListOfUsersInGroup' => 'Llista d\'usuaris d\'aquest grup',
		'ListOfGroupsForUser' => 'Llistat de grups d\'aquest usuari',
		'UsersToAdd' => 'Usuari a afegir a aquest grup',
		'GroupsToAdd' => 'Grups a afegir a aquest usuari',
		'NoLogin' => 'Sense usuari',
		'LinkToCompanyContact' => 'Enllaç tercers / contactes',
		'LinkedToSpeedealingMember' => 'Link to member',
		'LinkedToSpeedealingUser' => 'Link to Speedealing user',
		'LinkedToSpeedealingThirdParty' => 'Link to Speedealing third party',
		'CreateSpeedealingLogin' => 'Create a user',
		'CreateSpeedealingThirdParty' => 'Create a third party',
		'LoginAccountDisable' => 'El compte està desactivat, indiqui un nou login per activar',
		'LoginAccountDisableInSpeedealing' => 'Account disabled in Speedealing.',
		'LoginAccountDisableInLdap' => 'El compte està desactivat en el domini',
		'UsePersonalValue' => 'Utilitzar valors personalitzats',
		'GuiLanguage' => 'Idioma del interface',
		'InternalUser' => 'Usuari intern',
		'MyInformations' => 'La meva informació',
		'ExportDataset_user_1' => 'Usuaris Speedealing i atributs',
		'DomainUser' => 'Usuari de domini',
		'Reactivate' => 'Reactivar',
		'CreateInternalUserDesc' => 'Aquesta pantalla permet crear un usuari intern de la seva empresa/institució. Per crear un usuari extern (client, proveïdor...) utilitzeu el botó \'crear a usuari Speedealing\' que es troba a la fitxa contacte del tercer en qüestió.',
		'InternalExternalDesc' => 'Un usuari <b>intern</b> és un usuari que pertany a la seva empresa/institució. <br>Un usuari<b>extern</b> és un usuari client, proveïdor o un altre.<br> En els 2 casos, els permisos d\'usuari defineixen els drets d\'accés, però l\'usuari extern pot a més tenir un gestor de menús diferent a l\'usuari intern (vegeu Inici->Configuració->Visualització)',
		'PermissionInheritedFromAGroup' => 'El permís es concedeix ja que ho hereta d\'un grup al qual pertany l\'usuari.',
		'Inherited' => 'Heretat',
		'UserWillBeInternalUser' => 'L\'usuari creat serà un usuari intern (ja que no està lligat a un tercer en particular)',
		'UserWillBeExternalUser' => 'L\'usuari creat serà un usuari extern (ja que està lligat a un tercer en particular)',
		'IdPhoneCaller' => 'ID trucant (telèfon)',
		'UserLogged' => 'Usuari %s conectat',
		'UserLogoff' => 'Usuari %s desconectat',
		'NewUserCreated' => 'usuari %s  creat',
		'NewUserPassword' => 'Contrasenya canviada per a %s',
		'EventUserModified' => 'Usuari %s modificat',
		'UserDisabled' => 'Usuari %s deshabilitat',
		'UserEnabled' => 'Usuari %s activat',
		'UserDeleted' => 'Usuari %s eliminat',
		'NewGroupCreated' => 'Grup %s creat',
		'GroupModified' => 'Grup %s modificat',
		'GroupDeleted' => 'Grup %s eliminat',
		'ConfirmCreateContact' => 'Esteu segur de voler crear un compte Speedealing per a aquest contacte?',
		'ConfirmCreateLogin' => 'Esteu segur que voleu crear un compte Speedealing per a aquest membre?',
		'ConfirmCreateThirdParty' => 'Esteu segur de voler crear un tercer per a aquest membre?',
		'LoginToCreate' => 'Login a crear',
		'NameToCreate' => 'nom del tercer a crear',
		'YourRole' => 'Els seus rols',
		'YourQuotaOfUsersIsReached' => 'Ha arribat a la seva quota d\'usuaris actius!',
		'NbOfUsers' => 'Nº d\'usuaris',
		'DontDowngradeSuperAdmin' => 'Només un superadmin pot degradar un superadmin',
		'NewDatabase' => 'Nouvelle base de données',
		'CreateDatabase' => 'Créer la base de données',
		'ListOfDatabases' => 'Liste des bases de données',
		'ListOfUsersInDatabase' => 'Liste des utilisateurs liés à la base de données',
		'ListOfRolesInDatabase' => 'Liste des groupes liés à la base de données',
		'DeleteADatabase' => 'Suppression d\'une database',
		'ConfirmDatabase' => 'Êtes-vous sûr de vouloir supprimer la base de données <b>%s</b> ?',
		'NonAffectedGroupsDatabase' => 'Groupes non affectés à la base de données',
		'NonAffectedUsersDatabase' => 'Utilisateurs non affectés à la base de données',
		'Collaborators' => 'Collaborateurs',
		'Profiles' => 'Profils collaborateurs'
);
?>