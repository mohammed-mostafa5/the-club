<!--begin: Datatable-->
<table class="table table-separate table-head-custom table-checkable" id="kt_datatable1">
    <thead>
        <tr>
            <th>@lang('models/academies.fields.branch_id')</th>
        <th>@lang('models/academies.fields.name')</th>
        <th>@lang('models/academies.fields.about')</th>
        <th>@lang('models/academies.fields.team')</th>
        <th>@lang('models/academies.fields.icon')</th>
            <th>@lang('crud.action')</th>
        </tr>
    </thead>
    <tbody>
        @foreach($academies as $academy)
            <tr>
                <td>{{ $academy->branch_id }}</td>
            <td>{{ $academy->name }}</td>
            <td>{{ $academy->about }}</td>
            <td>{{ $academy->team }}</td>
            <td>{{ $academy->icon }}</td>
                <td nowrap>
                    {!! Form::open(['route' => ['adminPanel.academies.destroy', $academy->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                    @can('academies view')
                        <a href="{{ route('adminPanel.academies.show', [$academy->id]) }}" class='btn btn-sm btn-shadow mx-1 btn-transparent-success'><i class="fa fa-eye"></i></a>
                    @endcan
                    @can('academies edit')
                        <a href="{{ route('adminPanel.academies.edit', [$academy->id]) . "?languages=" . \App::getLocale() }}" class='btn btn-sm btn-shadow mx-1 btn-transparent-primary'><i class="fa fa-edit"></i></a>
                    @endcan
                    @can('academies destroy')
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-sm btn-shadow mx-1 btn-transparent-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    @endcan
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<!--end: Datatable-->
