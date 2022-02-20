<?php 
helper('form');

// für quoted text esc() verwenden
$string = 'Here is a string containing "quoted" text.'; ?>
<!-- <input type="text" name="myfield" value="<?= esc($string) ?>" /> -->

 <div class="container">

 <div class="my-3">
     <?= form_open('/login', ['class' => 'form-inline']) ?>
         <?= form_input('email','1@1.de',
                        ['email' => 'form-control my-1 mr-3', 'placeholder' => "email"]) ?>

          <?= form_password('password','123456',
                        ['password' => 'form-control my-1 mr-3',  'style' => 'width:200px']) ?>

         <?= form_submit('login','Login',
                         ['class' => 'btn btn-outline-primary my-1']) ?>
     <?= form_close() ?>
 </div>

 <div class="container mt-4">
    <div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/user-form') ?>" class="btn btn-success mb-2">Add User</a>
	</div>
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>
 <h3><?= $title ?></h3>
 <div class="mt-3">
     <table class="table table-bordered" id="users-list">
       <thead>
          <tr>
             <th>User Id</th>
             <th>Name</th>
             <th>Email</th>
             <th>Action</th>
          </tr>
       </thead>
       <tbody>
          <?php if($users): ?>
          <?php foreach($users as $user): ?>
          <tr>
             <td><?php echo $user['id']; ?></td>
             <td><?php echo $user['name']; ?></td>
             <td><?php echo $user['email']; ?></td>
             <td>
              <a href="<?php echo base_url('edit-view/'.$user['id']);?>" class="btn btn-primary btn-sm">Edit</a>
              <a href="<?php echo base_url('delete/'.$user['id']);?>" class="btn btn-danger btn-sm">Delete</a>
              </td>
          </tr>
         <?php endforeach; ?>
         <?php else: ?>
            <h3>Keine User</h3> <p>Unable to find any user for you.</p>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>
</div>











