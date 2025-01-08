<div class="content">
    <?php 
       require_once '../../controllers/UserController.php';
        require_once '../../models/User.php';
        

    $userController=new userController();
     
    $users= $userController->displayAll();
    
    ?>
    <table class="table">
        <thead class="text text-center">
            <tr>
                <th scope="col-2">Name</th>
                <th scope="col-2">Email</th>
                <th scope="col-2">Role</th>
                <th scope="col-2">Status</th>
                <th scope="col-2">Actions</th>
            </tr>
        </thead>
        <tbody class="text text-center text align-middle">
            <?php 
         foreach ($users as $user) {
         echo $userController->rendreRow($user);
         } 
    ?>
        </tbody>
    </table>
</div>