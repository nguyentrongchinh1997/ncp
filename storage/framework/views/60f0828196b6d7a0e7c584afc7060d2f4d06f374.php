<?php $__env->startSection('content'); ?>
<style type="text/css">
	li.tab{
		width: 33%;
	}
	.design{
		font-size: 20px;
	}
	.searchdomain{
		display: flex;
		align-items: center;
		justify-content: center;
	}
	form.form-inline{
		display: flex;
		align-items: center;
		justify-content: center;
	}
	
</style>

<div class="container w-100 h-100">
	<div class="row w-100 h-100 searchdomain">
		<form class="form-inline md-form mb-4 border border-secondary rounded" method="post" action="https://domain.z.com/vn/domains/result/">
			<h3 class="text-dark text-center w-100 font-weight-bold rounded">Tìm kiếm tên miền</h3>
	  		<input class="form-control mr-sm-2 mr mb-1" type="text" placeholder="Tìm kiếm" aria-label="Search">
	  		<button class="btn btn-success btn-rounded btn-sm my-0 mb-1" type="submit">Tìm kiếm</button>
		</form>
	</div>

	<div class="row w-100 h-100">
		<h3 class="text-dark text-center w-100 font-weight-bold rounded"><hr />Bảng giá tên miền</h3>
		<ul class="nav nav-pills mb-3 w-100" id="pills-tab" role="tablist" style="display: flex;align-items: center;justify-content: center;">
		  	<li class="nav-item tab">
		    	<a class="nav-link active design" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Tên miền phổ thông <i class="fa fa-caret-down" aria-hidden="true"></i></a>
		  	</li>
		  	<li class="nav-item tab">
		    	<a class="nav-link design" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Tên miền quốc gia <i class="fa fa-caret-down" aria-hidden="true"></i></a>
		  	</li>
		  	<li class="nav-item tab">
		    	<a class="nav-link design" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Tên miền mới <i class="fa fa-caret-down" aria-hidden="true"></i></a>
		  	</li>
		</ul>
		<div class="tab-content w-100" id="pills-tabContent" >
		  	<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
		  		<table class="table">
				  	<thead class="thead-dark">
				    	<tr>
					      	<th scope="col"></th>
					      	<th scope="col">1 năm</th>
					      	<th scope="col">3 năm</th>
					      	<th scope="col">5 năm</th>
				    	</tr>
				  	</thead>
				  	<tbody>
				    	<tr>
				      		<th scope="row"><a class="design">.shop</a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 60.000</a><br /><a class="del"><del>VND 890.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.840.000</a><br /><a class="del"><del>VND 2.670.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 3.620.000</a><br /><a class="del"><del>VND 4.450.000</del></a></td>
				    	</tr>
				    	<tr>
						    <th scope="row"><a class="design">.com</a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 239.000</a><br /><a class="del"><del>VND 299.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 837.000</a><br /><a class="del"><del>VND 897.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.435.000</a><br /><a class="del"><del>VND 1.495.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.com <a>(có dấu)</a></a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 269.000</a><br /><a class="del"><del>VND 299.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 867.000</a><br /><a class="del"><del>VND 897.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.465.000</a><br /><a class="del"><del>VND 1.495.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.net</a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 269.000</a><br /><a class="del"><del>VND 330.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 867.000</a><br /><a class="del"><del>VND 990.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.465.000</a><br /><a class="del"><del>VND 1.650.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.biz </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 59.000</a><br /><a class="del"><del>VND 380.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 819.000</a><br /><a class="del"><del>VND 1.140.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.579.000</a><br /><a class="del"><del>VND 1.900.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.net <a>(có dấu)</a></a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 269.000</a><br /><a class="del"><del>VND 330.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 867.000</a><br /><a class="del"><del>VND 990.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.465.000</a><br /><a class="del"><del>VND 1.650.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.info </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 69.000</a><br /><a class="del"><del>VND 370.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 809.000</a><br /><a class="del"><del>VND 1.110.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.549.000</a><br /><a class="del"><del>VND 1.850.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.org </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 299.000</a><br /><a class="del"><del>VND 320.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 939.000</a><br /><a class="del"><del>VND 960.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.579.000</a><br /><a class="del"><del>VND 1.600.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.mobi </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 106.000</a><br /><a class="del"><del>VND 450.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.016.000</a><br /><a class="del"><del>VND 1.365.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.926.000</a><br /><a class="del"><del>VND 2.275.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.asia </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 110.000</a><br /><a class="del"><del>VND 360.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 830.000</a><br /><a class="del"><del>VND 1.080.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.550.000</a><br /><a class="del"><del>VND 1.800.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.work </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 19.000</a><br /><a class="del"><del>VND 190.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 399.000</a><br /><a class="del"><del>VND 570.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 779.000</a><br /><a class="del"><del>VND 950.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.fun </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 29.000</a><br /><a class="del"><del>VND 500.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.029.000</a><br /><a class="del"><del>VND 1.500.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 2.029.000</a><br /><a class="del"><del>VND 2.500.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.email </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 79.000</a><br /><a class="del"><del>VND 540.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.159.000</a><br /><a class="del"><del>VND 1.620.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 2.239.000</a><br /><a class="del"><del>VND 2.700.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.press </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 115.000</a><br /><a class="del"><del>VND 1.920.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 3.955.000</a><br /><a class="del"><del>VND 5.570.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 7.795.000</a><br /><a class="del"><del>VND 8.950.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.pro </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 85.000</a><br /><a class="del"><del>VND 384.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 853.000</a><br /><a class="del"><del>VND 1.500.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.621.000</a><br /><a class="del"><del>VND 2.589.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.host </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 139.000</a><br /><a class="del"><del>VND 2.480.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 5.099.000</a><br /><a class="del"><del>VND 7.440.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 10.059.000</a><br /><a class="del"><del>VND 12.700.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.design </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 289.000</a><br /><a class="del"><del>VND 970.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 2.229.000</a><br /><a class="del"><del>VND 2.970.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 4.169.000</a><br /><a class="del"><del>VND 4.950.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.cloud </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 89.000</a><br /><a class="del"><del>VND 340.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 769.000</a><br /><a class="del"><del>VND 1.250.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.449.000</a><br /><a class="del"><del>VND 1.989.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.promo </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 106.000</a><br /><a class="del"><del>VND 480.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 906.000</a><br /><a class="del"><del>VND 1.440.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.759.000</a><br /><a class="del"><del>VND 2.000.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.red </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 106.000</a><br /><a class="del"><del>VND 400.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 906.000</a><br /><a class="del"><del>VND 1.270.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.769.000</a><br /><a class="del"><del>VND 2.950.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.pink </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 106.000</a><br /><a class="del"><del>VND 340.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 906.000</a><br /><a class="del"><del>VND 1.250.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.706.000</a><br /><a class="del"><del>VND 2.189.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.blue </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 105.000</a><br /><a class="del"><del>VND 400.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 905.000</a><br /><a class="del"><del>VND 1.240.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.705.000</a><br /><a class="del"><del>VND 2.000.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.organic </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 280.000</a><br /><a class="del"><del>VND 1.500.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 3.280.000</a><br /><a class="del"><del>VND 4.270.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 6.280.000</a><br /><a class="del"><del>VND 7.950.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.black </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 299.000</a><br /><a class="del"><del>VND 1.340.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 2.399.000</a><br /><a class="del"><del>VND 3.250.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 4.499.000</a><br /><a class="del"><del>VND 5.189.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.poker </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 289.000</a><br /><a class="del"><del>VND 1.400.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 2.349.000</a><br /><a class="del"><del>VND 2.940.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 4.409.000</a><br /><a class="del"><del>VND 5.000.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.life </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 79.000</a><br /><a class="del"><del>VND 500.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.619.000</a><br /><a class="del"><del>VND 2.270.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 3.159.000</a><br /><a class="del"><del>VND 4.950.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.ltd </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 79.000</a><br /><a class="del"><del>VND 1.340.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.619.000</a><br /><a class="del"><del>VND 2.250.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 3.159.000</a><br /><a class="del"><del>VND 4.189.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.group </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 230.000</a><br /><a class="del"><del>VND 900.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.130.000</a><br /><a class="del"><del>VND 2.240.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 2.030.000</a><br /><a class="del"><del>VND 3.000.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.digital </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 560.000</a><br /><a class="del"><del>VND 850.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 2.260.000</a><br /><a class="del"><del>VND 3.270.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 3.960.000</a><br /><a class="del"><del>VND 4.950.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.blog </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 215.000</a><br /><a class="del"><del>VND 640.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.515.000</a><br /><a class="del"><del>VND 2.250.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 2.815.000</a><br /><a class="del"><del>VND 3.189.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.bio </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 270.000</a><br /><a class="del"><del>VND 1.900.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 2.970.000</a><br /><a class="del"><del>VND 3.240.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 5.670.000</a><br /><a class="del"><del>VND 7.520.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.green </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 270.000</a><br /><a class="del"><del>VND 890.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 3.310.000</a><br /><a class="del"><del>VND 3.970.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 6.350.000</a><br /><a class="del"><del>VND 7.950.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.kim </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 105.000</a><br /><a class="del"><del>VND 640.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 945.000</a><br /><a class="del"><del>VND 1.250.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.785.000</a><br /><a class="del"><del>VND 2.189.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.ski </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 279.000</a><br /><a class="del"><del>VND 1.900.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 2.079.000</a><br /><a class="del"><del>VND 3.240.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 3.879.000</a><br /><a class="del"><del>VND 4.520.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.art </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 250.000</a><br /><a class="del"><del>VND 380.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 950.000</a><br /><a class="del"><del>VND 970.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.650.000</a><br /><a class="del"><del>VND 2.950.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.center </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 259.000</a><br /><a class="del"><del>VND 999.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.179.000</a><br /><a class="del"><del>VND 1.380.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 2.099.000</a><br /><a class="del"><del>VND 2.300.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.company </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 155.000</a><br /><a class="del"><del>VND 200.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 555.000</a><br /><a class="del"><del>VND 640.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 955.000</a><br /><a class="del"><del>VND 1.200.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.games </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 345.000</a><br /><a class="del"><del>VND 420.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.204.000</a><br /><a class="del"><del>VND 1.970.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 2.064.000</a><br /><a class="del"><del>VND 3.950.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.marketing </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 560.000</a><br /><a class="del"><del>VND 843.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.843.000</a><br /><a class="del"><del>VND 2.380.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 3.127.000</a><br /><a class="del"><del>VND 3.300.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.network </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 370.000</a><br /><a class="del"><del>VND 1.282.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.282.740</a><br /><a class="del"><del>VND 1.369.110</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 2.195.480</a><br /><a class="del"><del>VND 3.200.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.news </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 370.000</a><br /><a class="del"><del>VND 420.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.440.000</a><br /><a class="del"><del>VND 1.970.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 2.460.000</a><br /><a class="del"><del>VND 3.950.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.partners </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 905.000</a><br /><a class="del"><del>VND 1.843.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 3.935.000</a><br /><a class="del"><del>VND 4.380.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 4.965.000</a><br /><a class="del"><del>VND 5.300.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.services </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 545.000</a><br /><a class="del"><del>VND 1.282.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.828.740</a><br /><a class="del"><del>VND 2.369.110</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 3.112.480</a><br /><a class="del"><del>VND 4.200.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.social </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 560.000</a><br /><a class="del"><del>VND 620.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.843.000</a><br /><a class="del"><del>VND 2.970.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 3.127.000</a><br /><a class="del"><del>VND 4.950.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.style </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 560.000</a><br /><a class="del"><del>VND 843.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.843.000</a><br /><a class="del"><del>VND 2.380.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 3.127.000</a><br /><a class="del"><del>VND 4.300.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.support </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 380.000</a><br /><a class="del"><del>VND 582.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.292.740</a><br /><a class="del"><del>VND 2.369.110</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 2.205.480</a><br /><a class="del"><del>VND 3.200.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.ventures </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 905.000</a><br /><a class="del"><del>VND 1.020.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 2.935.000</a><br /><a class="del"><del>VND 3.970.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 4.965.000</a><br /><a class="del"><del>VND 5.950.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.world </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 69.000</a><br /><a class="del"><del>VND 650.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.369.000</a><br /><a class="del"><del>VND 2.000.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 2.669.000</a><br /><a class="del"><del>VND 3.300.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.men </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 69.000</a><br /><a class="del"><del>VND 650.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.369.000</a><br /><a class="del"><del>VND 1.500.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 2.669.480</a><br /><a class="del"><del>VND 3.200.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.love </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 139.000</a><br /><a class="del"><del>VND 350.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.422.000</a><br /><a class="del"><del>VND 1.500.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 2.706.200</a><br /><a class="del"><del>VND 3.260.000</del></a></td>
				    	</tr>
				  	</tbody>
				</table>
		  	</div>
		  	<div class="tab-pane fade w-100" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
		  		<table class="table">
				  	<thead class="thead-dark">
				    	<tr>
					      	<th scope="col"></th>
					      	<th scope="col">1 năm</th>
					      	<th scope="col">2 năm</th>
					      	<th scope="col">3 năm</th>
				    	</tr>
				  	</thead>
				  	<tbody>
				    	<tr>
					      	<th scope="row"><a class="design">.pw </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 29.000</a><br /><a class="del"><del>VND 485.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 999.000</a><br /><a class="del"><del>VND 1.455.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.969.000</a><br /><a class="del"><del>VND 2.255.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.co </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 200.000</a><br /><a class="del"><del>VND 620.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.440.000</a><br /><a class="del"><del>VND 1.860.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 2.680.480</a><br /><a class="del"><del>VND 3.100.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.me </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 95.000</a><br /><a class="del"><del>VND 680.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.385.000</a><br /><a class="del"><del>VND 1.935.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 2.675.200</a><br /><a class="del"><del>VND 3.225.000</del></a></td>
				    	</tr>
				  	</tbody>
				</table>
		  	</div>
		  	<div class="tab-pane fade w-100" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
		  		<table class="table">
				  	<thead class="thead-dark">
				    	<tr>
					      	<th scope="col"></th>
					      	<th scope="col">1 năm</th>
					      	<th scope="col">2 năm</th>
					      	<th scope="col">3 năm</th>
				    	</tr>
				  	</thead>
				  	<tbody>
				    	<tr>
					      	<th scope="row"><a class="design">.xyz </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 17.000</a><br /><a class="del"><del>VND 285.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 587.000</a><br /><a class="del"><del>VND 1.200.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.157.000</a><br /><a class="del"><del>VND 2.255.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.click </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 90.000</a><br /><a class="del"><del>VND 620.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 580.000</a><br /><a class="del"><del>VND 860.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.070.480</a><br /><a class="del"><del>VND 1.100.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.club </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 29.000</a><br /><a class="del"><del>VND 500.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 749.000</a><br /><a class="del"><del>VND 1.101.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.469.200</a><br /><a class="del"><del>VND 1.525.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.link </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 189.000</a><br /><a class="del"><del>VND 270.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 729.000</a><br /><a class="del"><del>VND 1.000.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.269.000</a><br /><a class="del"><del>VND 1.399.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.top </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 105.000</a><br /><a class="del"><del>VND 320.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 661.000</a><br /><a class="del"><del>VND 860.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.217.480</a><br /><a class="del"><del>VND 1.300.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.site </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 23.000</a><br /><a class="del"><del>VND 210.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.563.000</a><br /><a class="del"><del>VND 1.900.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 3.103.200</a><br /><a class="del"><del>VND 3.525.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.tech </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 89.000</a><br /><a class="del"><del>VND 270.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 2.789.000</a><br /><a class="del"><del>VND 3.350.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 5.489.000</a><br /><a class="del"><del>VND 6.399.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.space </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 23.000</a><br /><a class="del"><del>VND 120.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.003.000</a><br /><a class="del"><del>VND 1.860.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.983.480</a><br /><a class="del"><del>VND 2.300.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.online </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 23.000</a><br /><a class="del"><del>VND 210.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.603.000</a><br /><a class="del"><del>VND 2.900.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 3.183.200</a><br /><a class="del"><del>VND 4.525.000</del></a></td>
				    	</tr>
				    	<tr>
					      	<th scope="row"><a class="design">.website </a></th>
				      		<td><a class="design text-danger font-weight-bold">VND 29.000</a><br /><a class="del"><del>VND 210.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 1.009.000</a><br /><a class="del"><del>VND 1.470.000</del></a></td>
				      		<td><a class="text-danger font-weight-bold">VND 3.989.200</a><br /><a class="del"><del>VND 2.450.000</del></a></td>
				    	</tr>
				  	</tbody>
				</table>
		  	</div>
		</div>

	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ncp\resources\views//sanpham/sanphamdomain.blade.php ENDPATH**/ ?>