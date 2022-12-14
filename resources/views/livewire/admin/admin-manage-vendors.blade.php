<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="card p-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="pull-left card-title">All Registered Shops</p>
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        @if (Session::has('order_message'))
                            <div class="alert alert-success" role="alert">{{Session::get('order_message')}}</div>
                        @endif
                        <table class="table table-striped table-bordered mb-3">
                            <thead>
                                <tr>
                                    <th>Vendor Name</th>
                                    <th>Vendor Email</th>
                                    <th>Shop Name</th>
                                    <th>Shop Descripion</th>
                                    <th>Shop Status</th>
                                    <th>Registered Date</th>
                                    <th colspan="2" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vendors  as $vendor)
                                    <tr>
                                        <td>{{$vendor->owner->name}}</td>
                                        <td>{{$vendor->owner->email}}</td>
                                        <td>{{$vendor->name}}</td>
                                        <td>{{$vendor->description}}</td>
                                        <td>
                                            @if($vendor->is_active === 1)
                                            <span class="btn btn-success btn-sm">Active</span>
                                            @else
                                            <span class="btn btn-danger btn-sm">In active</span>
                                            @endif
                                        </td>
                                        <td>{{$vendor->created_at}}</td>
                                        <td>
                                            <a href="{{route('admin.edit_vendors',['vendor_id'=>$vendor->id])}}"><i class="fa fa-edit fa-2x"></i></a>
                                            <a href="#" onclick="confirm('Are you sure to delete this Shop?') || event.stopImmediatePropagation()" wire:click.prevent="deleteCategory({{$vendor->id}})"><i class="fa fa-times fa-2x text-danger" style="margin-left: 10px;"></i></a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{$vendors->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
