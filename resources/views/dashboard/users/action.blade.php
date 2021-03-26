<div class="d-flex">
<a class="btn btn-success btn-sm mr-1" href="#">
<i class="far fa-eye"></i> <span>View</span>
</a>


@if($approved_by == auth()->user()->id || auth()->user()->hasRole('admin'))
<a href="{{ route('dashboard.users.edit', $name) }}" class="btn btn-info btn-sm mr-1">
    <i class="fas fa-pencil-alt"> </i> Edit
</a>

<form action="{{ route('dashboard.users.destroy', $name) }}" method="post" style="display: inline-block;">
    {{ csrf_field() }}
    {{ method_field('delete') }}
    <button type="submit" class="btn btn-danger delete btn-sm" onclick="return confirm('Are you sure ?')">
        <i class="fa fa-trash"></i> Delete
    </button>
</form><!-- end of form -->
@endif
</div>
