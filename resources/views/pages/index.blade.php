@extends('layouts.app')
@section('content')
<div class="container marketing">
    <div class="row">
        <div class="col-lg-4">
            <img alt="Generic placeholder image" class="rounded-circle" height="140" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="140">
                <h2>
                    Total users registados
                    {{ count($users) }}
                </h2>
                <p>
                    <a class="btn btn-secondary" href="#" role="button">
                        View details »
                    </a>
                </p>
            </img>
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img alt="Generic placeholder image" class="rounded-circle" height="140" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="140">
                <h2>
                  Numero de contas
                </h2>
                <p>    
                      <a class="btn btn-secondary" href="#" role="button">
                        View details »
                    </a>
                </p>
            </img>
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img alt="Generic placeholder image" class="rounded-circle" height="140" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="140">
                <h2>
                    Numero de movimentos
                </h2>
                <p>
                    <a class="btn btn-secondary" href="#" role="button">
                        View details »
                    </a>
                </p>
            </img>
        </div>
        <!-- /.col-lg-4 -->
    </div>
</div>
@endsection