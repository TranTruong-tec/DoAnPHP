<?php
include_once './db_config.php';

 $sql = "SELECT * FROM donhang  ORDER BY IDDon DESC ";
 $query = mysqli_query($conn,$sql);

?>


		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Đơn hàng</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Quản lý đơn hàng</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<!-- <a href="index.php?page=themsp" class="btn btn-primary">Thêm sản phẩm</a> -->
								<table class="table table-bordered" style="margin-top:20px;">
												
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Mã Core</th>
											<th>Ngày đặt</th>										
											<th>Tình trạng</th>
											<th>Tùy chọn</th>
											
										</tr>
									</thead>
									<tbody>
									<?php
									$i1 = 1 ;
									while ($row=mysqli_fetch_array($query)) {
										# code...
									
									
									?>
										<tr>
											
											<td><?php  echo $i1;   ?></td>
											<td><?php  echo $row['IDCore'];   ?></td>											
											<td><?php  echo $row['NgayDat'];   ?></td>											
											<td><?php  if($row['TinhTrang'] == 1){
												echo 'Đã xử lý'; 
											}else {
												echo 'Chưa xử lý';
											} ; ?></td>
											<td>
											<a href="index.php?page=CTHD&IDDon=<?php echo $row['IDDon']?>" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Chi tiết</a>
											<a href="xoadon.php?IDDon=<?php echo $row['IDDon']?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
											</td>
											
										</tr>
									<?php
									$i1++;
									}
									
									?>																												
									</tbody>
								</table>
								<ul class = "pagination" style = "float:right;">
								<!-- <?php
									echo $listP;
							
								?> -->
							</ul>							
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	