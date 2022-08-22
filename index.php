<!doctype html>
<html>
<head>
    <meta charset= "UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.o">
    <link rel ="stylesheet" href="main.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<table>
    <tr>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">Add</button>
        </td>
        <td>
            <select class="form-control" id="action_top" style="width: 150px;">  
                <option hidden>Please select</option>
                <option value="set_active">Set active</option>
                <option value="set_not_active">Set not active</option>
                <option value="delete">Delete</option>
            </select>
        </td>
        <td>
            <button type="button" class="btn btn-primary" id="ok_top">OK</button>
        </td>
    </tr>
</table>
<div id="users"></div>
<table>
    <tr>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">Add</button>
        </td>
        <td>
            <select class="form-control" id="action_down" style="width: 150px;">  
                <option hidden>Please select</option>
                <option value="set_active">Set active</option>
                <option value="set_not_active">Set not active</option>
                <option value="delete">Delete</option>
            </select>
        </td>
        <td>
            <button type="button" class="btn btn-primary" id="ok_down">OK</button>
        </td>
    </tr>
</table>

<div class="modal fade" id="add" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <input class="form-control" placeholder="First name" id="firstname">
                    <input class="form-control" placeholder="Last name" id="lastname">
                    <div class="switch">
                    <input class="check-box" type="checkbox" id="activation">
                    <label for="activation">Status</label>
                    </div>
                    <select class="form-control" id="role">
                        <option hidden>Role</option>
                        <option>Admin</option>
                        <option>User</option>
                    </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary save">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="errorEmptyEnrties" tabindex="-1" aria-labelledby="errorEmptyEnrtiesLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorEmptyEnrtiesLabel">Error</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <b class="modal-title" id="errorEmptyEnrtiesLabel">Please select more entries!</b>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="errorEmptyAction" tabindex="-1" aria-labelledby="errorEmptyActionLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorEmptyActionLabel">Error</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <b class="modal-title" id="errorEmptyActionLabel">Please select action!</b>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="delete_users" tabindex="-1" aria-labelledby="deleteUsersLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteUsersModalLabel">Please confirm</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <b class="modal-title" id="deleteLabel">Are you realy want to delete this users?</b>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <input type="submit" class="btn btn-primary" id="deleteUsersButton" value="Yes">
            </div>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>