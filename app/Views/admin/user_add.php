                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">User Management</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?=base_url('dashboard')?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">User <?=$mode?></li>
                        </ol>
                        <div class="card mb-4">
                   
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                User <?=$mode?>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="<?=base_url('user_submit')?>">
                                    <input type="hidden" name="mode" value="<?=$mode?>" />
                                    <input type="hidden" name="id" value="<?=$id?>" />
                                    
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input id="name" name="name" class="form-control" value="<?=isset($userData['name'])?$userData['name']:''?>"/>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" name="email" class="form-control" value="<?=isset($userData['email'])?$userData['email']:''?>"/>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input id="password" name="password" class="form-control" value="<?=isset($userData['password'])?$userData['password']:''?>"/>
                                    </div>

                                    <input class="btn btn-primary" type="submit" value="Submit" />

                                </form>
                            </div>
                        </div>
                    </div>
                </main>