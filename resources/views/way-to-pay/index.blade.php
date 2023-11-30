@extends('layouts.app')

@section('template_title')
{{__('Way To Pay')}}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Way To Pay') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('way-to-pays.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Descripción de la forma de pago</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($wayToPays as $wayToPay)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $wayToPay->way_to_pay_description }}</td>

                                            <td>
                                                <form action="{{ route('way-to-pays.destroy',$wayToPay->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('way-to-pays.show',$wayToPay->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('way-to-pays.edit',$wayToPay->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $wayToPays->links() !!}
            </div>
        </div>
    </div>
@endsection
