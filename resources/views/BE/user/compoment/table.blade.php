<table class="table table-striped table-bordered table-hover dataTables-example" >
    <thead>
    <tr>
        <th><input type="checkbox" value="" id="checkAll" class="input-checkbox"></th>
        <th>Ảnh Đại Diện</th>
        <th>Họ Tên</th>
        <th>Email</th>
        <th>Số Điện Thoại</th>
        <th>Địa Chỉ</th>
        <th>Tình Trạng</th>
        <th>Thao Tác</th>

    </tr>
    </thead>
    <tbody>
        @if (isset($users)&& is_object($users))
        @foreach ($users as $user )
        <tr>
            <td><input type="checkbox" class="input-checkbox checkboxitem"></td>
            <td>
                <img src="{{$user->image}}" alt="" style="width: 50px; height: 50px;">
            </td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->address}}</td>
            <td class="text-center">
                <input type="checkbox" value="{{$user->publish}}" class="js-switch status" data-field="public" data-model="User" checked /> <!-- Nút chuyển đổi -->
            </td>
           <td class="text-center">
                <a href="" class="btn btn-success">
                    <i class="fa fa-edit"></i>
                </a>

              <a href="{}" class="btn btn-success"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        @endforeach
        @endif
    </tbody>
    </table>

    {{$users->links('pagination::bootstrap-4')}}



