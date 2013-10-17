<?php

if (isset($_ENV['DATABASE_URL'])) {
    $dbUrl = $_ENV['DATABASE_URL'];
    $parts = parse_url($dbUrl);

    $container->setParameter('database_host', $parts['host']);
    $container->setParameter('database_name', trim($parts['path'], '/'));
    $container->setParameter('database_user', $parts['user']);
    $container->setParameter('database_password', $parts['pass']);
}

if (isset($_ENV['SECRET'])) {
    $container->setParameter('secret', $_ENV['SECRET']);
}

if (isset($_ENV['MANDRILL_USERNAME'])) {
    $container->setParameter('mailer_user', $_ENV['MANDRILL_USERNAME']);
    $container->setParameter('mailer_password', $_ENV['MANDRILL_APIKEY']);
}
