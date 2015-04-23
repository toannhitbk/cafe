@extends('backend.layouts')
@section('contents')
	<div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">
           <button class="btn btn-lg btn-primary" type="button">Tạo mới</button></h3>
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
                    <button class="btn btn-xs btn-default" data-target="#gridSystemEdit" data-toggle="modal" type="button">Sửa</button>
                    <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#gridSystemDelete" type="button">Xoá</button>
                </td>
              </tr>
            </tbody>
          </table>
            </div>
          </div>
        </div>
</div>
       
@stop