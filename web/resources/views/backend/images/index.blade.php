@extends('backend.layouts')
@section('contents')
	<div class="row">
        <div class="col-md-12">
          <table class="table table-bordered">
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
                <td><button class="btn btn-xs btn-default" type="button">Sửa</button><button class="btn btn-xs btn-danger" type="button">Xoá</button></td>
              </tr>
            </tbody>
          </table>
        </div>
       
@stop