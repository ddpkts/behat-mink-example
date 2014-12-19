# Behat Mink BDD Example [![Build Status](https://travis-ci.org/ddpkts/behat-mink-example.svg?branch=master)](https://travis-ci.org/ddpkts/behat-mink-example)

Simple checkout feature which buys `Transport container barrel` from OXID eShop demoshop.

## Setup

    composer install

## Run
## Selenium webdriver

    java -jar selenium-server-standalone-2.44.0.jar
    bin/behat
    
## phantomjs headless webdriver

    phantomjs --webdriver=4444
    bin/behat
    