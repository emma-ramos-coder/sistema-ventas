@extends('layouts.app')

@section('template_title')
    Sale Detail
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Sale Detail') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('sale-details.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Article Id</th>
										<th>Quantity</th>
										<th>Price</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($saleDetails as $saleDetail)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $saleDetail->sale_id }}</td>
											<td>{{ $saleDetail->article_id }}</td>
											<td>{{ $saleDetail->quantity }}</td>
											<td>{{ $saleDetail->price }}</td>

                                            <td>
                                                <form action="{{ route('sale-details.destroy',$saleDetail->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('sale-details.show',$saleDetail->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('sale-details.edit',$saleDetail->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $saleDetails->links() !!}
            </div>
        </div>
    </div>
@endsection
