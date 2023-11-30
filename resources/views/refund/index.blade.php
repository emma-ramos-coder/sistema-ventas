@extends('layouts.app')

@section('template_title')
    Refund
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Refund') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('refunds.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Sale Id</th>
										<th>Customer Id</th>
										<th>User Id</th>
										<th>Invoice Date</th>
										<th>Way To Pay Id</th>
										<th>Total Refund</th>
										<th>Igv</th>
										<th>Motive</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($refunds as $refund)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $refund->sale_id }}</td>
											<td>{{ $refund->customer_id }}</td>
											<td>{{ $refund->user_id }}</td>
											<td>{{ $refund->invoice_date }}</td>
											<td>{{ $refund->way_to_pay_id }}</td>
											<td>{{ $refund->total_refund }}</td>
											<td>{{ $refund->igv }}</td>
											<td>{{ $refund->motive }}</td>

                                            <td>
                                                <form action="{{ route('refunds.destroy',$refund->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('refunds.show',$refund->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('refunds.edit',$refund->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $refunds->links() !!}
            </div>
        </div>
    </div>
@endsection
