<td>
    <a href="{{ route('achievements.show', $model->id) }}" class="btn btn-outline-success btn-sm mb-1">
        <i class="bi bi-eye-fill"></i>
    </a>

    @can('user edit')
        <a href="{{ route('achievements.edit', $model->id) }}" class="btn btn-outline-primary btn-sm mb-1">
            <i class="bi bi-pen"></i>
        </a>
    @endcan

    @can('user delete')
        <form action="{{ route('achievements.destroy', $model->id) }}" method="post" class="d-inline"
            onsubmit="return confirm('Are you sure to delete this record?')">
            @csrf
            @method('delete')

            <button class="btn btn-outline-danger btn-sm mb-1">
                <i class="bi bi-trash-fill"></i>
            </button>
        </form>
    @endcan
</td>
