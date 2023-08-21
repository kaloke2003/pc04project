<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Product Management</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?=base_url('dashboard')?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Product List</li>
                        </ol>
                        <div class="card mb-4">
                   
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Product List
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>img</th>
                                            <th>title</th>
                                            <th>price</th>
                                            <th>Created date</th>
                                            <th></th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                            <th>ID</th>
                                            <th>img</th>
                                            <th>title</th>
                                            <th>price</th>
                                            <th>Created date</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        foreach($productList as $v) {
                                        ?>
                                        <tr>
                                            <td><?=$v['product_id']?></td>
                                            <td><img src="<?=$v['img']?>" style="width:100px;"/></td>
                                            <td><?=$v['title']?></td>
                                            <td><?=$v['price']?></td>
                                            <td><?=$v['created_date']?></td>  
                                            <td>
                                            <a href="<?=base_url('product_edit/'.$v['product_id'])?>">Edit</a>
                                            <a href="<?=base_url('product_del/'.$v['product_id'])?>">Delete</a>
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