<?php
/**
 * @file     navigation.php
 * @brief    Contains all paths to pages
 * @author   Created by Christophe.KUNZLI
 * @version  18.11.2022
 */

//===========================================================================//
//controllers
//===========================================================================//

function home(): void
{
    require 'views/home.php';
}

function problems(): void
{
    require 'views/problems.php';
}

function lost(): void
{
    require 'views/gabarit.php';
}

function login(): void
{
    require 'views/login.php';
}

function profile(): void
{
    require 'views/profile.php';
}
//===========================================================================//