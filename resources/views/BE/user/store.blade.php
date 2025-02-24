@include('backend.dashboard.compoment.breackum');

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@php
    $url = ($config['method'] == 'create') ? route('user.store') : route('user.update',$user->id);
@endphp

<form action="{{$url}}" method="post" class="box">

      @csrf
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">-Thông Tin Chung</div>
                    <div class="panel-description"> Nhập Thông Tin Liên Hệ Của Người Sử Dụng
                    <p>-Những Trường Dánh Dấu <span class="text-danger" >(*)</span>Là Bắt Buộc</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ibox">
                    <div class="ibox-title">
                    </div>
                    <div class="ibox-content">
                        <div class="row mb-10">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Email <span class="text-danger">(*)</span></label>
                                    <input
                                    type="text"
                                    name="email"
                                    value="{{ old('email', $user->email ?? '') }}"
                                    class="form-control"
                                    placeholder=""
                                    autocomplete="off">

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Họ Tên <span class="text-danger">(*)</span></label>
                                    <input
                                    type="text"
                                    name="name"
                                    value="{{ old('name', $user->name ?? '') }}"
                                    class="form-control" placeholder="" autocomplete="">
                                </div>
                            </div>
                        </div>
                        @php
                            $userCatalogue =[
                                '[Chọn Nhóm Thành Viên]',
                                'Quản Trị Viên',
                                'Cộng Tác Viên',
                    ];
                        @endphp
                        <div class="row mb-10">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Nhóm Thành Viên <span class="text-danger">(*)</span></label>
                                    <select name="user_catalogue_id" class="form-control setupSelect2">
                                        @foreach($userCatalogue as $key => $item)
                                            <option
                                                {{ $key == old('user_catalogue_id', (isset($user->user_catalogue_id) ? $user->user_catalogue_id : '')) ? 'selected' : '' }}
                                                value="{{ $key }}">
                                                {{ $item }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Ngày Sinh <span class="text-danger">(*)</span></label>
                                    <input
                                    type="date"
                                    name="birthday"
                                    id="birthday"
                                    value="{{ old('birthday', isset($user->birthday) && $user->birthday ? date('Y-m-d', strtotime($user->birthday)) : '') }}"




                                    class="form-control"
                                    autocomplete="off">
                                </div>
                            </div>
                        </div>
                          @if($config['method']=='create')
                        <div class="row mb-10">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Mật Khẩu <span class="text-danger">(*)</span></label>
                                    <input type="password" name="password" value="" class="form-control" placeholder="" autocomplete="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Nhập Lại Mật Khẩu <span class="text-danger">(*)</span></label>
                                    <input type="password" name="re_password" value="" class="form-control" placeholder="" autocomplete="">
                                </div>
                            </div>
                        </div>
                     @endif

                        <div class="row mb-10">
                            <div class="col-lg-12">
                                <div class="form-row">
                                    <label for="img-upload" class="control-label text-left">Ành Đại Diện</label>
                                    <input type="file" name="img" value="{{ old('img') }}" class="form-control input-image" placeholder="" autocomplete="off" data-upload="Images">


                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
<hr>

        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">Thông Tin Liên Hệ</div>
                    <div class="panel-description">Nhập Thông Tin Liên Hệ Của Người Sử Dụng</div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ibox">
                    <div class="ibox-title">
                    </div>
                    <div class="ibox-content">
                        <div class="row mb-10">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Thành Phố </label>
                                  <select name="province_id" class="form-control setupSelect2 province location" data-target="districts">
                                    <option value="0">[Chọn Thành Phố]</option>
                                   @if(isset($provinces))
                                   @foreach($provinces as $province)
                                   <option @if(old('province_id')==$province->code) selected @endif value="{{$province->code}}">{{$province->name}}</option>
                                   @endforeach
                                   @endif
                                  </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="district_id" class="control-label text-left" data-target="wards">Quận/Huyện</label>
                                    <select name="district_id" class="form-control districts location" data-target="wards">
                                        <option value="0">[Chọn Quận/Huyện]</option>

                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="row mb-10">

                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left ">Phường/Xã </label>
                                     <select name="ward_id" id="" class="form-control setupSelect2 wards">
                                        <option value="0">[Chọn Phường Xã]</option>

                                     </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Địa Chỉ </label>
                                    <input type="text" name="address" value="{{ old('address', $user->address ?? '') }}" class="form-control" placeholder="" autocomplete="">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-10">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Số Điện Thoại </label>
                                    <input type="text" name="phone" value="{{ old('phone', $user->phone ?? '') }}" class="form-control" placeholder="" autocomplete="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Ghi Chú</label>
                                    <input type="password" name="desc" value="{{ old('phone', $user->desc ?? '') }}" class="form-control" placeholder="" autocomplete="">
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
        <div class="text-right">
            <button class="btn btn-primary" type="submit" name="send" value="send">Lưu Lại</button>
        </div>
    </div>
</form>
<script>
var province_id = '{{ isset($user->province_id) ? $user->province_id : old('province_id') }}';

    var district_id = '{{ isset($user->district_id) ? $user->district_id : old('district_id') }}';
    var ward_id = '{{ isset($user->ward_id) ? $user->ward_id : old('ward_id') }}';
</script>
