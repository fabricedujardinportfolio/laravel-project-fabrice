<div class="container d-md-flex d-block">
    <div class="col-md-3 col-12"></div>
    <div class="col-md-6 col-12">
        <table class="table table-secondary table-striped table-hover table-bordered border-primary">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Doctor</th>
                    <th scope="col">Reserv</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($doctors as $doctor)
                <tr>
                    <th>{{$loop->index +1}}</th>
                    <th scope="row text-capitalize">{{$doctor->name}}</th>
                    <th class="text-center">
                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                            <a href="{{ route('reservations', $doctor->id)}}">
                                <button type="button" class="btn btn-outline-primary">Prendre un rdv</button>
                            </a>
                        </div>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
            {{ $doctors->links() }}
    </div>
    <div class="col-md-3 col-12"></div>
</div>
