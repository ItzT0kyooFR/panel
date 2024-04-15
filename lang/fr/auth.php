<?php

return [
    'sign_in' => 'Se connecter',
    'go_to_login' => 'Aller à la connexion',
    'failed' => "Aucun compte correspondant à ces identifiant n'a pu être trouvé.",

    'forgot_password' => [
        'label' => 'Mot de passe oublié ?',
        'label_help' => "Saisissez l'adresse mail de votre compte pour recevoir des instructions sur la réinitialisation de votre mot de passe.",
        'button' => 'Récupération de compte',
    ],

    'reset_password' => [
        'button' => 'Réinitialiser et ouvrir une session',
    ],

    'two_factor' => [
        'label' => 'Code A2F',
        'label_help' => 'Ce compte requiert une double vérification pour continuer. Veuillez saisir le code généré par votre appareil pour finaliser cette connexion.',
        'checkpoint_failed' => 'Le jeton A2F était invalide.',
    ],

    'throttle' => 'Trop de tentatives de connexion. Veuillez réessayer dans :seconds secondes.',
    'password_requirements' => 'Le mot de passe doit comporter au moins 8 caractères et doit être propre à ce site.',
    '2fa_must_be_enabled' => 'L’administrateur a requis que l’authentification à 2 facteurs soit activée pour votre compte afin d’utiliser le panel.',
];
