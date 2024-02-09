@if($model->is_active)
    <span class="badge bg-success">Active</span>
@else
    <span class="badge bg-danger">Non-Active</span>
@endif
