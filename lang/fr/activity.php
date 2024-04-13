<?php

/**
 * Contains all of the translation strings for different activity log
 * events. These should be keyed by the value in front of the colon (:)
 * in the event name. If there is no colon present, they should live at
 * the top level.
 */
return [
    'auth' => [
        'fail' => 'Échec de la connexion',
        'success' => 'Connexion',
        'password-reset' => 'Réinitialisation du mot de passe',
        'reset-password' => 'Réinitialisation du mot de passe demandée',
        'checkpoint' => 'Authentification à deux facteurs demandée',
        'recovery-token' => "Utilisation d'un jeton de récupération à deux facteurs",
        'token' => 'Défi A2F résolu',
        'ip-blocked' => "Demande bloquée provenant d'une adresse IP non répertoriée pour :identifier",
        'sftp' => [
            'fail' => 'Échec de la connexion SFTP',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => "Changement d'email de :old à :new",
            'password-changed' => 'Mot de passe modifié',
        ],
        'api-key' => [
            'create' => "Création d'une nouvelle clé API :identifier",
            'delete' => 'Clé API supprimée :identifier',
        ],
        'ssh-key' => [
            'create' => 'Ajout de la clé SSH :fingerprint au compte',
            'delete' => 'Suppression de la clé SSH :fingerprint du compte',
        ],
        'two-factor' => [
            'create' => "Activation de l'authentification à deux facteurs",
            'delete' => "Désactivation de l'authentification à deux facteurs",
        ],
    ],
    'server' => [
        'reinstall' => 'Réinstallation du serveur',
        'console' => [
            'command' => 'Exécution de ":command" sur le serveur',
        ],
        'power' => [
            'start' => 'Démarrage du serveur',
            'stop' => 'Arrêt du serveur',
            'restart' => 'RRedémarrage du serveur',
            'kill' => 'Le processus du serveur a été interrompu',
        ],
        'backup' => [
            'download' => 'Téléchargement de la sauvegarde :name',
            'delete' => 'Suppression de la sauvegarde :name',
            'restore' => 'Restauration de la sauvegarde :name (fichiers supprimés : :truncate)',
            'restore-complete' => 'Restauration de la sauvegarde :name terminée',
            'restore-failed' => 'Échec de la restauration de la sauvegarde :name',
            'start' => "Démarrage d'une nouvelle sauvegarde :name",
            'complete' => 'Marqué la sauvegarde :name comme terminée',
            'fail' => 'Marqué la sauvegarde :name comme échouée',
            'lock' => 'Verrouillage de la sauvegarde :name',
            'unlock' => 'Déverrouillage de la sauvegarde :name',
        ],
        'database' => [
            'create' => "Création d'une nouvelle base de données :name",
            'rotate-password' => 'Mot de passe modifié pour la base de données :name',
            'delete' => 'Base de données supprimée :name',
        ],
        'file' => [
            'compress_one' => ':directory:file Compressé',
            'compress_other' => ':count Fichiers compressés dans :directory',
            'read' => 'Visualisation du contenu de :file',
            'copy' => "Création d'une copie de :file",
            'create-directory' => 'Répertoire créé :directory:name',
            'decompress' => 'Décompression de :files dans :directory',
            'delete_one' => ':directory:files.0 Supprimé',
            'delete_other' => ':count Fichiers supprimés dans :directory',
            'download' => ':file Téléchargé',
            'pull' => "Téléchargement d'un fichier distant de :url vers :directory",
            'rename_one' => ':directory:files.0.from renommé en :directory:files.0.to',
            'rename_other' => ':count fichiers renommer dans :directory',
            'write' => "Écriture d'un nouveau contenu dans :file",
            'upload' => "Début d'un téléchargement de fichier",
            'uploaded' => ':directory:file Chargé',
        ],
        'sftp' => [
            'denied' => 'Accès SFTP bloqué en raison des autorisations',
            'create_one' => ':files.0 Créer',
            'create_other' => ':count Nouveaux fichiers créer',
            'write_one' => 'Modification du contenu de :files.0',
            'write_other' => 'Modification du cotenu de :count fichiers',
            'delete_one' => ':files.0 supprimé',
            'delete_other' => 'Supression de :count fichiers',
            'create-directory_one' => 'Dossier :files.0 créer',
            'create-directory_other' => 'Création de :count dossiers',
            'rename_one' => ':files.0.from Renommé en :files.0.to',
            'rename_other' => ':count Fichiers renommé ou déplacé',
        ],
        'allocation' => [
            'create' => 'Ajout de :allocation au serveur',
            'notes' => 'Mise à jour de la note de :allocation de ":old" à ":new"',
            'primary' => ':allocation défini comme allocation principale du serveur',
            'delete' => "Supression de l'allocation :allocation",
        ],
        'schedule' => [
            'create' => 'Création de la tâche planifié :name',
            'update' => 'Mise à jour de la tâche planifié :name',
            'execute' => 'Execution manuelle de la tâche planifié :name',
            'delete' => 'Supression de la tâche planifié :name',
        ],
        'task' => [
            'create' => "Ajouts de l'action ':action' à la tâche planifié :name",
            'update' => "Mise à jour de l'action ':action' de la tâche planifié :name",
            'delete' => 'Supression de la tâche planifié :name',
        ],
        'settings' => [
            'rename' => 'Serveur renommé de :old à :new',
            'description' => 'Description du serveur changé de :old à :new',
        ],
        'startup' => [
            'edit' => 'Changement de la variable :variable de ":old" à ":new"',
            'image' => "Mise à jour de l'image Docker pour le serveur de :old à :new",
        ],
        'subuser' => [
            'create' => 'Ajout de :email comme sous-utilisateur',
            'update' => 'Mise à jour des permissions du sous-utilisateur pour :email',
            'delete' => 'Suppression de :email comme sous utilisateur',
        ],
    ],
];
