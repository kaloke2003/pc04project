<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">User Management</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?=base_url('dashboard')?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">User List</li>
                        </ol>
                        <div class="card mb-4">
                   
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                User List
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Level</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Created date</th>
                                            <th></th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                            <th>ID</th>
                                            <th>Level</th>
                                            <th>Name</th>
                                            <th>Password</th>
                                            <th>Created date</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        foreach($userList as $v) {
                                        ?>
                                        <tr>
                                            <td><?=$v['user_id']?></td>
                                            <td><?=$v['level']?></td>
                                            <td><?=$v['name']?></td>
                                            <td><?=$v['email']?></td>
                                            <td><?=$v['password']?></td>
                                            <td><?=$v['created_date']?></td>  
                                            <td>
                                            <a href="<?=base_url('user_edit/'.$v['user_id'])?>">Edit</a>
                                            <a href="<?=base_url('user_del/'.$v['user_id'])?>">Delete</a>
                                            </td>                                          
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
