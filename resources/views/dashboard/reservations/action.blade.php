<a class="btn btn-primary btn-sm mb-1" href="#">
    <i class="fas fa-folder"> </i> View
</a>

@if($client_id == auth()->user()->id || auth()->user()->hasRole('admin','manager'))
    <a href="{{ route('dashboard.reservations.edit', $id) }}" class="btn btn-info btn-sm mb-1">
        <i class="fas fa-pencil-alt"> </i> Edit
    </a>

    <form action="{{ route('dashboard.reservations.destroy', $id) }}" method="post" style="display: inline-block;">
        {{ csrf_field() }}
        {{ method_field('delete') }}
        <button type="submit" class="btn btn-danger delete btn-sm" onclick="return confirm('Are you sure ?')">
            <i class="fa fa-trash"></i> Delete
        </button>
    </form><!-- end of form -->
@endif