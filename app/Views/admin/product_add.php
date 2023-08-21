<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Product Management</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?=base_url('dashboard')?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Product <?=$mode?></li>
                        </ol>
                        <div class="card mb-4">
                   
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Product <?=$mode?>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="<?=base_url('product_submit')?>">
                                    <input type="hidden" name="mode" value="<?=$mode?>" />
                                    <input type="hidden" name="id" value="<?=$id?>" />

                                    <div class="form-group">
                                        <label for="title">Product Title</label>
                                        <input id="title" name="title" class="form-control" value="<?=isset($productData['title'])?$productData['title']:''?>"/>
                                    </div>

                                    <div class="form-group">
                                        <label for="img">Image</label>
                                        <input id="img" name="img" class="form-control" value="<?=isset($productData['img'])?$productData['img']:''?>"/>
                                    </div>

                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input id="price" name="price" class="form-control" value="<?=isset($productData['price'])?$productData['price']:''?>"/>
                                    </div>

                                    <input class="btn btn-primary" type="submit" value="Submit" />

                                </form>
                            </div>
                        </div>
                    </div>
                </main>