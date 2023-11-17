<?php
    require "../app/controllers/UserController.php";
    use App\Controllers\UserController;
    UserController::index();
    
    /*
    require "../core/App.php";
    $app = new App();//Crear el enrutador

    require "core/Model.php";
    Core\model::db();

    require "../app/models/User.php";
      use App\Models\User;
      $user = new User();
      $user->insert();
   */