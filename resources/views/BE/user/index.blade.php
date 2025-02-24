

<div class="row wrapper border-bottom white-bg page-heading"    >

     <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{config('apps.user.member_list')}}</h5>
             @include('be.user.compoment.toolbox')
            </div>
            <div class="ibox-content">
            @include('be.user.compoment.filter')
                <div class="table-responsive">
          @include('be.user.compoment.table')
                </div>

            </div>
        </div>
</div>


