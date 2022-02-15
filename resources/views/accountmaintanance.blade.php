@extends('masterlayout')

@section('container')
<div class="container content my-5 px-5">
    <h2 class="text-center mb-5"> {{ __('Account Maintenance') }} </h2>
        <table class="table table-light">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center" scope="col"> {{ __('Account') }} </th>
                    <th class="text-center" scope="col" colspan="2"> {{ __('Action') }} </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listAccount as $item)
                    <tr class="text-center">
                        <td> {{ $item->first_name }} {{ $item->middle_name }} {{ $item->last_name }}-{{ __($item->role->role_desc) }}</td>
                        <td class="d-flex justify-content-center">
                            <a class="btn btn-success px-5 me-5" href="/role-updates/{{ $item->account_id }}"> {{ __('Update') }} </a> 
                            <form action="/deleteaccount" method="POST">
                                @csrf
                                <input type="hidden" name="item" id="item" value="{{ $item->account_id }}">
                                <button type="submit" class="btn btn-danger px-5" > {{ __('Delete') }}</button>
                            </form>
                        </td>
                    </tr>    
                @endforeach
            </tbody>
        </table>
</div>
@endsection