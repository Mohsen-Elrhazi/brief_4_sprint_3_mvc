<div class="content">
    <?php 
       require_once '../../controllers/UserController.php';
        require_once '../../models/User.php';
        

    $userController=new userController();
    
    if(isset($_GET['id']) &&isset($_GET['status'])){
        $id=$_GET['id'];
        $status=$_GET['status'];
        $userController->changerStatus($id);

        if($status==='active'){
        echo "<div class=' text text-center alert alert-danger '>le client a ete desactiver</div>";
        }else{
        echo "<div class=' text text-center alert alert-success '>le client a ete activer</div>";
            
        }
    }
     
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

    $users= $userController->displayAll();

    ?>
        </tbody>
    </table>

    <script src='../../../assets/js/client.js'></script>
</div>