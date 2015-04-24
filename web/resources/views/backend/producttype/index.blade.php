@extends('backend.layouts') @section('contents')
<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<button class="btn btn-lg btn-primary" type="button">Tạo mới</button>
				</h3>
			</div>
			<div class="panel-body">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Tên danh mục</th>
							<th>Trạng thái</th>
							<th>Thiết lập</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Chocolate</td>
							<td>Hiện</td>
							<td>
								<button class="btn btn-xs btn-default" data-toggle="modal"
									data-target=".bs-example-modal-lg" type="button">Sửa</button>
								<button class="btn btn-xs btn-danger" data-toggle="modal"
									data-target="#gridSystemDelete" type="button">Xoá</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
	aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Sửa danh mục</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" role="form">
					<div class="form-group">
						<label class="control-label col-sm-2" for="tenDanhMuc">Tên danh
							mục:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="tenDanhMuc"
								placeholder="Nhập tên danh mục">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="tenDanhMuc">Trạng thái:</label>
						<div class="col-sm-10">
							<select class="form-control">
								<option selected="selected">Mustard</option>
								<option>Ketchup</option>
								<option>Relish</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Submit</button>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer"></div>
		</div>
	</div>
</div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
	aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Sửa danh mục</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" role="form">
					<div class="form-group">
						<label class="control-label col-sm-2" for="tenDanhMuc">Tên danh
							mục:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="tenDanhMuc"
								placeholder="Nhập tên danh mục">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="tenDanhMuc">Trạng thái:</label>
						<div class="col-sm-10">
							<select class="form-control">
								<option selected="selected">Mustard</option>
								<option>Ketchup</option>
								<option>Relish</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Submit</button>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer"></div>
		</div>
	</div>
</div>

@stop
