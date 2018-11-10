   <!-- Page Content -->
    <div class="container">

    	<!-- slider -->
    	<div class="row carousel-holder">
    		<div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="panel panel-default">
				  	<div class="panel-heading">Đăng nhập</div>
				  	<div class="panel-body">
				    	<form method="POST" action="index.php?action=login">
							<div>
				    			<label>Username</label>
							  	<input type="text" class="form-control" placeholder="Username" name="username" 
							  	>
							</div>
							<div>
				    			<label>Mật khẩu</label>
							  	<input type="password" class="form-control" placeholder="Password" name="password">
							</div>
                            <div>
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                            </div>
							<br>
							<button name="submit" class="btn btn-success">Đăng nhập
							</button>
				    	</form>
				  	</div>
				</div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <!-- end slide -->
    </div>
    <!-- end Page Content -->
