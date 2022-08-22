<script src="user.js"></script>
<div class="container">
    <div class="row flex-lg-nowrap">
        <div class="col">
            <div class="row flex-lg-nowrap">
                <div class="col mb-3">
                    <div class="e-panel card">
                        <div class="card-body">
                            <div class="card-title">
                                <h6 class="mr-2"><span>Users</span></h6>
                            </div>
                            <div class="e-table">
                                <div class="table-responsive table-lg mt-3">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th class="align-top">
                                                <div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0">
                                                    <input type="checkbox" class="custom-control-input form-check-input" id="checkall">
                                                    <label class="custom-control-label" for="all-items"></label>
                                                </div>
                                            </th>
                                            <th class="max-width">Name</th>
                                            <th class="sortable">Role</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $mysql = new mysqli("localhost","root","","php-mysql");
                                        $mysql->query("SET NAMES 'utf8'");

                                        $result = $mysql->query("SELECT * FROM users");
                                        if($result->num_rows > 0) {
                                            while($row = $result->fetch_assoc())  {
                                                ?>
                                                <tr>
                                                    <td class="align-middle" >
                                                        <div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
                                                            <input type="checkbox" class="custom-control-input form-check-input cb-element" id="<?php echo $row['id']; ?>">
                                                            <label class="custom-control-label"></label>
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap align-middle"><?php echo $row['firstname'].' '.$row['lastname']; ?></td>
                                                    <td class="text-nowrap align-middle"><span><?php echo $row['role']; ?></span></td>
                                                   <td class="align-middle">
                                                   <?php if($row['activation']=="on"){ 
                                                    echo '<i class="fa fa-circle active-circle"></i>';}
                                                    else {
                                                        echo '<i class="fa fa-circle" style="color: grey"></i>';}
                                                     ?></td>
                                                    <td class="align-middle">
                                                            <button class="btn btn-sm btn-outline-warning edit_one" type="button" data-toggle="modal" data-target="#user-form-modal" value="<?php echo $row['id']; ?>"><i class="fa fa-edit"></i></button>
                                                            <button class="btn btn-sm btn-outline-danger delete_one" type="button" value="<?php echo $row['id']; ?>"><i class="fa fa-trash"></i></button>
                                                            <div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="deleteModalLabel">Please confirm</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                    <div class="modal-body">
                                                                        <b class="modal-title" id="deleteLabel">Are you realy want to delete <?php echo $row['firstname'].' '.$row['lastname']; ?>?</b>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                                        <input type="submit" class="btn btn-primary deleteButton" data-id="<?php echo $row['id']; ?>" value="Yes">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="editLabel">Modal title</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                <div class="modal-body">
                                                                    <form action="#">
                                                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                                        <input class="form-control" placeholder="First name" id="firstname_<?php echo $row['id']; ?>" value="<?php echo $row['firstname']; ?>">
                                                                        <input class="form-control" placeholder="Last name" id="lastname_<?php echo $row['id']; ?>" value="<?php echo $row['lastname']; ?>">
                                                                        <div class="switch">
                                                                            <input class="check-box" type="checkbox" id="activation_<?php echo $row['id']; ?>" <?php if($row['activation'] == 'on'){ echo " checked";} ?>>
                                                                            <label for="activation">Status</label>
                                                                        </div>
                                                                        <select class="form-control" id="role_<?php echo $row['id']; ?>">
                                                                            <option hidden>Role</option>
                                                                            <option <?php if($row['role'] == 'Admin'){ echo " selected";} ?>>Admin</option>
                                                                            <option <?php if($row['role'] == 'User'){ echo " selected";} ?>>User</option>
                                                                        </select>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button class="btn btn-primary saveEdit" data-id="<?php echo $row['id']; ?>">Save changes</button>
                                                                </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        $mysql->close();
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>