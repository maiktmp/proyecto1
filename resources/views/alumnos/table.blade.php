<table class="table table-responsive" id="alumnos-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Last Name P</th>
        <th>Last Name M</th>
        <th>Email</th>
        <th>User</th>
        <th>Password</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($alumnos as $alumno)
        <tr>
            <td>{!! $alumno->name !!}</td>
            <td>{!! $alumno->last_name_p !!}</td>
            <td>{!! $alumno->last_name_m !!}</td>
            <td>{!! $alumno->email !!}</td>
            <td>{!! $alumno->user !!}</td>
            <td>{!! $alumno->password !!}</td>
            <td>
                {!! Form::open(['route' => ['alumnos.destroy', $alumno->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('alumnos.show', [$alumno->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('alumnos.edit', [$alumno->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>