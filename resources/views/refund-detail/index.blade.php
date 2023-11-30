@extends('layouts.app')

@section('template_title')
    Refund Detail
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Refund Detail') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('refund-details.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Refund Id</th>
										<th>Article Id</th>
										<th>Quantity</th>
										<th>Price</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($refundDetails as $refundDetail)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $refundDetail->refund_id }}</td>
											<td>{{ $refundDetail->article_id }}</td>
											<td>{{ $refundDetail->quantity }}</td>
											<td>{{ $refundDetail->price }}</td>

                                            <td>
                                                <form action="{{ route('refund-details.destroy',$refundDetail->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('refund-details.show',$refundDetail->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('refund-details.edit',$refundDetail->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $refundDetails->links() !!}
            </div>
        </div>
    </div>
@endsection
