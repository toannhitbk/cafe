@extends('backend.layouts')
@section('contents')
	<div class="row">
        <div class="col-md-12">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>Email</th>
                <th>Trạng thái</th>
                <th>Thiết lập</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>toanbk@hotmail.com.vn</td>
                <td>Đã xem</td>
                <td><button class="btn btn-xs btn-default" type="button">Phản hồi</button><button class="btn btn-xs btn-danger" type="button">Xoá</button></td>
              </tr>
            </tbody>
          </table>
        </div>
       
@stop