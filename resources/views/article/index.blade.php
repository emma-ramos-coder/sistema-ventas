@extends('layouts.app')

@section('template_title')
{{__('Article')}}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Article') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('articles.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

										<th>Descripción</th>
										<th>Precio de venta</th>
										<th>Precio de costo</th>
										<th>Stock</th>
										<th>Tipo de artículo</th>
										<th>Proveedor</th>
										<th>Fecha de ingreso</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($articles as $article)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $article->description }}</td>
											<td>{{ $article->sale_price }}</td>
											<td>{{ $article->cost_price }}</td>
											<td>{{ $article->stock }}</td>
											<td>{{ $article->itemType->item_type_description }}</td>
											<td>{{ $article->supplier->tradename }}</td>
											<td>{{ $article->admission_date }}</td>

                                            <td>
                                                <form action="{{ route('articles.destroy',$article->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('articles.show',$article->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('articles.edit',$article->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $articles->links() !!}
            </div>
        </div>
    </div>
@endsection
