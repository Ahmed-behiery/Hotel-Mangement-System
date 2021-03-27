<div class="d-flex">
<a class="btn btn-success btn-sm mr-1" href="#">
    <i class="fas fa-eye"> </i> View
</a>

@if($manager_id == auth()->user()->id || auth()->user()->hasRole('admin','manager'))
    <a href="{{ route('dashboard.floors.edit', $id) }}" class="btn btn-info btn-sm mr-1">
        <i class="fas fa-pencil-alt"> </i> Edit
    </a>

    <form action="{{ route('dashboard.floors.destroy', $id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('delete') }}
        <button type="submit" class="btn btn-danger delete btn-sm" onclick="return confirm('Are you sure ?')">
            <i class="fa fa-trash"></i> Delete
        </button>
    </form><!-- end of form -->
@endif
</div>