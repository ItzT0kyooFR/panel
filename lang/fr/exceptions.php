<?php

return [
    'daemon_connection_failed' => 'Il y a eu une exception lors de la tentative de communication avec le daemon, ce qui a donné lieu à un erreur HTTP/:code. Cette erreur a été enregistrer.',
    'node' => [
        'servers_attached' => 'Une node ne doit avoir aucun serveur lié à celui-ci pour être supprimé.',
        'daemon_off_config_updated' => 'La configuration du daemon a été mise à jour, cependant une erreur est survenue lors de la tentative de mise à jour automatique du fichier de configuration sur le daemon. Vous devrez mettre à jour manuellement le fichier de configuration (config.yml) pour que le daemon applique ces changements.',
    ],
    'allocations' => [
        'server_using' => "Un serveur est actuellement attribué à cette allocation. Une allocation ne peut être supprimée que si aucun serveur n'y est actuellement attribué.",
        'too_many_ports' => "Il n'est pas possible d'ajouter plus de 1000 ports dans une seule plage à la fois.",
        'invalid_mapping' => 'Le mapping fournis pour :port était invalide et n’a pu être traité.',
        'cidr_out_of_range' => 'La notation CIDR autorise uniquement les masques entre /25 et /32.',
        'port_out_of_range' => 'Les ports d’une allocation doivent être supérieurs à 1024 et inférieurs ou égaux à 65535.',
    ],
    'egg' => [
        'delete_has_servers' => 'Un Egg avec des serveurs rattachés ne peut pas être supprimé du Panel.',
        'invalid_copy_id' => "L'Egg sélectionné pour copier un script n'existe pas ou est lui-même en train de copier un script.",
        'has_children' => "Cet Egg est parent d'un ou plusieurs autres Eggs. Veuillez supprimer ces œufs avant de supprimer celui-ci.",
    ],
    'variables' => [
        'env_not_unique' => "La variable d'envionnement :name doit être unique à cet Egg.",
        'reserved_name' => 'La variable d’environnement :name est protégée et ne peut pas être affectée à une variable.',
        'bad_validation_rule' => 'La règle de validation ":rule" n’est pas une règle valide pour cette application.',
    ],
    'importer' => [
        'json_error' => 'Il y avait une erreur lors de la tentative d’analyse du fichier JSON : :error.',
        'file_error' => 'Le fichier JSON fourni n’était pas valide.',
        'invalid_json_provided' => 'Le fichier JSON fourni n’est pas dans un format qui peut être reconnu.',
    ],
    'subusers' => [
        'editing_self' => 'La modification de votre propre compte de sous-utilisateur n’est pas autorisée.',
        'user_is_owner' => 'Vous ne pouvez pas ajouter le propriétaire du serveur en tant que sous-utilisateur pour ce serveur.',
        'subuser_exists' => 'Un utilisateur avec cette adresse e-mail est déjà assigné comme sous-utilisateur pour ce serveur.',
    ],
    'databases' => [
        'delete_has_databases' => 'Impossible de supprimer un serveur hôte de base de données auquel des bases de données actives sont liées.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'L’intervalle maximal pour une tâche enchaînée est de 15 minutes.',
    ],
    'locations' => [
        'has_nodes' => 'Impossible de supprimer un emplacement auquel sont attachés des nodes actifs.',
    ],
    'users' => [
        'node_revocation_failed' => 'Échec de révocation des clés sur <a href=":link">Node #:node<',
    ],
    'deployment' => [
        'no_viable_nodes' => 'Aucun node satisfaisant aux exigences spécifiées pour le déploiement automatique n’a pu être trouvé.',
        'no_viable_allocations' => 'Aucune allocation répondant aux exigences de déploiement automatique n’a été trouvée.',
    ],
    'api' => [
        'resource_not_found' => 'La ressource demandée n’existe pas sur ce serveur.',
    ],
];
