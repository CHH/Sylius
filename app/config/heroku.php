<?php

if (isset($_ENV['DATABASE_URL'])) {
    $dbUrl = $_ENV['DATABASE_URL'];
    $parts = parse_url($dbUrl);

    $container->setParameter('sylius.database.host', $parts['host']);
    $container->setParameter('sylius.database.name', trim($parts['path'], '/'));
    $container->setParameter('sylius.database.user', $parts['user']);
    $container->setParameter('sylius.database.password', $parts['pass']);
    $container->setParameter('sylius.database.port', $parts['port']);
}

if (isset($_ENV['SECRET'])) {
    $container->setParameter('sylius.secret', $_ENV['SECRET']);
}

if (isset($_ENV['MANDRILL_USERNAME'])) {
    $container->setParameter('sylius.mailer.user', $_ENV['MANDRILL_USERNAME']);
    $container->setParameter('sylius.mailer.password', $_ENV['MANDRILL_APIKEY']);
}
