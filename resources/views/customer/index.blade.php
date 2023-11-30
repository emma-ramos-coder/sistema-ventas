@extends('layouts.app')

@section('template_title')
{{ __('Customer') }}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Customer') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('customers.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

										<th>Numero de Documento</th>
										<th>Tipo de Documento</th>
										<th>Nombres</th>
										<th>Apellidos</th>
										<th>Dirección</th>
										<th>Ciudad</th>
										<th>Teléfono</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $customer)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $customer->document_number }}</td>
											<td>{{ $customer->documentType->description }}</td>
											<td>{{ $customer->names }}</td>
											<td>{{ $customer->surnames }}</td>
											<td>{{ $customer->address }}</td>
											<td>{{ $customer->city->city_name }}</td>
											<td>{{ $customer->phone }}</td>

                                            <td>
                                                <form action="{{ route('customers.destroy',$customer->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('customers.show',$customer->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('customers.edit',$customer->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $customers->links() !!}
            </div>
        </div>
    </div>
@endsection
