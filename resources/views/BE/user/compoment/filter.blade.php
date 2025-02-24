<form action="{{route('user.index')}}">
    <div class="filter">
        <div class="uk-flex uk-flex-middle uk-flex-space-between">
         <div class="perpage">
            @php
            $perpage =request('perpage') ?: old('perpage');
            @endphp
             <div class="uk-flex uk-flex-middle uk-flex-space-between">
                 <select name="perpage" class="form-control input-sm perpage filter mr10">
                    @for ($i = 10; $i <= 200; $i += 10)
                    <option value="{{ $i }}">{{ $i }} bản ghi</option>
                @endfor
                 </select>
             </div>
         </div>
         <div class="action" style="display: flex">
             <div class="uk-flex uk-flex-middle "  style="margin-right: 5px">
                 <select name="user_catalogue_id" class="form-control mr10"  style="margin-right: 5px">
                     <option value="0" selected="selected">Chọn Nhóm Thành Viên</option>
                     <option value="1">Quản trị viên</option>
                 </select>
             </div>
             <div class="uk-search uk-flex uk-flex-middle mr10" style="margin-right: 5px">
                 <div class="input-group"  style="margin-right: 5px">
                     <input type="text" class="form-control" name="keyword" value="{{request('keyword')?: old('keyword')}}" placeholder="Nhập Từ Khóa Tìm Kiếm...">
                     <span class="input-group-btn"  style="margin-right: 5px">
                         <button class="btn btn-primary" type="submit" name="search" value="search">Tìm Kiếm</button>
                     </span>
                 </div>
             </div>
             <a href="" class="btn btn-danger"  style="margin-right: 5px"><i class="fa fa-plus"></i>Thêm Mới Thành Viên</a>
         </div>
     </div>
         </div>


</form>
