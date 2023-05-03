é<?php

require_once '../../config/appConfig.php';


session_destroy();

header('location: ../view/connexion.php');