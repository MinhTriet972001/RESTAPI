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



<form action="{{route('user.destroy', $user->id)}}" method="post" class="box">
    @csrf
    @method('DELETE')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">-Thông Tin Chung</div>
                    <div class="panel-description">
                    <p>Bạn đang muốn xóa thành viên có email là:{{$user->email}}

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
                                    autocomplete="off" readonly>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Họ Tên <span class="text-danger">(*)</span></label>
                                    <input
                                    type="text"
                                    name="name"
                                    value="{{ old('name', $user->name ?? '') }}"
                                    class="form-control" placeholder="" autocomplete="" readonly>
                                </div>
                            </div>
                        </div>





                    </div>
                </div>
            </div>
        </div>
<hr>

        <div class="text-right">
            <button class="btn btn-danger" type="submit" name="send" value="send">Xóa Dữ Liệu</button>
        </div>
    </div>
</form>

